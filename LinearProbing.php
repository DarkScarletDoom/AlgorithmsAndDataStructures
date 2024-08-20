<?php

class HashTableLP {
    // Размер
    private $size;
    // Таблица, реализованная на массиве
    private $table;

    // Инициализация массива и размера таблицы
    public function __construct($size) {
        $this->size = $size;
        $this->table = array_fill(0, $size, null);
    }

    // Хэш-функция
    private function hash($key) : int {
        // От ключа берется остаток от деления на размер таблицы
        return $key % $this->size;
    }

    // Добавление элемента
    public function insert($key, $value) : void {
        $index = $this->hash($key);

        // Смотрим всю таблицу
        while ($index !== $this->size - 1) {
            // Если есть свободное место записываем элемент
            if (!isset($this->table[$index]['key'])) {
                $this->table[$index] = ['key' => $key, 'value' => $value];
                return;
            }
            // Если ключ уже существует, обновляем значение
            elseif ($this->table[$index]['key'] === $key) {
                $this->table[$index]['value'] = $value;
                return;
            }
            // Линейное пробирование
            $index = $this->hash($index + 1);
        }

        // Если места нет, увеличили массив
        $this->size *= 2;
        $this->table = array_merge($this->table, array_fill($index, $this->size, null));
        // еще раз пробуем добавить
        $this->insert($key, $value);
    }

    // Поиск
    public function search($key) : mixed {
        $index = $this->hash($key);

        // Пока не дошли до нуля
        while ($index !== $this->size - 1) {
            // Если нашли ключ, то возвращаем значение по ключу
            if (isset($this->table[$index]['key']) && $this->table[$index]['key'] === $key) {
                return $this->table[$index]['value'];
            }
            // Линейное пробирование
            $index = $this->hash($index + 1);
        }

        return null; // Ключ не найден
    }

    public function delete($key) : mixed{
        $index = $this->hash($key);

        // Перебираем всю таблицу
        while ($index !== $this->size - 1) {
            // Если нашли
            if (isset($this->table[$index]['key']) &&  $this->table[$index]['key'] === $key) {
                $this->table[$index] = null; // Удаляем элемент
                return true;
            }
            // Линейное пробирование
            $index = $this->hash($index + 1);
        }

        return null; // Ключ не найден
    }

    public function display() : void {
        foreach ($this->table as $index => $item) {
            // echo "Index $index: Key = {$item['key']}, Value = {$item['value']}\n";
            if ($item !== null) {
                echo "Index $index: Key = {$item['key']}, Value = {$item['value']}\n";
            }
        }
    }
}
