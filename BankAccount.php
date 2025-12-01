<?php
class BankAccount {
    public $owner;
    private $balance;

    public function __construct($owner, $balance){
        $this->owner = $owner;
        $this->balance = $balance;
    }
    
    public function deposit($amount){
        if ($amount < 0){
            return "Cant deposit a negative value.";
        }

        $this->balance = $this->balance + $amount;
    }
    
    public function withdraw($amount){
        if($amount > 0){
            return "Cant withdraw a positive value.";
        }
        $this->balance = $this->balance - $amount;
    }
    public function printInfo(){
        echo "Owner: ". $this->owner. "<br>";
        echo "Balance: ". $this->balance. "$";
    }
}
