<?php
class Usuario{
    //put your code here
    private $usu_id;
    private $usu_usuario;
    private $usu_clave;
    private $per_nombres;
    private $per_apellidos;
    private $per_cedula;
    private $per_fecha_nac;
    private $per_email;
    private $per_genero;
    function __construct($usu_usuario, $usu_clave, $per_nombres, $per_apellidos, $per_cedula, $per_fecha_nac, $per_email, $per_genero) {
        $this->usu_usuario = $usu_usuario;
        $this->usu_clave = $usu_clave;
        $this->per_nombres = $per_nombres;
        $this->per_apellidos = $per_apellidos;
        $this->per_cedula = $per_cedula;
        $this->per_fecha_nac = $per_fecha_nac;
        $this->per_email = $per_email;
        $this->per_genero = $per_genero;
    }
    function getUsu_id() {
        return $this->usu_id;
    }

    public function getUsu_usuario() {
        return $this->usu_usuario;
    }

    function getUsu_clave() {
        return $this->usu_clave;
    }

    function getPer_nombres() {
        return $this->per_nombres;
    }

    function getPer_apellidos() {
        return $this->per_apellidos;
    }

    function getPer_cedula() {
        return $this->per_cedula;
    }

    function getPer_fecha_nac() {
        return $this->per_fecha_nac;
    }

    function getPer_email() {
        return $this->per_email;
    }

    function getPer_genero() {
        return $this->per_genero;
    }

    function setUsu_id($usu_id) {
        $this->usu_id = $usu_id;
    }

    function setUsu_usuario($usu_usuario) {
        $this->usu_usuario = $usu_usuario;
    }

    function setUsu_clave($usu_clave) {
        $this->usu_clave = $usu_clave;
    }

    function setPer_nombres($per_nombres) {
        $this->per_nombres = $per_nombres;
    }

    function setPer_apellidos($per_apellidos) {
        $this->per_apellidos = $per_apellidos;
    }

    function setPer_cedula($per_cedula) {
        $this->per_cedula = $per_cedula;
    }

    function setPer_fecha_nac($per_fecha_nac) {
        $this->per_fecha_nac = $per_fecha_nac;
    }

    function setPer_email($per_email) {
        $this->per_email = $per_email;
    }

    function setPer_genero($per_genero) {
        $this->per_genero = $per_genero;
    }




}




