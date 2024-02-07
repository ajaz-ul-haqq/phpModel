# PHP Models

This repo provides a reference guide for the methods implemented in PHP models inspired by Laravel models. 
These models aim to emulate the functionality of Laravel models while being implemented in vanilla PHP.

## Introduction

These models are designed to represent database tables and interact with data stored in those tables, similar to Laravel models.

## Configuration and Usage
- in `config.php` update database credentials
- use `require_once 'bootstrap.php'` in your file and all Set.

## Basic CRUD Operations

### Read
- `all()`: Retrieve all records from the database.
- `first()`: Retrieve the first record matching the query conditions.
- `get()`: Retrieve all records matching the query conditions.
- `find($id)`: Find a record by id in mentioned table.
- `where($column, $value)`: Query records based on a specific column and value.
- `whereIn($columns, $valuesAsArray)`: Query records based on a specific column and value.
- `toSql()` : SQL query based on conditions
- `select(array|string $columns)` : Select some columns
- `value($column)` : Get value of a particular column for the first
- `count($column)` : Count the values of a column
- `pluckToArray($column)` : Get the values of a column as an array
- `limit($count)` : Set a limit
- `offset($count)` : Set an offset
- `take($count)` : Retrieve specified items

  

### Create
- `insert(array $attributes)`: Create a new record in the database with the given attributes.
  
### Update
- `update(array $attributes)`: Update the model's attributes.

### Delete
- Delete the model's attributes.

  
### Aggregates
- `sum($column)`: Get the sum of a particular column.

## Relationships
- To be implemented


## Examples
        
        <?php
        
        require_once 'bootstrap.php';
        
        $users = model('user');
        
        $allUsers = $users->all();
        
        $activeUsers =  $users->where('active', 1)->get();
        
        $activeAdmins = $users->where('active', 1)->where('role', 'admin')->get();
        
        $adminsOrAgents = $users->where('role', 'admin')->where('role', 'agent')->get();
        
        $adminsOrAgents = $users->whereIn('role', ['admin', 'agent'])->get();
        
        $tenAdminsOnly = $users->whereIn('role', ['admin'])->take(10);
        
        $nextTenAdmins = $users->whereIn('role', ['admin'])->offset(10)->limit(10)->get();
        
        $rawSql = $users->whereIn('role', ['admin', 'agent'])->toSql();

$userByIdOne = $users->find(1);

$userByIdOneRole = $users->where('id', 1)->value('role'); // $users->find(1)['role'];
`


