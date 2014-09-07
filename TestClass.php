<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TestClass
 *
 * @author Администратор
 */
class TestClass {

    private $settings = array();
    private $filename = "connect.ini";

    public function __construct() {
        $this->settings = parse_ini_file($this->filename);
       // echo "<br>";
        foreach ($this->settings as $key => $value) {
            echo "$key = $value <br><br>";
        }
    }

}
