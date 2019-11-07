<?php
class BaseJson extends BaseDeDatos{
    private $nombreArchivo;

    public function __construct($nombreArchivo){
        $this->nombreArchivo = $nombreArchivo;
    }
    public function getNombreArchivo(){
        return $this->nombreArchivo;
    }
    public function setNombreArchivo($nombreArchivo){
        $this->nombreArchivo = $nombreArchivo;
    }
    public function buscarPorEmail($email){
        $usuarios = $this->abrir();
        if($usuarios !=null){
            foreach ($usuarios as  $usuario) {
                if($email === $usuario['email']){
                    return $usuario;
                }
            }
        }
        return null;
    }
    public function abrir(){
        if(file_exists($this->getNombreArchivo())){
            $archivoJson = file_get_contents($this->getNombreArchivo());
            //Aquí lo que hago es generar cada array con un salto de linea, para poderlo ver ejecute aquí un dd($archivoJson)
            $archivoJson = explode(PHP_EOL,$archivoJson);
            //Aquí saco el ultimo registro, el cual está en blanco
            //ejecute aquí un ($archivoJson), la idea es para que verifique como se va armando el archivo
            array_pop($archivoJson);
            //ejecute aquí un ($archivoJson), la idea es para que verifique como se va armando el archivo
    
            //Aquí recorro el array y creo mi array con todos los usuarios
            foreach ($archivoJson as  $usuarios) {
                $arrayUsuarios[]= json_decode($usuarios,true);
            }
            //Aquí retorno el array de usuarios con todos sus datos
            return $arrayUsuarios;
        }else{
            return null;
        }
    }
    public function guardar(array $registro){
        $archivoJson = json_encode($registro);
        file_put_contents($this->getNombreArchivo(),$archivoJson.PHP_EOL,FILE_APPEND);
    }
    public function jsonRegistroOlvide($email,$password){
        $usuarios = $this->abrir();
        
        foreach ($usuarios as $key=>$usuario) {
            
            if($email==$usuario["email"]){
                //Esta línea se las comente para que a futuro puedan probar si la clave nueva la van a grabar correctamente, la idea es verla antes de hashearla. le pueden aplicar un dd() y verificar que les trae
                //$usuario["password"]= $datos["password"];
                $usuario["password"]= Encriptador::hashPassword($password);
                //Aquí guardamos el registro del usuario, pero con el password hasheado
                $usuarios[$key] = $usuario;    
            }
            //Si no es el usuario, entonces va de igual forma a guardar todo los usuarios
            $usuarios[$key] = $usuario;    
        }
        
        //Esto se los coloque para que sepan que con esta función podemos borrar un archivo
        unlink($this->nombreArchivo);
        //Aquí vuelvo a recorrer el array para poder guardar un registro bajo el otro, haciendo uso de la constante de php PHP_EOL
        foreach ($usuarios as  $usuario) {
            $jsusuario = json_encode($usuario);
            file_put_contents($this->nombreArchivo,$jsusuario. PHP_EOL,FILE_APPEND);
        }
    
     
    //Esta función no retorna nada, ya que su  responsabilidad es guardar al usuario, pero con su nueva contraseña
    }
    public function insertar(){
        //Mas adelante realizamos el código cuando veamos BD - PDO
    }
    public function modificar(){
        //Mas adelante realizamos el código cuando veamos BD - PDO
    }
    public function borrar(){
        //Mas adelante realizamos el código cuando veamos BD - PDO        
    }
}