<?php
require_once 'CollectionInterface.php';

interface QueueInterface extends CollectionInterface {
    public function enqueue($item);
    public function dequeue();
}
