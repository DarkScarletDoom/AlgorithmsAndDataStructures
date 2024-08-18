<?php

class Graph {
    // Список смежности
    private $adjacencyList = [];

    // Добавляем ребро
    public function addEdge($source, $destination, $weight) {
        $this->adjacencyList[$source][$destination] = $weight;
        $this->adjacencyList[$destination][$source] = $weight;
    }

    // Алгоритм
    public function dijkstra($start) { 
        $distances = []; // Расстояние до стартовой вершины
        $previous = []; // Массив, хранящий предыдущие вершины (откуда мы пришли в текущую)
        $visited = []; // Посещенные вершины
        $queue = []; // Очередь

        // Инициализация
        foreach ($this->adjacencyList as $vertex => $edges) {
            $distances[$vertex] = PHP_INT_MAX; // Изначально расстояние до всех вершин бесконечно
            $previous[$vertex] = null; // Для хранения предыдущей вершины
            $queue[$vertex] = $distances[$vertex];
        }

        $distances[$start] = 0; // Расстояние до стартовой вершины = 0

        while (!empty($queue)) {
            // Находим вершину с минимальным расстоянием
            $minVertex = array_search(min($queue), $queue);

            // Удаляем вершину из очереди
            unset($queue[$minVertex]);

            // Перебираем соседей текущей вершины с минимальным расстоянием
            foreach ($this->adjacencyList[$minVertex] as $neighbor => $weight) {
                // Рассчитываем новое расстояние до соседней вершины
                $alt = $distances[$minVertex] + $weight;
                // Обновляем, если оно меньше установленной
                if ($alt < $distances[$neighbor]) {
                    $distances[$neighbor] = $alt;
                    $previous[$neighbor] = $minVertex; // Устанавливаем предшествующую вершину для текущей, как ту, из которой быстрее прийти
                }
            }
        }

        return [
            'distances' => $distances,
            'previous' => $previous
        ];
    }
}
