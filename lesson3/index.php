<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
define("BR","<br><br><br>-------------------------------------------------------------<br>");

echo "Первое задание<br><br>Найти сумму 1+4+7+10+...+n.<br>";

$n=20;
$sum=0;
for ($i=1;$i<=$n;$i+=3){
    $sum+=$i;
}
echo "При n=$n сумма ряда 1+4+7+10+...+n. равна $sum";

echo BR;
echo "Второе задание<br><br>Cоздать массив из n чисел, каждый элемент которого равен квадрату своего номера.<br>";

$arr;
for ($i=0;$i<$n;$i++){
    $arr[$i]=$i*$i;
}
echo "<pre>";
print_r($arr);
echo "</pre>";

echo BR;
echo "Третье задание<br><br>Дано натуральное число. Если оно четное, то уменьшите его в 2 раза, иначе увеличьте в 3 раза<br>";

$rand=mt_rand(1,100);
echo "Натуральное число равно $rand, результат вычислений равен ";
if($rand%2==0){
    echo $rand/2;
}else{
    echo $rand*3;
}

echo BR;
echo "Четвертое задание<br><br>Дано два числа. Вывести 'Да', если они отличаются не более чем на 20, иначе вывести 'Нет'.<br>";

$rand1=mt_rand(1,100);
echo "Первое число равно $rand, торое число равно $rand1. Результат вычислений:<br>";
if (abs($rand-$rand1)<=20){
    echo "Да<br>";
}else{
    echo "Нет<br>";
}

echo BR;
echo "Задание с повышенной сложностью<br><br>Упорядочить значения массива по возрастанию. Реализовать двумя способами: ";
echo "с помощью стандартной функции и без.<br>";

for ($i=0; $i<=20; $i++){
    $arr[$i]=mt_rand(1,100);
}
$arr1=&$arr;
?>
    <div style="overflow: hidden;">
        <div style="float: left;">
            Исходный массив<br>
            <pre>
                <?php
                    print_r($arr);
                ?>
            </pre>
        </div>
        <div style="float: left;">
            1-й способ:<br>
            <pre>
                <?php
                    sort($arr1);
                    print_r($arr1);
                ?>
            </pre>
        </div>
        <div style="float: left;">
            2-й способ:<br>
            <pre>
                <?php
                    for($i=0;$i<count($arr)-1;$i++){
                        for($k=$i+1;$k< count($arr);$k++){
                            if($arr[$i]>$arr[$k]){
                                $temp=$arr[$i];
                                $arr[$i]=$arr[$k];
                                $arr[$k]= $temp;
                            }
                        }
                    }
                    print_r($arr);
                ?>
            </pre>
        </div>
    </div>
</body>
</html>