<?php
require_once 'User.php'; //il parent file 

class SuperUser extends User{ //cannot access parent if you miss out on extends word and its parent file name
    public $point = 10;
    private $income;
    

    public function __construct($_id){
        parent::__construct($_id); //gli eredita dal file User.php
    }

    // ridefinisco il metodo del parent file per le instaze che verranno create con SuperUser
    public function setProfile($_messaggi_inviati){
        $this->messaggi_inviati = $_messaggi_inviati;

        if($_messaggi_inviati < 1000){
            throw new Exception('less than 1000 texts sent out');
        } else{
            $this->point = 10;
        }
    }

    public function getProfile(){
        return $this->point;
    }

    public function setIncome(){
        if(!empty($this->point)){
            $this->income = 30;
        } else{
            throw new Exception('no income');
        }
    }

    public function getIncome(){
        return $this->income;
    }


}