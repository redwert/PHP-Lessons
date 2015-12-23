<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
define("BR","<br>-------------------------------------------------------------<br>");
$name='Павел';
$age='33';
echo "Задача 1<br>";
echo "Меня зовут ",$name,"<br>Мне ",$age,"года";
echo BR;

echo "Задача 2<br>";
$a=10;
$triangeS=($a*sqrt(3))/4;
echo "Площадь равностороннего треугольника при стороне равной 10см будет равна ". $triangeS ."см<sup>2</sup>";
echo BR;

echo "Задача 3<br>";
?>
    <h1>Конвертер систем исчисления</h1>
    <label for="decimal">Число в десятичной системе исчесления</label><br>
    <input size="10" name="decimal" pattern="^[0-9]+$"><br>
    <input type="submit" value="Из десятичной в двоичную" onclick="decToBin()">
    <input type="submit" value="Из двоичной в десятичную" onclick="binToDec()"><br>
    <label for="binary">Число в двоичной системие исчесления</label><br>
    <textarea name="binary" cols="40" rows="10"  pattern="^[0-1]+$"></textarea>

    <script>
        function binToDec(){
            var sum=(document.getElementsByName('binary')[0].value).toString();
            var binary='', pos, str, i=-1;
            while(binary!=sum){
                i++;

                if(i==0){
                    binary='0';
                }else if (binary.indexOf('0')>-1){ // если есть 0
                    pos=binary.lastIndexOf('0');
                    // заменяем последнее вхождение 0 на 1
                    binary = binary.substring(0, pos) + '1'+ binary.substring(pos+1, binary.length);
                    if (pos+1!= binary.length){ // если 0 не последний символ в строке
                        // заменяем все вхождения 1 на 0, после позиции на которой поменяли 0 на 1
                        str = binary.substring(pos+1, binary.length);
                        str= str.replace(new RegExp('1', 'g'),'0');
                        binary = binary.substring(0, pos+1)+str;0
                    }
                }else{
                    binary='1' + binary.replace(new RegExp('1', 'g'),'0');
                }
            }
            document.getElementsByName('decimal')[0].value=i;
        }

        function decToBin(){
            var sum=document.getElementsByName('decimal')[0].value;
            var binary, pos, str;

            for (var i=0; i<=sum; i++){
                if(i==0){
                    binary='0';
                }else if (binary.indexOf('0')>-1){ // если есть 0
                    pos=binary.lastIndexOf('0');
                    // заменяем последнее вхождение 0 на 1
                    binary = binary.substring(0, pos) + '1'+ binary.substring(pos+1, binary.length);
                    if (pos+1!= binary.length){ // если 0 не последний символ в строке
                        // заменяем все вхождения 1 на 0, после позиции на которой поменяли 0 на 1
                        str = binary.substring(pos+1, binary.length);
                        str= str.replace(new RegExp('1', 'g'),'0');
                        binary = binary.substring(0, pos+1)+str;0
                    }
                }else{
                    binary='1' + binary.replace(new RegExp('1', 'g'),'0');
                }
            }
            document.getElementsByName('binary')[0].value=binary;
        }
    </script>
</body>
</html>