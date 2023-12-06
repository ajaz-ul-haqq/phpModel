<?php

use phpModel\Model;
function model($table): Model
{
    return new Model($table);
}