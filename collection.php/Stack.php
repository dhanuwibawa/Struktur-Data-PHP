<?php
require_once __DIR__ . '/../interfaces/CollectionInterface.php';

class Stack implements CollectionInterface {
    private $stack = [];

    public function add($item) {
        array_push($this->stack, $item);
    }

    public function remove($item) {
        $index = array_search($item, $this->stack);
        if ($index !== false) unset($this->stack[$index]);
    }

    public function size(): int {
        return count($this->stack);
    }

    public function isEmpty(): bool {
        return empty($this->stack);
    }

    public function push($item) {
        $this->add($item);
    }

    public function pop() {
        return array_pop($this->stack);
    }

    public function show() {
        print_r($this->stack);
    }
}
