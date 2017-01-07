<?php
// use array to hold todo items
$todo_items = [
    'Task 1',
    'Task 2',
    'Task 3'
];

// call function to output todo list
print_todo_list($todo_items);


// function declarations
function print_todo_list(array $todo_list)
{
    echo 'Todos:' . PHP_EOL;

    $length = count($todo_list);
    for ($i = 0; $i < $length; ++$i) {
        // call function which returns a formatted todo item
        echo format_todo_item($todo_list[$i], $i === 1) . PHP_EOL;
    }
}

function format_todo_item($todo_item, $completed = false)
{
    $output = '  - ' . $todo_item;

    if ($completed) {
        $output .= ' (completed)';
    }

    return $output;
}
