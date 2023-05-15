<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework 3</title>
    <style>
        .task {
            font-style: italic;
            font-weight: bold;
            text-indent: 15px;
        }
        table {
            background-color: floralwhite;
            border-collapse: collapse;
            border: 3px solid black;
            margin: 15px auto;
        }

        tr, td {
            border: 1px solid black;
            height: 25px;
            width: 80px;
            text-align: center;
            
        }

        tr:hover {
          background-color: dimgray;  
          font-weight: bold;
          color: white;
        }

        hr {
            height: 3px;
            background-image: linear-gradient(to right, khaki 40%, darkKhaki 60%);
        }
    </style>
</head>
<body>
    
<?php 

// task 1

    echo '<p class="task"> 1. Сделайте функцию, которая возвращает куб числа. Число передается
    параметром. </p>';

    function cubeOfNumber($int = 1) {
        if (is_numeric($int)) {
            $result = $int ** 3;

            return "Куб числа $int равен $result";
        } else {
            echo "Введенные параметр <b>$int</b> не является числом";
        }
    }

    echo cubeOfNumber(5);
    echo '<hr>';

// task 2 

    echo '<p class="task"> 2. Сделайте функцию, которая возвращает куб числа. Число передается
    параметром. </p>';

    function sumOfNum($a = 0, $b = 1) {
        if (is_numeric($a) && is_numeric($b)) {
            $result = $a + $b;

            return "$a + $b  = $result";
        } else {
            echo "Введенные параметры <b>$a</b> или <b>$a</b> не является числом";
        }
    }

    echo sumOfNum(5, 91); 
    echo '<hr>';

// task 3

    echo '<p class="task"> 3. Сделайте функцию, которая принимает параметром число от 1 до 7, а
    возвращает день недели на русском языке. </p>';

    function dayOfWeek($day) {
        switch($day) {
            case 1:
                echo 'Понедельник';
            break;
            
            case 2:
                echo 'Вторник';
            break;

            case 3:
                echo 'Среда';
            break;

            case 4:
                echo 'Четверг';
            break;

            case 5:
                echo 'Пятница';
            break;

            case 6:
                echo 'Суббота';
            break;

            case 7:
                echo 'Воскресенье';
            break;
        }
    }

    echo dayOfWeek(2);
    echo '<hr>';

// task 4

    echo '<p class="task"> 4. Сделайте функцию, которая параметром принимает число и проверяет -
    отрицательное оно или нет. Если отрицательное - пусть функция вернет true,
    а если нет - false. </p>';

    function checkNum($num) {
        if($num > 0) {
            echo "Число <b>$num</b> <u>положительное</u>.";

            return true;
        } else {
            echo "Число <b>$num</b> <u>отрицательное</u>.";

            return false;
        }
    }

    checkNum(-5);
    echo '<hr>';

// task 5

    echo '<p class="task"> 5. Сделайте функцию getDigitsSum (digit - это цифра), которая параметром
    принимает целое число и возвращает сумму его цифр. </p>';

    function getDigitsSum($degit) {
        if (!is_integer($degit)) {
            echo 'Попробуйте ввести целое число.';
        } else {
            $degit = (string)$degit;
            $len = strlen($degit);
            $res = 0;

            for ($i = 0; $i < $len; $i++) {
                $res += $degit[$i];
            }           
        }

        return $res;
    }
    
    echo 'Сумма цифр введенного числа равняется ' . getDigitsSum(534);
    echo '<hr>';

// task 6

    echo '<p class="task"> 6. Найдите все года от 1 до 2020, сумма цифр которых равна 13. Для этого
    используйте вспомогательную функцию getDigitsSum из предыдущей задачи. </p>';

    function findYears() {
        $str = '';

        for ($i = 1; $i <= 2020; $i++) {
            if (getDigitsSum($i) === 13) $str .= $i . ', ';
        }

        return $str;
    }

    echo findYears();
    echo '<hr>';

// через массив слишком громоздко 

    function findYears2() {
        $arr = [];

        for ($i = 1; $i <= 2020; $i++) {
            if (getDigitsSum($i) === 13) array_push($arr, $i); 
        }

        return $arr;
    }
/*
    echo '<pre>';
    print_r(findYears2());
    echo '</pre>';
*/

// task 7

    echo '<p class="task"> 7. Сделайте функцию isEven() (even - это четный), которая параметром
    принимает целое число и проверяет: четное оно или нет. Если четное - пусть
    функция возвращает true, если нечетное - false. </p>';

    function isEven($int) {
        if (!is_integer($int)) return 'Введите целое число';

        return ($int % 2) ? false : true;
    }

    var_dump(isEven(6));
    echo '<hr>';

// task 8

    echo '<p class="task"> 8. Сделайте функцию, которая принимает строку на русском языке, а
    возвращает ее транслит. </p>';

    function translator($str = 'текст') {
        $enText = '';
        $abc = [
            'а' => 'a' , 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'jo', 'ж' => 'zh',
            'з' => 'z', 'и' => 'i', 'й' => 'j', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o', 'п' => 'p', 
            'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'cz', 'ч' => 'ch', 'ш' => 'sh', 
            'щ' => 'sch', 'ъ' => '``', 'ы' => 'y', 'ь' => '`', 'э' => 'э`', 'ю' => 'yu', 'я' => 'ya', ' ' => ' ', 
            
            'А' => 'A' , 'Б' => 'B', 'В' => 'V', 'Г' => 'G', 'Д' => 'D', 'Е' => 'E', 'Ё' => 'JO', 'Ж' => 'ZH', 'З' => 'Z', 'И' => 'I', 
            'Й' => 'J', 'К' => 'K', 'Л' => 'L', 'М' => 'M', 'Н' => 'N', 'О' => 'O', 'П' => 'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T', 'У' => 'U', 
            'Ф' => 'F', 'Х' => 'H', 'Ц' => 'CZ', 'Ч' => 'CH', 'Ш' => 'SH', 'Щ' => 'SCH', 'Ъ' => '``', 'Ы' => 'Y', 'Ь' => '`', 'Э' => '`', 
            'Ю' => 'YU', 'Я' => 'YA',

            ',' => ',', '.' => '.', '?' => '?', '!' => '!', '"' => '"', '\'' => '\'', ':' => ':', ';' => ';'
        ];

        for($i = 0; $i < strlen($str); $i++) {
            foreach ($abc as $key => $value) {
                if (mb_substr($str, $i, 1) == $key) $enText .= $value;
            }
        }

        return $enText;
    }

    echo translator('Меня зовут Андрей, я изучаю программирование!');
    echo '<hr>';

// task 9

    echo '<p class="task"> 9. Сделайте функцию, которая возвращает множественное или единственное
    число существительного. Пример: 1 яблоко, 2 (3, 4) яблока, 5 яблок. Функция
    первым параметром принимает число, а следующие 3 параметра — форма
    для единственного числа, для чисел два, три, четыре и для чисел, больших
    четырех, например, func(3, "яблоко", "яблока", "яблок").  </p>';
    /*
    1 кот
    2-4 кота
    5-20 котов
    21 кот 
    */

    function true_wordform($count, $first_form, $second_form, $third_form){

        $countNew = $count % 10;
        if ($countNew > 10 && $countNew < 20) {
            return "$count $third_form";
        } else if ($countNew > 1 && $countNew < 5) {
            return "$count $second_form";
        } else if ($countNew == 1) {
            return "$count $first_form";
        } else 
        return "$count $third_form";

    }

    echo true_wordform(1241, 'кот', 'кота', 'котов');
    echo '<hr>';

// task 10

    echo '<p class="task"> 10. Дан массив с числами. Выведите последовательно его элементы 
    используя рекурсию и не используя цикл. </p>';


    function arrOutput ($arr, $i = 0) {

        if($i < count($arr)) {
            echo $arr[$i] . ', ';
            $i++;

            arrOutput($arr, $i);
        }
    }

    arrOutput(['1e',32,2,'text', '538ksnq', 65]);
    echo '<hr>';

// task 11

    echo '<p class="task"> 11. Дано число. Сложите его цифры. Если сумма получилась более 9-ти, 
    опять сложите его цифры. И так, пока сумма не станет однозначным числом 
    (9 и менее). 
     </p>';

     function sumOfDigits($int){ 
        $sum = 0;

        if (!is_int($int)) return 'Введите целое число';
        if (strlen($int) == 1) return $int;

        else {
            $int = (string)$int;

            for ($i = 0; $i < strlen($int); $i++) {
                $sum += $int[$i];
            }
        }     

        return ($sum <= 9) ? $sum : sumOfDigits($sum);
     }

     echo 'Сумма цифр введенного числа: <b>' . sumOfDigits(347632) . '</b>.';
     echo '<hr>';

// task 12

    echo '<p class="task"> 12. Рассчитать скорость движения машины и выведите её в удобочитаемом 
    виде. Осуществить возможность вывода в км/ч, м/c. Представить решение 
    задачи с помощью одной функции. </p>';

    function movementSpeed($distance, $time, $unit) {
        if ($unit == 'km/h') {
            $speed = $distance / $time;

            return "Скорость движения машины : <b> $speed км/ч </b>";
        } else if ($unit == 'm/s') {
            $speed = ($distance / $time) * (5 / 18);

            $speed = round($speed);

            return "Скорость движения машины : <b> $speed м/c </b>";
        }
    }

    echo movementSpeed(210, 2, 'km/h') . '<br>';
    echo movementSpeed(210, 2, 'm/s');
    echo '<hr>';

// task 14

    echo '<p class="task"> 14. Палиндромом называют последовательность символов, которая читается 
    как слева направо, так и справа налево. Напишите функцию по определению 
    палиндрома по переданному параметру. </p>';

    function palindrom(string $str) {
        $reverseStr = '';
        $len = strlen($str);

        for($i = $len; $i >= 0; $i--){
            $reverseStr .= mb_substr($str, $i, 1);
        }
        
        return ($str === $reverseStr) ? "Слово <b> $str </b> является палиндромом" : 
                                        "Слово <b> $str </b> не является палиндромом";
    }

    echo palindrom('шалаш');
    echo '<hr>';

// task 15

    echo '<p class="task"> 15. Создание функцию создания таблицы умножения в HTML-документе в 
    виде таблицы с использованием соотв. тегов. </p>';

    function multiplicationTable() {

        echo "<table>";

        for ($i = 2; $i < 10; $i++) {
            echo '<tr>';
            for($j = 2; $j < 10; $j++) {
                $sum = $i * $j;

                echo "<td> $i * $j = $sum </td>";
            }
            echo "</tr>";
        }

        echo '</table>';
    }

    multiplicationTable();
    echo '<hr>';

// task 16

    echo '<p class="task"> 16. Дана строка с текстом. Напишите функцию определения самого длинного
    слова. </p>';

    function findLongestWord($str) {
        $arr = explode(' ', $str);
        $longestWord = '';

        for($i = 0; $i < count($arr); $i++) {
            if (strlen($arr[$i]) > strlen($arr[$i+1])) {
                $longestWord = $arr[$i];
            }
        }

        return "В строке <u> $str </u> самое длинное слово <b> $longestWord </b>.";
    }

    echo findLongestWord('hello, my name is Andrew');
    echo '<hr>';
    
// task 17

    echo '<p class="task"> 17. Напишите функцию определения суммарного количества единиц в числах
    от 1 до 100. </p>';
// решение без использования доп. функций
    function sumOf1($start, $end) {
        $string = '';
        $res = 0;

        for($i = $start; $i <= $end; $i++) {
            $string .= $i . ' ';
        }

        for ($j = 0; $j < strlen($string); $j++) {
            if ($string[$j] == 1) $res += $string[$j]; 
        }

        return "В промежутке чисел от $start до $end сумма всех единиц равна <b> $res </b>";
    }

    echo sumOf1(1, 100);
    echo '<hr>';


?>



</body>
</html>