<?php
namespace Todo;

class TodoList
{
    public $items = [];

    public function add($item)
    {
        $this->items[] = new TodoItem($item);
    }

    public function printList()
    {
        echo 'Todos:' . PHP_EOL;

        $length = count($this->items);
        for ($i = 0; $i < $length; ++$i) {
            echo $this->formatTodoItem($this->items[$i]) . PHP_EOL;
        }
    }

    private function formatTodoItem(TodoItem $todoItem)
    {
        return '  - ' . $todoItem->getTitle();
    }
}