<?php

class createCon {

    public $con;

    public function __construct() {

        $this->con = new mysqli("localhost", "meet", "c4eVj0@8", "SpaCamp");

        if (!$this->con) {
            die('Could not connect to database!');
        }
    }

    public function __destruct() {
        mysqli_close($this->con);
    }

}

?>
