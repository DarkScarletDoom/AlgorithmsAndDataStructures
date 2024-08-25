<?php

class Deque {
    private $items = [];

    // Добавить элемент в начало дека
    public function addFront($item) {
        array_unshift($this->items, $item);
    }

    // Добавить элемент в конец дека
    public function addRear($item) {
        $this->items[] = $item;
    }

    // Удалить и вернуть элемент с начала дека
    public function removeFront() {
        if ($this->isEmpty()) {
            return null;
        }
        return array_shift($this->items);
    }

    // Удалить и вернуть элемент с конца дека
    public function removeRear() {
        if ($this->isEmpty()) {
            return null; // или выбросить исключение
        }
        return array_pop($this->items);
    }

    // Проверить, пустой ли дек
    public function isEmpty() {
        return empty($this->items);
    }

    // Получить количество элементов в деке
    public function size() {
        return count($this->items);
    }

    // Получить все элементы дека
    public function getItems() {
        return $this->items;
    }
}
