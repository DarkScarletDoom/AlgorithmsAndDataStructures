<?php

class DoubleLinkedNode {
    public $data;
    public $next;
    public $prev;

    public function __construct($data) {
        $this->data = $data;
        $this->next = null;
        $this->prev = null;
    }
}

class DoublyLinkedList {
    private $head;
    private $tail;

    public function __construct() {
        $this->head = null;
        $this->tail = null;
    }

    // Добавление элемента в конец списка
    public function append($data) {
        $newNode = new DoubleLinkedNode($data);

        if ($this->head === null) {
            $this->head = $newNode;
            $this->tail = $newNode;
            return;
        }

        // Связываем новый узел с последним узлом
        $this->tail->next = $newNode;
        $newNode->prev = $this->tail;
        $this->tail = $newNode; // обновляем хвост
    }

    // Вывод элементов списка
    public function displayForward() {
        $current = $this->head;
        while ($current !== null) {
            echo $current->data . " <-> ";
            $current = $current->next;
        }
        echo "null\n";
    }

    public function displayBackward() {
        $current = $this->tail;
        while ($current !== null) {
            echo $current->data . " <-> ";
            $current = $current->prev;
        }
        echo "null\n";
    }

    // Поиск элемента
    public function search($data) {
        $current = $this->head;
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
        if ($this->head === null) {
            return false;
        }

        // Если элемент находится в голове списка
        if ($this->head->data === $data) {
            $this->head = $this->head->next;
            if ($this->head !== null) {
                $this->head->prev = null;
            } else {
                $this->tail = null; // Список пуст
            }
            return true;
        }

        // Проходим по списку, чтобы найти элемент
        $current = $this->head;
        while ($current !== null) {
            if ($current->data === $data) {
                if ($current->next !== null) {
                    $current->next->prev = $current->prev;
                }
                if ($current->prev !== null) {
                    $current->prev->next = $current->next;
                }
                return true;
            }
            $current = $current->next;
        }

        return false; // Элемент не найден
    }
}
