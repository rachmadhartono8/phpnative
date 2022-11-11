<?php

namespace Repository{
    use Entity\Todolist;
    interface Todolistrepository
    {
        function save(Todolist $todolist): void;
        function remove(int $number): bool;
        function findAll():array;
    }
}