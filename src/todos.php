<?php
require 'TodoList.php';

// create todo list object
$todoList = new TodoList();

// add todo items to todo list
$todoList->add('Task 1');
$todoList->add('Task 2');
$todoList->add('Task 3');

// output todo list
$todoList->printList();

