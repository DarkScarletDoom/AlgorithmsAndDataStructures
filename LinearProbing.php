<?php

class HashTable {
    private $size;
    private $table;

    public function __construct($size) {
        $this->size = $size;
        $this->table = array_fill(0, $size, null);
    }

    private function hash($key) {
        return $key % $this->size;
    }

    public function insert($key, $value) {
        $index = $this->hash($key);

        while ($this->table[$index] !== null) {
            // Если ключ уже существует, обновляем значение
            if ($this->table[$index]['key'] === $key) {
                $this->table[$index]['value'] = $value;
                return;
            }
            // Линейное пробирование
            $index = ($index + 1) % $this->size;
        }

        $this->table[$index] = ['key' => $key, 'value' => $value];
    }

    public function search($key) {
        $index = $this->hash($key);

        while ($this->table[$index] !== null) {
            if ($this->table[$index]['key'] === $key) {
                return $this->table[$index]['value'];
            }
            $index = ($index + 1) % $this->size;
        }

        return null; // Ключ не найден
    }

    public function delete($key) {
        $index = $this->hash($key);

        while ($this->table[$index] !== null) {
            if ($this->table[$index]['key'] === $key) {
                $this->table[$index] = null; // Удаляем элемент
                return true;
            }
            $index = ($index + 1) % $this->size;
        }

        return false; // Ключ не найден
    }

    public function display() {
        foreach ($this->table as $index => $item) {
            if ($item !== null) {
                echo "Index $index: Key = {$item['key']}, Value = {$item['value']}\n";
            }
        }
    }
}
