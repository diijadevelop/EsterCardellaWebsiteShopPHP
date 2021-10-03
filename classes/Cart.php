<?php

  class CartManager extends DbManager {
    private $clientId;

    public function __construct(){
      parent::__construct();
      $this->columns = array( 'id', 'client_id' );
      $this->tableName = 'cart';

      $this->_initializeClientIdFromSession();
    }

    // Public Methods

    public function getCartTotal($cartId) {
      $result = $this->db->query("
      SELECT SUM(quantity) as num_products, SUM(quantity*price) AS total
      FROM `cart_item`
      INNER JOIN products
      ON cart_item.product_id=products.id
      WHERE `cart_id` = '1'
      ");
      return $result[0];
    }

    public function getCartItems($cartId){
      return $this->db->query("
      SELECT
      products.name AS name,
      products.description AS description,
      products.price AS single_price,
      cart_item.quantity AS quantity,
      products.price *cart_item.quantity AS total_price,
      products.id as id
      FROM cart_item
      INNER JOIN products
      ON cart_item.product_id=products.id
      WHERE cart_item.cart_id='1'
      ");
    }

    public function removeFromCart($productId, $cartId) {
      $quantity = 0;
      $result = $this->db->query("SELECT quantity, id FROM cart_item WHERE cart_id = $cartId AND product_id = $productId");
      $cartItemId = $result[0]['id'];
      if (count($result) > 0) {
         $quantity = $result[0]['quantity'];
       }
       $quantity--;

       if ($quantity > 0) {
         $this->db->execute("UPDATE cart_item SET quantity = $quantity WHERE cart_id = $cartId AND product_id = $productId");
       } else{
         $cartItemMgr = new CartItemManager();
         $cartItemMgr->delete($cartItemId);
       }
    }

    public function addToCart($productId, $cartId) {
      $quantity = 0;
      $result = $this->db->query("SELECT quantity FROM cart_item WHERE cart_id = $cartId AND product_id = $productId");
      if (count($result) > 0) {
         $quantity = $result[0]['quantity'];
       }
       $quantity++;

       if (count($result) > 0) {
         $this->db->execute("UPDATE cart_item SET quantity = $quantity WHERE cart_id = $cartId AND product_id = $productId");
       } else{
         $cartItemMgr = new CartItemManager();
         $newId = $cartItemMgr->create([
           'cart_id' => $cartId,
           'product_id' => $productId,
           'quantity' => 1
         ]);
       }
    }

    public function getCurrentCartId(){
       $cartId = 0;

        $result = $this->db->query("SELECT id FROM cart WHERE client_id = '$this->clientId'");
        if (count($result) > 0) {
           $cartId = $result[0]['id'];
         } else{
           $cartId = $this->create([
             'client_id' => $this-> clientId
           ]);
         }

         return $cartId;
    }

    // Private Methods

    private function _initializeClientIdFromSession(){
      if (isset($_SESSION['client_id'])){
        $this->clientId = $_SESSION['client_id'];
      }else{
        //genero stringa casuale
        $str = _random_string();
        //setto client id in sessione con questa stringa
        $_SESSION['client_id'] =$str;
        $this->clientId = $str;
      }
    }

    private function _random_string(){
      return substr(md5(mt_rand()), 0, 20);
    }


  }

  class CartItemManager extends DbManager {
    public function __construct(){
      parent::__construct();
      $this->columns = array( 'id', 'cart_id', 'product_id', 'quantity');
      $this->tableName = 'cart_item';
  }
}



    // Public Methods





      // $quantityInCart = $this->quantityInCart($productId, $cartId);
      //
      // if ($quantityInCart > 0){
      //   $this->incrementByOne($productId, $cartId, $quantityInCart);
      // } else {
      //   $this->createItem($productId, $cartId);
      // }



    //
    // private function quantityInCart($productId, $cartId) {
    //   $quantity = 0;
    //   $results = $this->db->query("SELECT quantity FROM cart_item WHERE cart_id = '$cartId' AND product_id = '$productId'");
    //   if(count($results) > 0) {
    //     $quantity = (int)$results[0]['quantity'];
    //   }
    //   return $quantity;
    // }
    //
    // private function incrementByOne($productId, $cartId, $quantityInCart){
    //   $quantityInCart++;
    //   $this->db->query("UPDATE cart_item SET quantity = $quantityInCart WHERE cart_id = '$cartId' AND product_id = '$productId'");
    // }
    //
    // private function decrementOne($productId, $cartId, $quantityInCart){
    //   $quantityInCart--;
    //   $this->db->query("UPDATE cart_item SET quantity = $quantityInCart WHERE cart_id = '$cartId' AND product_id = '$productId'");
    // }
    //
    // private function createItem($productId, $cartId){
    //   $item_id = $this->cartItemMgr->create(new CartItem(0, $cartId, $productId, 1));
    //   //var_dump($item_id); die;
    //   return $item_id;
    // }

    // private function clearCart($cartId){
    //   if($this->userId) {
    //     $this->db->query('DELETE cart, cart_item FROM cart INNER JOIN cart_item ON cart.id = cart_item.cart_id WHERE cart.user_id = ' . $this->userId . ' AND cart.id NOT IN ('.$cartId.')');
    //   } else if ($this->clientIp) {
    //     $this->db->query("DELETE cart, cart_item FROM cart INNER JOIN cart_item ON cart.id = cart_item.cart_id WHERE cart.client_id = '" . $this->clientIp . "' AND cart.id NOT IN ('.$cartId.')");
    //   }
    // }
  //
  //   public function isEmptyCart($cartId){
  //     $results = $this->db->query("SELECT 1 FROM cart_item WHERE cart_id = '$cartId'");
  //     return count($results) == 0;
  //   }
  //
  //   private function createCart(){
  //
  //     $client_id = $this->userId > 0 ? '' : $this->clientId;
  //     $cart_id = $this->create(new Cart(0, $this->userId, $client_id));
  //     return $cart_id;
  //   }
  //
  //   private function removeItem($productId, $cartId){
  //     return $this->db->query("DELETE FROM cart_item WHERE cart_id = '$cartId' AND product_id = '$productId'");
  //   }
  //
  //   private function clearUserCart() {
  //     if($this->userId) {
  //       $this->db->query('DELETE cart, cart_item FROM cart INNER JOIN cart_item ON cart.id = cart_item.cart_id WHERE cart.user_id = ' . $this->userId );
  //     }
  //   }
  //
  //   public function mergeCarts(){
  //
  //     $oldUserCart = $this->db->query("SELECT id FROM cart where user_id = $this->userId");
  //     $oldClientCart = $this->db->query("SELECT id FROM cart where client_id = '$this->clientId'");
  //     //var_dump($oldUserCart, $oldClientCart, $this->userId, $this->clientId); die;
  //     if (count($oldClientCart) > 0 AND count($oldUserCart) == 0){
  //       $result = $this->db->query("UPDATE cart SET user_id = $this->userId, client_id = '' WHERE client_id = '$this->clientId'");
  //     }
  //
  //     else if (count($oldClientCart) > 0 AND count($oldUserCart) > 0 ) {
  //
  //       $userCartId = $oldUserCart[0]['id'];
  //       $userCartItems = $this->getCartItems($userCartId);
  //
  //       $clientCartId = $oldClientCart[0]['id'];
  //       $clientCartItems = $this->getCartItems($clientCartId);
  //
  //
  //       foreach($clientCartItems as $clientItem){
  //
  //         $isAlreadyInCart = false;
  //         $clientProductId = $clientItem['product_id'];
  //
  //         foreach($userCartItems as $userItem){
  //           if ($userItem['product_id'] == $clientProductId){
  //             $isAlreadyInCart = true;
  //             $newQuantity = $userItem['quantity'] + $clientItem['quantity'];
  //             $this->db->query("UPDATE cart_item SET quantity = $newQuantity  WHERE cart_id = $userCartId AND product_id = $clientProductId");
  //             $this->db->query("DELETE FROM cart_item WHERE cart_id = $clientCartId AND product_id = $clientProductId");
  //             break;
  //           }
  //         }
  //
  //         if (!$isAlreadyInCart) {
  //           $this->db->query("UPDATE cart_item SET cart_id = $userCartId  WHERE cart_id = $clientCartId AND product_id = $clientProductId");
  //         }
  //       }
  //
  //       $result = $this->db->query("DELETE FROM cart WHERE id = $clientCartId");
  //     }
  //
  //     unset($_SESSION['client_id']);
  //     return $result;
  //   }
  //
  //
  //
  //   public function removeFromCart($productId, $cartId) {
  //
  //     $quantityInCart = $this->quantityInCart($productId, $cartId);
  //
  //     if ($quantityInCart > 1){
  //       $this->decrementOne($productId, $cartId, $quantityInCart);
  //     } else {
  //       $this->removeItem($productId, $cartId);
  //     }
  //   }
  //

  //
  // }
