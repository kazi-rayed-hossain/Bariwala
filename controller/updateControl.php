<?php

require_once 'database.php';

class updateControl extends Database {

    public $database;

    public function __construct() {

        $this->database = new Database();
    }

    public function create($table,$info) {
        $keys = array_keys($info);
        $column = "";
        $values = "";
        $endKey = end($keys);
        foreach ($keys as $key) {
            $comma = ($key != $endKey) ? ", " : " ";
            $column = $column . $key . $comma;
            $values = $values . " '" . $info[$key] . "' " . $comma;
        }
       
        $this->database->insert($table, $column, $values);
    }

    public function edit($table,$info, $id) {
        $keys = array_keys($info);
        $set = "";
        $endKey = end($keys);
        foreach ($keys as $key) {
            $comma = ($key != $endKey) ? ", " : " ";
            $set = $set . $key . " = " . " '" . $info[$key] . "' " . $comma;
        }
       
        $where = "WHERE id = $id";
        echo $set;
        $this->database->update($table, $set, $where);
    }

    public function delete($table,$id) {
        
        $where = "WHERE id='$id'";
        $this->database->delete($table, $where);
    }

}
?>