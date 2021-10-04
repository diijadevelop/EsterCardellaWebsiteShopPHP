<?php

class UserManager extends DBManager
{
//costruttore
  public function __construct()
  {
    // chiama costruttore classe padre...
    parent::__construct();
    $this->tableName ='user';
    $this->colums = ['id', 'email', 'password','user_type_id'];
  }
  //Public Methods
  public function login($email, $password){
    $result = $this->db->query("
      SELECT *
      FROM user
      WHERE email = '$email'
      AND password = MD5('$password');
    ");

    if(count($result) > 0){
      $user = (object) $result[0];

        //setto variabile di sessione
        $this->_setUser($user);

        return true;
    }
     return false;

  }

  // Private Methods

  private function _setUser($user){
    $userToStore=(object)[
      'id' => $user->id,
      'email' => $user->email,
      'is_admin' => $user-> user_type_id==1
    ];
    $_SESSION['user']=$userToStore;

  }
}
