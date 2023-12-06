<?php

namespace phpModel;

use phpModel\Interfaces\Builder;
use mysqli as mySqlObject;

abstract class BaseModel implements Builder {
    protected string $table;
    protected mySqlObject $conn;

    public function __construct($table)
    {
        $this->conn = new mySqlObject('localhost', 'root', 9090, 'next');
        $this->table = $table;
    }

    public function getTable(): string
    {
        return $this->table;
    }

    public function get()
    {
        // TODO: Implement get() method.
    }

    public function value()
    {
        // TODO: Implement get() method.
    }

    protected function setConnection(mySqlObject $conn): void
    {
        $this->conn = $conn;
    }

    protected function getConnection(): mySqlObject
    {
        return $this->conn;
    }

}
