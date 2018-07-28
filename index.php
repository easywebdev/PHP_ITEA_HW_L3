<?php
require_once 'Worker.php';
require_once 'Worker2.php';
require_once 'Worker4.php';
require_once 'Worker5.php';
require_once 'Student.php';
require_once 'Driver.php';

echo 'HW Lesson-3' . '<br /><hr />';

/*
 * Task-1
 */

// Object-1
$workerIvan = new Worker();
$workerIvan->name = 'Ivan';
$workerIvan->age = 25;
$workerIvan->salary = 1000;

// Object-2
$workerVasya = new Worker();
$workerVasya->name = 'Vasya';
$workerVasya->age = 26;
$workerVasya->salary = 2000;

// Calculation
$sumAge = $workerIvan->age + $workerVasya->age;
$sumSalary = $workerIvan->salary + $workerVasya->salary;

// Display rezult
echo 'Task-1:' . '<br/>';
echo 'Sum age = ' . $sumAge . 'years' . '<br/>';
echo 'Sum salary = ' . $sumSalary . '$' . '<br/>';
echo '<br/>';

/*
 * Task-2
 */

// Object-1
$worker2Ivan = new Worker2();
$worker2Ivan->setName('Ivan');
$worker2Ivan->setAge(25);
$worker2Ivan->setSalary(1000);

//Object-2
$worker2Vasya = new Worker2();
$worker2Vasya->setName('Vasya');
$worker2Vasya->setAge(26);
$worker2Vasya->setSalary(2000);

// Calculation
$sumAge2 = $worker2Ivan->getAge() + $worker2Vasya->getAge();
$sumSalary2 = $worker2Ivan->getSalary() + $worker2Vasya->getSalary();

// Display rezult
echo 'Task-2:' . '<br/>';
echo 'Sum age = ' . $sumAge2 . 'years' . '<br/>';
echo 'Sum salary = ' . $sumSalary2 . '$' . '<br/>';
echo '<br/>';

/*
 * Task-3
 */
echo 'Task-3:' . '<br/>';
$worker2Vasya->setAge(200);
echo '<br/>';
$worker2Ivan->setAge(0);
echo '<br/>';
$worker2Ivan->setAge(45);
echo 'Ivan age is ' . $worker2Ivan->getAge() . 'years' . '<br/>';
echo '<br/>';

/*
 * Tast-4
 */

$worker4Dima = new Worker4('Dima', 25, 1000);
echo 'Task-4:' . '<br/>';
echo 'Worker Dima: Age: ' . $worker4Dima->getAge() . 'years; Salary: ' . $worker4Dima->getSalary() . '$' . '<br/>';
echo '<br/>';

/*
 * Task-5
 */

// Object-1
$worker5Ivan = new Worker5();
$worker5Ivan->setName('Ivan');
$worker5Ivan->setAge(25);
$worker5Ivan->setSalary(1000);

// Object-2
$worker5Vasya = new Worker5();
$worker5Vasya->setName('Vasya');
$worker5Vasya->setAge(26);
$worker5Vasya->setSalary(2000);

// Object-3
$student = new Student();

// Calculation
$sumAge5 = $worker5Ivan->getAge() + $worker5Vasya->getAge();
$sumSalary5 = $worker5Ivan->getSalary() + $worker5Vasya->getSalary();

// Display rezult
echo 'Task-5:' . '<br/>';
echo 'Sum age = ' . $sumAge5 . 'years' . '<br/>';
echo 'Sum salary = ' . $sumSalary5 . '$' . '<br/>';
echo '<br/>';
var_dump($student);
echo '<br/><br/>';

/*
 * Task-6
 */

echo 'Task-6:' . '<br/>';
$driver = new Driver();
var_dump($driver);