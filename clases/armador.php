<?php
class Armador{
    public function armarAvatar($imagen){
        $nombre = $imagen['avatar']['name'];
        $ext = pathinfo($nombre,PATHINFO_EXTENSION);
        $archivoOrigen = $imagen['avatar']['tmp_name'];
        $archivoDestino = dirname(__DIR__);
        $archivoDestino = $archivoDestino."/imagenes/";
        $avatar = uniqid();
        $archivoDestino = $archivoDestino.$avatar.".".$ext;
        //Aquí estoy copiando al servidor nuestro archivo destino creado
        move_uploaded_file($archivoOrigen,$archivoDestino);
        //Aquí estoy retornando al usuario sólo la imagen, la cual será guardada en el archivo json
        $avatar = $avatar.".".$ext;
        return $avatar;
    }
    public function armarUsuario(Usuario $usuario,$avatar){
        $usuario = [
            'userName' => $usuario->getUserName(),
            'email' => $usuario->getEmail(),
            'password' => Encriptador::hashPassword($usuario->getPassword(),PASSWORD_DEFAULT),
            'avatar'=>$avatar,
            'role'=>1
        ];
        return $usuario;
    
    }
}