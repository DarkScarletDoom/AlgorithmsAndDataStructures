<?php

class Node {
    public $data;
    public $next;

    public function __construct($data) {
        $this->data = $data;
        $this->next = null;
    }
}

class LinkedList {
    private $head;

    public function __construct() {
        $this->head = null;
    }

    // Добавление элемента в конец списка
    public function append($data) {
        $newNode = new Node($data);

        // Если список пустой, создаем новый узел
        if ($this->head === null) {
            $this->head = $newNode;
            return;
        }

        // Пока не дошли до конца списка
        $current = $this->head;
        while ($current->next !== null) {
            $current = $current->next;
        }

        // Помещаем в конец
        $current->next = $newNode;
    }

    // Вывод элементов списка
    public function display() {
        $current = $this->head;
        while ($current !== null) {
            echo $current->data . " -> ";
            $current = $current->next;
        }
        echo "null\n";
    }

    // Поиск элемента
    public function search($data) {
        $current = $this->head;
        // Пока не дошли до конца проверяем каждый элемент
        while ($current !== null) {
            if ($current->data === $data) {
                return true;
            }
            $current = $current->next;
        }
        return false;
    }

    // Удаление элемента
    public function delete($data) {
        // Если список пустой, то фолс
        if ($this->head === null) {
            return false;
        }

        // Если элемент находится в голове списка
        if ($this->head->data === $data) {
            $this->head = $this->head->next;
            return true;
        }

        $current = $this->head;
        // Сотрим весь список
        while ($current->next !== null) {
            if ($current->next->data === $data) {
                // Прокидываем ссылку через элемент, который будет удален
                $current->next = $current->next->next;
                return true;
            }
            $current = $current->next;
        }

        return false; // Элемент не найден
    }
}
