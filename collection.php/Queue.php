<?php
require_once __DIR__ . '/../interfaces/QueueInterface.php';

class Queue implements QueueInterface {
    private $queue = [];

    public function enqueue($item) {
        array_push($this->queue, $item);
    }

    public function dequeue() {
        return array_shift($this->queue);
    }

    public function add($item) {
        $this->enqueue($item);
    }

    public function remove($item) {
        $index = array_search($item, $this->queue);
        if ($index !== false) unset($this->queue[$index]);
    }

    public function size(): int {
        return count($this->queue);
    }

    public function isEmpty(): bool {
        return empty($this->queue);
    }

    public function show() {
        print_r($this->queue);
    }
}
