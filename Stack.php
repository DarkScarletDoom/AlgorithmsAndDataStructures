<?php

class Stack {
    private $items = [];

    // Добавить элемент на вершину стека
    public function push($item) {
        $this->items[] = $item;
    }

    // Удалить и вернуть элемент с вершины стека
    public function pop() {
        if ($this->isEmpty()) {
            return null; // или выбросить исключение
        }
        return array_pop($this->items);
    }

    // Получить элемент с вершины стека без удаления
    public function peek() {
        if ($this->isEmpty()) {
            return null; // или выбросить исключение
        }
        return end($this->items);
    }

    // Проверить, пуст ли стек
    public function isEmpty() {
        return empty($this->items);
    }

    // Получить количество элементов в стеке
    public function size() {
        return count($this->items);
    }

    // Получить все элементы стека
    public function getItems() {
        return $this->items;
    }
}
