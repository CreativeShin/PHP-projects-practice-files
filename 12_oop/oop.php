<?php

  class Person{
    private $name;
    private $email;
    public static $ageLimit = 40;
    public static function getAgeLimit(){
      return self::$ageLimit;
    }

    //getter and setters
    public function getName(){
      return $this->name;
    }

    public function setName($n){
      $this->name = $n;
    }

    # constructor
    public function __construct($name, $email){
      echo __CLASS__.' created<br>';
      $this->name = $name."<br>";
      $this->email = $email."<br>";
    }

    # destructor

    public function __destruct(){
      echo '<br>Destroyed';
    }
  }

  $person1 = new Person('John Snow', 'jon@got.com'); //instanciating the Person obj

  // $person1->name = 'John Doe';
  // echo $person1->name;
  // $person1->setName("Jorah Mormont");
  echo $person1->getName();


  # inheritance

  class Customer extends Person{
    private $balance;
    public function setBalance($bal){
        $this->balance = $bal;
    }
    public function getBalance(){
      return $this->balance;
    }

    # constructor

    public function __construct($name, $email, $bal){
      parent::__construct($name,$email,$bal);
      $this->balance = $bal;
      echo "<br>New Customer!<br>";
    }
  }

  $customer1 = new Customer('Brandon', 'brandon@got.com', 200);
  echo $customer1->getBalance();

  echo '<br>'.Person::getAgeLimit();
?>
