<?php

include 'BreadthFirstSearch.php';
include 'MaxHeap.php';
include 'DijkstraAlgorithm.php';


# BreadthFirstSearch Testing
// $graph = [
//     [0, 1, 0, 1, 0],
//     [1, 0, 1, 0, 1],
//     [0, 1, 0, 1, 0],
//     [1, 0, 1, 0, 1],
//     [0, 1, 0, 1, 0]
// ];
// DepthFirstSearch($graph, 0);


# MaxHeap Testing
// $maxHeap = new MaxHeap();
// $maxHeap->insert(10);
// $maxHeap->insert(20);
// $maxHeap->insert(5);
// $maxHeap->insert(30);
// $maxHeap->insert(15);
// echo "Heap elements: ";
// $maxHeap->printHeap();
// echo "Max element: " . $maxHeap->extractMax() . PHP_EOL;
// echo "Heap after extracting max: ";
// $maxHeap->printHeap();


# Dijkstra Testing
// $graph = new Graph();
// $graph->addEdge('A', 'B', 1);
// $graph->addEdge('A', 'C', 4);
// $graph->addEdge('B', 'C', 2);
// $graph->addEdge('B', 'D', 5);
// $graph->addEdge('C', 'D', 1);

// $result = $graph->dijkstra('A');

// echo "Расстояния от A:\n";
// foreach ($result['distances'] as $vertex => $distance) {
//     echo "$vertex: $distance\n";
// }
