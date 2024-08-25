<?php

include 'functions.php';
include 'LinkedList.php';
include 'DoublyLinkedList.php';
include 'Queue.php';
include 'Deque.php';
include 'Stack.php';

# Пример использования односвязного списка
// $linkedList = new LinkedList();
// $linkedList->append(1);
// $linkedList->append(2);
// $linkedList->append(3);
// $linkedList->display(); // 1 -> 2 -> 3 -> null
// echo "Поиск 2: " . ($linkedList->search(2) ? "найден" : "не найден") . "\n"; // найден
// echo "Поиск 4: " . ($linkedList->search(4) ? "найден" : "не найден") . "\n"; // не найден
// $linkedList->delete(2);
// $linkedList->display(); // 1 -> 3 -> null

# Пример использования двусвязного списка
// $doublyLinkedList = new DoublyLinkedList();
// $doublyLinkedList->append(1);
// $doublyLinkedList->append(2);
// $doublyLinkedList->append(3);
// echo "Вывод вперед: ";
// $doublyLinkedList->displayForward(); 
// echo "Вывод назад: ";
// $doublyLinkedList->displayBackward();
// echo "Поиск 2: " . ($doublyLinkedList->search(2) ? "найден" : "не найден") . "\n";
// echo "Поиск 4: " . ($doublyLinkedList->search(4) ? "найден" : "не найден") . "\n";
// echo "После удаления 2: ";
// $doublyLinkedList->displayForward();

# Пример использования очереди
// $queue = new Queue();
// $queue->enqueue('Первый');
// $queue->enqueue('Второй');
// $queue->enqueue('Третий');
// echo "Количество элементов в очереди: " . $queue->size() . "\n"; // Вывод: 3
// echo "Первый элемент очереди: " . $queue->peek() . "\n"; // Вывод: Первый
// echo "Удалённый элемент: " . $queue->dequeue() . "\n"; // Вывод: Первый
// echo "Удалённый элемент: " . $queue->dequeue() . "\n"; // Вывод: Второй
// echo "Оставшиеся элементы в очереди: " . implode(', ', $queue->getItems()) . "\n"; // Вывод: Третий
// echo "Количество элементов в очереди после удаления: " . $queue->size() . "\n"; // Вывод: 1
// $queue->dequeue();
// echo "Количество элементов в очереди после удаления последнего: " . $queue->size() . "\n"; // Вывод: 0

# Пример использования дека
// $deque = new Deque();
// $deque->addRear('Элемент 1');
// $deque->addFront('Элемент 2');
// $deque->addRear('Элемент 3');
// echo "Количество элементов в деке: " . $deque->size() . "\n"; 
// echo "Удалённый элемент с начала: " . $deque->removeFront() . "\n"; 
// echo "Удалённый элемент с конца: " . $deque->removeRear() . "\n"; 
// echo "Оставшиеся элементы в деке: " . implode(', ', $deque->getItems()) . "\n"; 
// echo "Количество элементов в деке после удаления: " . $deque->size() . "\n";
// $deque->removeFront();
// echo "Количество элементов в деке после удаления последнего: " . $deque->size() . "\n"; 

# Пример использования стека
// $stack = new Stack();
// $stack->push('Элемент 1');
// $stack->push('Элемент 2');
// $stack->push('Элемент 3');
// echo "Количество элементов в стеке: " . $stack->size() . "\n"; 
// echo "Элемент на вершине стека: " . $stack->peek() . "\n";
// echo "Удалённый элемент с вершины: " . $stack->pop() . "\n"; 
// echo "Оставшиеся элементы в стеке: " . implode(', ', $stack->getItems()) . "\n"; 
// echo "Количество элементов в стеке после удаления: " . $stack->size() . "\n"; 
// $stack->pop();
// $stack->pop();
// echo "Количество элементов в стеке после удаления всех: " . $stack->size() . "\n"; 
