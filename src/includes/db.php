<?php
require_once '../src/config.php';
try {
    $database = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
} catch (mysqli_sql_exception) {
    die('Could not connect to database');
}


// class Request {
//     private $result;

//     public function __construct($tableName, $column, $match) {
//         $this->result = $database->query("SELECT * FROM {$tableName} WHERE {$column} = {$match}");
//     }

//     public function fetch() {
//         return mysqli_fetch_assoc($this->result);
//     }
// }

?>
