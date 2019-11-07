<?php
class Validador{
    public function validarRegistro(Usuario $usuario){
        
        //Este representa mi array donde voy a ir almacenando los errores, que luego muestro en la vista al usuario.|
        $errores = [];
        $userName = trim($usuario->getUserName());
        if(empty($userName )){
            $errores['userName']="El campo nombre no lo puede dejar en blanco..";
        }
        $email = trim($usuario->getEmail());
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $errores['email']="Email inválido...";
        }
        $password = trim($usuario->getPassword());
        if(empty($password)){
            $errores['password']="El password no puede ser blanco...";
        }elseif (!is_numeric($password)) {
            $errores['password']="El password debe ser numérico...";
        }elseif (strlen($password)<6) {
            $errores['password']="El password como mínimo debe tener 6 caracteres...";
        }
        $passwordRepeat = trim($usuario->getPasswordRepeat());
        if($password != $passwordRepeat){
            $errores['passwordRepeat']="Las contraseñas deben ser iguales";
        }
        if($usuario->getAvatar()!=null){
            $imagen = $usuario->getAvatar();
        
            $nombre = $imagen['avatar']['name'];
            $ext = pathinfo($nombre,PATHINFO_EXTENSION);
            if($imagen['avatar']['error']!=0){
                $errores['avatar']="Debes subir tu foto...";
        
            }elseif ($ext != "jpg" && $ext != "png") {
                $errores['avatar']="Formato inválido";
            }        
        }
        return $errores;   
    }
    //Metodo creado para validar el login del usuario
    public function validacionLogin($usuario){
        $errores=array();
    
        $email = trim($usuario->getEmail());
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errores["email"]="Email invalido !!!!!";
        }
        $password= trim($usuario->getPassword());
       
        if(empty($password)){
            $errores["password"]= "El campo password es requerido";
        }elseif (strlen($password)<6) {
            $errores["password"]="La contraseña debe tener como mínimo 6 caracteres";
        }
    
        return $errores;
    }
    //Método para validar si el usuario desea recuperar su contraseña
    public function validacionOlvide($usuario){
        
        $errores=array();
    
        $email = trim($usuario->getEmail());
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errores["email"]="Email invalido !!!!!";
        }
        $password= trim($usuario->getPassword());
   
        $repassword = trim($usuario->getPasswordRepeat());
        

        if(empty($password)){
            $errores["password"]= "El campo password es requerido";
        }elseif (strlen($password)<6) {
            $errores["password"]="La contraseña debe tener como mínimo 6 caracteres";
        }
        if(empty($repassword)){
            $errores["repassword"]= "El campo confirmar contraseña es requerido";
        }
    
        return $errores;
    }
    
}