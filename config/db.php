<?php


class DataConnector{
    private $host = 'localhost';
    private $password = '';
    private $username = 'root';
    private $database = 'tugas_uas_semester_3';

    public function connect(){
        $connector = new mysqli($this->host,$this->username,$this->password,$this->database);

        if($connector->connect_error){
            die("Error". $connector->connect_error);
        }

        return $connector;
    }
}
