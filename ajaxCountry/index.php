<?
    include("countryPrice.php");
    include("functions.php");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="js/jquery-1.12.0.min.js" type="text/javascript"></script>
    <script src="js/main.js" type="text/javascript"></script>
    <link href="css/styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="tourCalculator">
    <form id="getTourPrice">
        <div id="countryBlock">
            <label>Выберите страну</label>
            <select name="country" id="country" autofocus>
                <option disabled selected="selected" value="">Страна</option>
                <? foreach($countryArr as $key => $value){?>
                    <option value="<?=$key?>"><?=$key?></option>
                <?}?>
            </select>
            <p class="message">Выберите страну</p>
        </div>
        <div id="daysBlock">
            <label>Введите кол-во дней</label>
            <input type="text" required name="days" id="days" value="1" placeholder="кол-во дней" pattern="^[1-9]{1}[0-9]*$">
            <p class="message">Введите цыфру больше 0</p>
        </div>
        <div id="clubDiscontBlock">
            <input type="checkbox" id="clubDiscont" name="clubDiscont">
            <label for="clubDiscont">5% cкидка для членов клуба</label>
        </div>
        <p>
            <input type="submit">
        </p>
    </form>
    <div class="answer"></div>
</div>
</body>
</html>