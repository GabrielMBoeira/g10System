<?php

class User {

    private $name = '';
    private $password = '';
    private $company = '';

    public function __construct() {
        
    }

    public function getUserName() {
        return $this->name;
    }

    public function setUserName($name) {
        $this->name = $name;
    }

    public function getUserPassword() {
        return $this->password;
    }

    public function setUserPassword($password) {
        return $this->password = $password;
    }

    public function getUserCompany() {
        return $this->company;
    }

    public function setUserCompany($company) {
        return $this->company = $company;
    }

}