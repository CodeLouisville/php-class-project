<?php
require 'TodoList.php';

// create a MySQLi object
$mysqli = new mysqli('localhost', 'dbuser', 'dbpass', 'todos_dev');

// exit if we failed to connect to the database
if ($mysqli->connect_errno) {
    printf("Database connection failed: %s\n", $mysqli->connect_error);
    exit();
}

$query = 'SELECT * FROM todo_items';
$result = $mysqli->query($query);

if (!$result) {
    die('Database query failed: ' . $query);
}

// create todo list object
$todoList = new TodoList();

// add todo items from database
while ($row = $result->fetch_assoc()) {
    $todoList->add($row['title']);
}

// output todo list
$todoList->printList();
