<?php
require_once __DIR__ . '/../interfaces/ListInterface.php';

class ArrayList implements ListInterface {
    private $items = [];

    public function add($item) {
        $this->items[] = $item;
    }

    public function remove($item) {
        $index = array_search($item, $this->items);
        if ($index !== false) unset($this->items[$index]);
    }

    public function size(): int {
        return count($this->items);
    }

    public function isEmpty(): bool {
        return empty($this->items);
    }

    public function get($index) {
        return $this->items[$index] ?? null;
    }

    public function set($index, $value) {
        if (isset($this->items[$index])) $this->items[$index] = $value;
    }

    public function show() {
        print_r($this->items);
    }
}
