<?php
class Account{
    private $balance;
    private $acc_number;

    public function setAccNo($number){
        $this->acc_number = $number;
    }

    public function deposit($amount){
        $this->balance =$amount;
    }
    public function getBalance(){
        return $this->balance;
    }
}

class SavingsAccount extends Account {
    private $interestRate;

    public function setInterestRate($rate){
        $this->interestRate = $rate;
    }

        public function updatBalance(){
            $interest = $this->getBalance() * $this->interestRate;
            $this->deposit(($this->getBalance()+$interest));

        }
}

$account = new SavingsAccount();
$account -> setAccNo("100400500");
$account-> deposit(10000);
$account->setInterestRate(0.03);
$account->updatBalance();

echo $account->getBalance();


