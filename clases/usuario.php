<?php
class Usuario{
    private $userName;
    private $email;
    private $password;
    private $passwordRepeat;
    private $avatar;

    public function __construct( $email, $password, $passwordRepeat=null, $userName=null,$avatar=null){
        $this->userName = $userName;
        $this->email = $email;
        $this->password = $password;
        $this->passwordRepeat = $passwordRepeat;
        $this->avatar = $avatar;
    }
    public function getUserName(){
        return $this->userName; 
    }
    public function getEmail(){
        return $this->email; 
    }
    public function getPassword(){
        return $this->password; 
    }
    public function getPasswordRepeat(){
        return $this->passwordRepeat; 
    }
    public function getAvatar(){
        return $this->avatar; 
    }
    public function setUserName($userName){
        $this->userName = $userName; 
    }
    public function setEmail($email){
        $this->email = $email; 
    }
    public function setPassword($password){
        $this->password = $password; 
    }
    public function setPaswordRepeat($passwordRepeat){
        $this->passwordRepeat = $passwordRepeat; 
    }
    public function setAvatar($avatar){
        $this->avatar= $avatar;  
    }



    
}