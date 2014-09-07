<?php

/**
 * Description of Model
 *
 * @author adikij
 */
class Model {

    private $settings = array();
    private $filename = "connect.ini";
    private $result;
    private $query_select = "SELECT * FROM people";
    private $query_select_by_id = "SELECT * FROM people WHERE id=";
    private $query_insert = "INSERT INTO people(first_name, last_name, email) value('";
    private $query_update = "UPDATE people SET first_name = '";
    private $query_delete = "DELETE FROM people WHERE id=";

    public function __construct() {
        $this->settings = parse_ini_file($this->filename);
        $this->resourse = mysql_connect($this->settings['host'], $this->settings['user'], $this->settings['pass']) or die("Could not connect to MySQL Database.");
        mysql_select_db($this->settings['db']) or die("Could not select database");
    }

    /*
     * Получить название столбцов
     */
    public function getFieldNames() {
        $this->result = mysql_query($this->query_select) or die("Query failed");
        $fields = mysql_list_fields($this->settings['db'], $this->settings['table']);
        $columns = mysql_num_fields($fields);
        $fields_name = array();
        for($i = 0; $i < $columns; $i++) {
            $fields_name[] = mysql_field_name($this->result, $i);
        }
        return $fields_name;
    }

    /*
     * Получить все записи с таблицы person 
     */
    public function getRows() {
        $record = array();
        while($row = mysql_fetch_array($this->result, MYSQL_ASSOC)) {
            $record[] =  $row;
        }
        return $record;
    }

    public function insertRecord($firstName, $lastName, $email) {
        $query = $this->query_insert . $firstName . "','" . $lastName . "','" . $email . "')";
        mysql_query($query);
    }

    public function updateRecord($firstName, $lastName, $email, $id) {
        $query = $this->query_update . $firstName . "', last_name = '" . $lastName . "', email = '" . $email . "' WHERE id=" . $id;
        mysql_query($query);
    }

    public function deleteRecord($id) {
        $query = $this->query_delete . $id;
        mysql_query($query);
    }

    public function getRecordById($id) {
        $record = array();
        $this->result = mysql_query($this->query_select_by_id . $id);
        while($row = mysql_fetch_array($this->result, MYSQL_ASSOC)) {
            $record = $row;
        }
        return $record;
    }

    public function __destruct() {
        mysql_free_result($this->result);
        mysql_close($this->resourse);
    }

}
