<?php

function BreadthFirstSearch(array $graph, int $start) {
    // Массив посещенных узлов
    $visited = array_fill(0, count($graph), false);
    // Очередь, в которой хранятся необработанные вершины
    $queue = new SplQueue();
    
    $visited[$start] = true;
    $queue->enqueue($start);

    while (!$queue->isEmpty()) {
        // Достаем необработанную вершину из начала очереди, выводим ее и удаляем
        $vertex = $queue->dequeue();
        echo $vertex . " ";

        // Перебираем соседей этой вершины
        for ($i = 0; $i < count($graph); $i++) {
            // Если вершина имеет соседа, в котором мы еще не были
            if ($graph[$vertex][$i] == 1 && !$visited[$i]) {
                // Посещаем эту вершину и кидаем в очередь
                $visited[$i] = true;
                $queue->enqueue($i);
            }
        }
    }
}

