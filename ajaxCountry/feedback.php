<?
include("countryPrice.php");
include("functions.php");

//&& preg_match('^[1-9]{1}[0-9]*$', $_REQUEST[days])
if ($_REQUEST[country]!='' ){
    $html="<p>".$_REQUEST[country]." ".$countryArr[$_REQUEST[country]][price]." грн. в день</p>";
    if($_REQUEST[days]==1){
        $html.="<p>Стоимость на " .$_REQUEST[days]. " день составляет ". $_REQUEST[days]*$countryArr[$_REQUEST[country]][price] . " грн.</p>";
    }elseif($_REQUEST[days]<5){
        $html.="<p>Стоимость на " .$_REQUEST[days]. " дня составляет ". $_REQUEST[days]*$countryArr[$_REQUEST[country]][price] . " грн.</p>";
    }else{
        $html.="<p>Стоимость на " .$_REQUEST[days]. " дней составляет ". $_REQUEST[days]*$countryArr[$_REQUEST[country]][price] . " грн.</p>";
    }

    $html.="<p>Сезонная скидка ". $countryArr[$_REQUEST[country]][discont] ."%</p>";
    if ($_REQUEST[clubDiscont]!=''){
        $html.="<p>Клубная скидка 5%</p>";
        $html.='<p class="summ">Итого: '. (($countryArr[$_REQUEST[country]][price]*$_REQUEST[days])*(1-($countryArr[$_REQUEST[country]][discont]/100)))*0.95 ."</p>";
    }else{
        $html.='<p class="summ">Итого: '. ($countryArr[$_REQUEST[country]][price]*$_REQUEST[days])*(1-($countryArr[$_REQUEST[country]][discont]/100)) ."</p>";
   }
    echo json_encode($html);
}else{
    echo json_encode('<p class="alert">Проверте правильность ввода полей</p>');
}
?>