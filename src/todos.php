<?php
// use array to hold todo items
$todo_items = [
    'Task 1',
    'Task 2',
    'Task 3'
];

// output todo list from array
echo 'Todos:' . PHP_EOL;

$length = count($todo_items);
for ($i = 0; $i < $length; ++$i) {
    echo '  - ' . $todo_items[$i];

    if ($i === 1) {
        echo ' (completed)';
    }

    echo PHP_EOL;
}
