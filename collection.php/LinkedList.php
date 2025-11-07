<?php
require_once __DIR__ . '/../interfaces/ListInterface.php';

class LinkedList implements ListInterface {
    private $nodes = [];

    public function add($item) {
        $this->nodes[] = $item;
    }

    public function remove($item) {
        $index = array_search($item, $this->nodes);
        if ($index !== false) unset($this->nodes[$index]);
    }

    public function size(): int {
        return count($this->nodes);
    }

    public function isEmpty(): bool {
        return empty($this->nodes);
    }

    public function get($index) {
        return $this->nodes[$index] ?? null;
    }

    public function set($index, $value) {
        if (isset($this->nodes[$index])) $this->nodes[$index] = $value;
    }

    public function show() {
        print_r($this->nodes);
    }
}
