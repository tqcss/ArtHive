<?php
require_once '../config.php';
$database = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

function checkConnection() { return !empty($database); } // returns true if successfully connected to db, false otherwise
function closeConnection() { $database->close(); }

class Request {
    private $result;

    public function __construct($tableName, $column, $match) {
        $this->result = $database->query("SELECT * FROM {$tableName} WHERE {$column} = {$match}");
    }

    public function fetch() {
        return mysqli_fetch_assoc($this->result);
    }
}

?>
