<?php
require_once __DIR__ . '/../interfaces/MapInterface.php';

class HashMap implements MapInterface {
    private $map = [];

    public function put($key, $value) {
        $this->map[$key] = $value;
    }

    public function get($key) {
        return $this->map[$key] ?? null;
    }

    public function remove($key) {
        unset($this->map[$key]);
    }

    public function containsKey($key): bool {
        return isset($this->map[$key]);
    }

    public function show() {
        print_r($this->map);
    }
}
