<?php

class User{
    protected $id;
    protected $name;
    protected $surname;
    protected $email;
    private $location;
    public $avatar;
    protected $anno_iscrizione;
    protected $messaggi_inviati;
    protected $like_ricevuti;


    public function __construct($_id){
        $this->id = $_id;
    }

    public function setProfile($_name,$_surname,$_email){
        $this->surname = $_surname;
        $this->email = $_email;

        if(strlen($_surname) < 3 || is_numeric($_email)){
            throw new Exception('check your data');
        } else{
            $this->name = $_name;
        }
    }

    public function getProfile(){
        return $this->name;
    }
}