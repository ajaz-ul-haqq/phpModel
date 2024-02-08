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




