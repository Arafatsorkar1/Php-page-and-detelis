<?php

namespace App\classes;

class HelloWorld{
    public $message;

    public $firstName , $lastName;
    public $firstNumber, $lastNumber;

    public function __construct()
    {
        $this->message = 'Hello World';

        $this->firstName='Arafatpub';
        $this->lastName='Sorkar';

    }

    /**
     * @return mixed
     */
    public function index()
    {
//        echo $this->message;
//        3 major rules
        /*
         * start with $ sign
         * a-z A-Z 0-9 ,-
         * no number in first
         */
        echo $this->firstName.' &nbsp; &nbsp; &nbsp; '.$this->lastName;
      echo  gettype($this->firstName);
     echo $this->firstNumber=10;
       echo $this->lastNumber=20;
       echo '<br>';
       echo $this->firstNumber++;echo '<br>';
       echo --$this->firstNumber;

       echo '<br>';
       echo $this->firstNumber+$this->lastNumber;
 echo '<br>';
       echo $this->firstNumber-$this->lastNumber;
 echo '<br>';
       echo $this->firstNumber*$this->lastNumber;
 echo '<br>';
       echo $this->firstNumber/$this->lastNumber;
       echo '<br>';
       echo $this->firstNumber%$this->lastNumber;



    }

}