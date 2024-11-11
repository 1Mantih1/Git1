<?php
echo "Меню калькулятора:\n";
echo "1. Ввести два числа\n";
echo "2. Выполнить сложение\n";
echo "3. Выполнить вычитание\n";
echo "4. Выполнить деление\n";
echo "5. Возвести число в степень\n";

// Выбор действия
$choice = readline("Выберите действие: ");

switch ($choice) {
    case 1:
        $num1 = readline("Введите первое число: ");
        $num2 = readline("Введите второе число: ");
        break;
    case 2:
        $result = $num1 + $num2;
        echo "Результат сложения: $result\n";
        break;
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> division
    case 3:
        $result = $num1 - $num2;
        echo "Результат вычитания: $result\n";
        break;
<<<<<<< HEAD
>>>>>>> subtraction
=======
    case 4:
        if ($num2 != 0) {
            $result = $num1 / $num2;
            echo "Результат деления: $result\n";
        } else {
            echo "Ошибка: деление на ноль\n";
        }
        break;
>>>>>>> division
    default:
        echo "Неверный выбор\n";
        break;
}
