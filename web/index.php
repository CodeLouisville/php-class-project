<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>PHP Project: Todo List</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/todos.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
    <div class="row">
        <div class="todolist">
            <h1>Todos</h1>
            <hr>
            <ul id="sortable" class="list-unstyled">
<?php
require_once '../src/TodoRepository.php';
$todoRepository = new TodoRepository();

$incomplete_todo_list = $todoRepository->getIncompleteTodoList();
foreach ($incomplete_todo_list->items as $todo_item) {
?>
                    <li class="ui-state-default">
                        <div class="checkbox">
                            <label><input type="checkbox" value=""><?php echo htmlentities($todo_item->getTitle()); ?></label>
                        </div>
                    </li>
<?php
}
?>
            </ul>

            <hr>

            <ul id="done-items" class="list-unstyled">
<?php
$completed_todo_list = $todoRepository->getCompletedTodoList();
foreach ($completed_todo_list->items as $todo_item) {
?>
                <li><input type="checkbox" value="" checked disabled><?php echo htmlentities($todo_item->getTitle()); ?></li>
<?php
}
?>

            </ul>
        </div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>

