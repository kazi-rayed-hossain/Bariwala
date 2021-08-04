<?php

require_once 'database.php';

class UserControl extends Database {

    public $database;

    public function __construct() {

        $this->database = new Database();
    }

    public function create($info) {
        $keys = array_keys($info);
        $column = "";
        $values = "";
        $endKey = end($keys);
        foreach ($keys as $key) {
            $comma = ($key != $endKey) ? ", " : " ";
            $column = $column . $key . $comma;
            $values = $values . " '" . $info[$key] . "' " . $comma;
        }
        $table = "users";
        $this->database->insert($table, $column, $values);
    }

    public function edit($info, $id) {
        $keys = array_keys($info);
        $set = "";
        $endKey = end($keys);
        foreach ($keys as $key) {
            $comma = ($key != $endKey) ? ", " : " ";
            $set = $set . $key . " = " . " '" . $info[$key] . "' " . $comma;
        }
        $table = "users";
        $where = "WHERE id = $id";
        $this->database->update($table, $set, $where);
    }

    public function deleteUser($id) {
        $table = "users";
        $where = "WHERE id='$id'";
        $this->database->delete($table, $where);
    }

}
?>