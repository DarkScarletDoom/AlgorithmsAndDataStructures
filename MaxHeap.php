<?php

    class MaxHeap {
        // Массив,в котором хранится куча
        private $heap = [];

        // Метод, упорядочивающий кучу
        private function heapifyUp($index) {
            // "всплывание" элемента, если куча не удовлетворяет своему условию
            while ($index > 0) {
                $parentIndex = (int)(($index - 1) / 2);
                if ($this->heap[$index] > $this->heap[$parentIndex]) {
                    list($this->heap[$index], $this->heap[$parentIndex]) = array($this->heap[$parentIndex], $this->heap[$index]);
                    $index = $parentIndex;
                } else {
                    break;
                }
            }
        }

        // Метод, упорядочивающий кучу
        private function heapifyDown($index) {
            $size = count($this->heap);
            // "опускание" элемента, если куча не удовлетворяет своему условию
            while ($index < $size) {
                $leftChild = 2 * $index + 1;
                $rightChild = 2 * $index + 2;
                $largest = $index;

                if ($leftChild < $size && $this->heap[$leftChild] > $this->heap[$largest]) {
                    $largest = $leftChild;
                }
                if ($rightChild < $size && $this->heap[$rightChild] > $this->heap[$largest]) {
                    $largest = $rightChild;
                }

                if ($largest != $index) {
                    list($this->heap[$index], $this->heap[$largest]) = array($this->heap[$largest], $this->heap[$index]);
                    $index = $largest;
                } else {
                    break;
                }
            }
        }

        public function insert($value) {
            // Элемент добавляется в конец
            $this->heap[] = $value;
            // От этого элемента вызывается метод упорядочивания
            $this->heapifyUp(count($this->heap) - 1);
        }

        public function extractMax() {
            if (empty($this->heap)) {
                throw new OutOfRangeException("Heap is empty");
            }
            // Берем максимальный (тот, что в корне)
            $maxValue = $this->heap[0];
            // Новым корнем становится последний элемент кучи
            $this->heap[0] = array_pop($this->heap);
            // Если после этого куча не пустая, упорядочиваем по корню
            if (!empty($this->heap)) {
                $this->heapifyDown(0);
            }
            return $maxValue;
        }

        public function getMax() {
            if (empty($this->heap)) {
                throw new OutOfRangeException("Heap is empty");
            }
            return $this->heap[0];
        }

        public function isEmpty() {
            return empty($this->heap);
        }

        public function printHeap() {
            foreach ($this->heap as $value) {
                echo $value . " ";
            }
            echo PHP_EOL;
        }
    }
