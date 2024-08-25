<?php

class Queue {
    private $items = [];

    // Добавить элемент в конец очереди
    public function enqueue($item) {
        $this->items[] = $item;
    }

    // Удалить и вернуть первый элемент очереди
    public function dequeue() {
        if ($this->isEmpty()) {
            return null;
        }
        return array_shift($this->items);
    }

    // Получить первый элемент без его удаления
    public function peek() {
        if ($this->isEmpty()) {
            return null; // или можно бросить исключение
        }
        return $this->items[0];
    }

    // Проверить, пуста ли очередь
    public function isEmpty() {
        return empty($this->items);
    }

    // Получить количество элементов в очереди
    public function size() {
        return count($this->items);
    }

    // Получить все элементы очереди
    public function getItems() {
        return $this->items;
    }
}
