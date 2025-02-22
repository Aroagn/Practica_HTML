<?php

require_once "interfaces/IToJson.php";

class User implements IToJson{

    protected $nombre = "";
    protected $apellidos = "";
    protected $sexo = "";
    protected $telefono = "";
    protected $email = "";
    protected $password = "";

    public function __construct($nombre, $apellidos, $sexo, $telefono, $email, $password){
        
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->sexo = $sexo;
        $this->telefono = $telefono;
        $this->email = $email;
        $this->password = $password;
    }

    // Getters y Setters
    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre){
        return $this->nombre = $nombre;
    }

    public function getApellidos(){
        return $this->apellidos;
    }
    public function setApellidos($apellidos){
        return $this->apellidos = $apellidos;
    }

    public function getSexo(){
        return $this->sexo;
    }
    public function setSexo($sexo){
        return $this->sexo = $sexo;
    }

    public function getTelefono(){
        return $this->telefono;
    }
    function setTelefono($telefono){
        return $this->telefono = $telefono;
    }

    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        return $this->email = $email;
    }

    public function getPassword(){
        return $this->password;
    }
    public function setPassword($password){
        return $this->password = $password;
    }

    // Método toJSON
    public function toJSON(){
        $mostrarDatos = array(
            "nombre" => $this->nombre,
            "apellidos" => $this->apellidos,
            "sexo" => $this->sexo,
            "telefono" => $this->telefono,
            "email" => $this->email,
            "password" => $this->password,
        );
        
        $miJson = json_encode($mostrarDatos, JSON_UNESCAPED_UNICODE);
        return $miJson;
    }
}