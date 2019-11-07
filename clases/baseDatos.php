<?php
abstract class BaseDeDatos{
    public abstract function abrir();
    public abstract function insertar();
    public abstract function modificar();
    public abstract function borrar();
    public abstract function guardar(array $registro);

}