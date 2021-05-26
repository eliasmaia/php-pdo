<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$caminhoBanco = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:' . $caminhoBanco);

$student = new Student(
    null, 
    "Elias Neto', ''); DROP TABLE students; --", 
    new DateTimeImmutable('1994-03-28')
);

$sqlInsert = "INSERT INTO students (name, birth_date) VALUES ('{$student->name()}', '{$student->birthDate()->format('Y-m-d')}');";
echo $sqlInsert; exit();

var_dump($pdo->exec($sqlInsert));