<?php
use Todo\TodoRepository;

require_once __DIR__ . '/../vendor/autoload.php';

// create the todo repository
$todoRepository = new TodoRepository();

// get the current todo list
$todoList = $todoRepository->getTodoList();

// output todo list
$todoList->printList();
