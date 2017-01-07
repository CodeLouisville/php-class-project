<?php
require 'TodoRepository.php';

// create the todo repository
$todoRepository = new TodoRepository();

// get the current todo list
$todoList = $todoRepository->getTodoList();

// output todo list
$todoList->printList();
