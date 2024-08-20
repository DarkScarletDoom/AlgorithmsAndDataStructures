<?php

class HashTableCM {
    // Размер
    private $size;
    // Таблица, реализованная на массиве
    private $table;

    // Инициализация массива и размера таблицы
    public function __construct($size) {
        $this->size = $size;
        $this->table = array_fill(0, $size, array(null));
    }

    // Хэш-функция
    private function hash($key) : int {
        // От ключа берется остаток от деления на размер таблицы
        return $key % $this->size;
    }

    // Добавление элемента
    public function insert($key, $value) : void {
        $index = $this->hash($key);

        $null_index = array_search(null, $this->table[$index]);

        if ($null_index !== false) {
            array_splice($this->table[$index], $null_index);
        }

        array_push($this->table[$index], ['key' => $key, 'value' => $value]);
    }

    // Поиск
    public function search($key) {
        $index = $this->hash($key);

        foreach($this->table[$index] as $elem){
            if ($elem['key'] === $key) {
                return $elem['value'];
            }
        }
    }

    public function delete($key) {
        $index = $this->hash($key);

        // Перебираем элементы 
        foreach($this->table[$index] as $i => $elem){
            if ($elem['key'] === $key) {
                $value = $elem['value'];
                // Если в массиве один элемент, то мы оставляем null
                if (count($this->table[$index]) == 1) {
                    $this->table[$index][$i] = null;
                } 
                // Иначе полностью убираем элемент и делаем переиднексацию 
                else {
                    array_splice($this->table[$index], $i);
                }

                return $value;
            }
        }
    }

    public function display() : void {
        var_dump($this->table);
    }
}
