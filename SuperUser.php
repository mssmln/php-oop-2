<?php
require_once 'User.php'; //il parent file 

class SuperUser extends User{ //cannot access parent if you miss out on extends word and its parent file
    protected $point = 10;//decidere se lasciare 10
    private $income;

    public function __construct($_id,$_point){
        parent::__construct($_id); //gli eredita dal file User.php
        $this->point = $_point;
    }

    public function setProfile($_messaggi_inviati){
        $this->messaggi_inviati = $_messaggi_inviati;

        if($_messaggi_inviati < 1000){
            throw new Exception('less than 1000 texts sent out');
        } else{
            $this->point;
        }
    }

    public function getProfile(){
        return $this->point;
    }


}