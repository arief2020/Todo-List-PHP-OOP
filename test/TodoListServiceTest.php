<?php
require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodoListRepository.php";
require_once __DIR__ . "/../Service/TodoListService.php";

use Entity\TodoList;
use Service\TodoListServiceImpl;
use Repository\TodoListRepositoryImpl;

function testShowTodoList(){

    $todolistRepository = new TodoListRepositoryImpl();
    $todolistRepository->todoList[1] = new TodoList("Belajar PHP DASAR");
    $todolistRepository->todoList[2] = new TodoList("Belajar OOP");
    $todolistRepository->todoList[3] = new TodoList("Belajar DataBase");

    $todolistService = new TodoListServiceImpl($todolistRepository);

    $todolistService->showTodoList();
}

function testAddTodoList():void {
    $todolistRepository = new TodoListRepositoryImpl();
    
    $todolistService = new TodoListServiceImpl($todolistRepository);
    $todolistService->addTodoList("Belajar PHP Dasar");
    $todolistService->addTodoList("Belajar PHP OOP");
    $todolistService->addTodoList("Belajar PHP DATABASE");
    
    $todolistService->showTodoList();
}
function testRemoveTodoList():void {
    $todolistRepository = new TodoListRepositoryImpl();
    
    $todolistService = new TodoListServiceImpl($todolistRepository);
    $todolistService->addTodoList("Belajar PHP Dasar");
    $todolistService->addTodoList("Belajar PHP OOP");
    $todolistService->addTodoList("Belajar PHP DATABASE");
    
    $todolistService->showTodoList();
    
    $todolistService->removeTodoList(1);
    $todolistService->showTodoList();
    
    $todolistService->removeTodoList(4);
    $todolistService->showTodoList();
    
    $todolistService->removeTodoList(2);
    $todolistService->showTodoList();
    
    $todolistService->removeTodoList(1);
    $todolistService->showTodoList();
}

testRemoveTodoList();