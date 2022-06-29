<?php
require_once '../connect.php';
abstract class Persona extends connect{
    protected $id;
    protected $nom;
    protected $dni;
    protected $email;
    protected $edat;
    
    public function __construct($id,$nom,$dni,$email,$edat) {
        parent::__construct();
        $this->id=$id;
        $this->dni=$dni;
        $this->nom=$nom;
        $this->edat=$edat;
        $this->email=$email;
    }
    
    
}

