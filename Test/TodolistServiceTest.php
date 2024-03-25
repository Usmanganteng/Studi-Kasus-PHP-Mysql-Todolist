<?php

require_once __DIR__. "/../Entity/Todolist.php";
require_once __DIR__. "/../Repository/TodolistRepository.php";
require_once __DIR__. "/../service/TodolistService.php";
require_once __DIR__. "/../config/Database.php";

use Entity\Todolist;
use Service\TodolistServiceImpl;
use Repository\TodolistRepositoryImpl;

function testShowTodolist(): void
{
    $connection = \config\Database::getConnection();
    $todolistRepository = new TodolistRepositoryImpl($connection);
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addTodolist("belajar php");
    $todolistService->addTodolist("belajar php oop");
    $todolistService->addTodolist("belajar php database");

    $todolistService->showTodolist();
}

function testAddTodolist(): void
{
    $connection = \config\Database::getConnection();
    $todolistRepository = new TodolistRepositoryImpl($connection);
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addTodolist("belajar php");
    $todolistService->addTodolist("belajar php oop");
    $todolistService->addTodolist("belajar php database");
    
    // $todolistService->showTodolist();
}

function testRemoveTodolist(): void
{
    $connection = \config\Database::getConnection();
    $todolistRepository = new TodolistRepositoryImpl($connection);
    $todolistService = new TodolistServiceImpl($todolistRepository);

    echo $todolistService->removeTodolist(5) . PHP_EOL;
    echo $todolistService->removeTodolist(4) . PHP_EOL;
    echo $todolistService->removeTodolist(3) . PHP_EOL;
    echo $todolistService->removeTodolist(2) . PHP_EOL;
    echo $todolistService->removeTodolist(1) . PHP_EOL;
}

testShowTodolist();
