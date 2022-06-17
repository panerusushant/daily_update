<?php

class Hash {

    protected $password;

    public function __construct($password){

        $this->password = $password;
        
    }

    public function hashPassword(){
        try{
      $hashedPassword = password_hash($this->password, PASSWORD_DEFAULT);

      return $hashedPassword;
        }catch(Exception $e){
            die('Password cannot be hashed!'.$e-> getMessage() );
        }

    }
}