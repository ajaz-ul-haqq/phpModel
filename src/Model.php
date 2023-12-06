<?php

namespace phpModel;

class Model extends BaseModel
{
    public function setConnection(\mysqli $conn): void
    {
        parent::setConnection($conn);
    }
    public function getConnection(): \mysqli
    {
        return parent::getConnection();
    }
}