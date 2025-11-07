<?php
require_once 'classes/ArrayList.php';
require_once 'classes/LinkedList.php';
require_once 'classes/Stack.php';
require_once 'classes/Queue.php';
require_once 'classes/HashMap.php';

echo "=== Demo Struktur Data PHP ===\n\n";

// ArrayList
$list = new ArrayList();
$list->add("A");
$list->add("B");
$list->add("C");
echo "ArrayList:\n";
$list->show();
echo "Size: " . $list->size() . "\n\n";

// Stack
$stack = new Stack();
$stack->push("X");
$stack->push("Y");
$stack->push("Z");
echo "Stack:\n";
$stack->show();
echo "Pop: " . $stack->pop() . "\n\n";

// Queue
$queue = new Queue();
$queue->enqueue("1");
$queue->enqueue("2");
$queue->enqueue("3");
echo "Queue:\n";
$queue->show();
echo "Dequeue: " . $queue->dequeue() . "\n\n";

// HashMap
$map = new HashMap();
$map->put("id", 101);
$map->put("name", "Rama");
echo "HashMap:\n";
$map->show();
echo "Contains key 'id'? " . ($map->containsKey("id") ? "Yes" : "No") . "\n";
