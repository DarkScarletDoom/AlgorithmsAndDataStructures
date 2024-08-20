<?php

include 'functions.php';
include 'LinearProbing.php';
include 'ChainMethodArray.php';

// Linear Probing
// $hashTable = new HashTable(5);
// $hashTable->insert(1, 'Value1');
// $hashTable->insert(2, 'Value2');
// $hashTable->insert(11, 'Value3'); // Пробирование из-за коллизии
// $hashTable->insert(3, 'Value1');
// $hashTable->insert(4, 'Value2');
// $hashTable->insert(5, 'Value1');
// $hashTable->insert(6, 'Value2');
// $hashTable->insert(7, 'Value1');
// $hashTable->insert(8, 'Value2');

// echo "Поиск ключа 1: " . $hashTable->search(1) . "\n";
// echo "Поиск ключа 2: " . $hashTable->search(2) . "\n";
// echo "Поиск ключа 11: " . $hashTable->search(11) . "\n";
// $hashTable->display();
// $hashTable->delete(2);
// $hashTable->display();

// Chain method is array
$hashTable = new HashTableCM(5);
$hashTable->insert(1, 'Value1');
$hashTable->insert(2, 'Value2');
$hashTable->insert(11, 'Value3'); // Пробирование из-за коллизии

echo "Поиск ключа 1: " . $hashTable->search(1) . "\n";
echo "Поиск ключа 2: " . $hashTable->search(2) . "\n";
echo "Поиск ключа 11: " . $hashTable->search(11) . "\n";

$hashTable->display();
$hashTable->delete(2);
$hashTable->display();
