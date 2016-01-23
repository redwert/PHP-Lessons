<?
function isSetAndNotEmpty($val){
    if (isset($val)==true && $val !=''){
        return true;
    }else{
        return false;
    }
}

function calculatePrice($countryArr, $country, $days, $discont){
    function getDiscont($val,$percent){
        return round($val - $val/100*$percent,2);
    }

    if (isSetAndNotEmpty($country) && isSetAndNotEmpty($days) && intval($days)>0){
        foreach ($countryArr as $key => $val){
            if($key==$country){
                echo '<p>Ваша поездочка обойдется вам вот в такую суммочку ';
                if(isSetAndNotEmpty($discont)){
                    echo getDiscont(getDiscont(400,$val),5)*$days;
                }else{
                    echo getDiscont(400,$val)*$days;
                }
                echo' грн.</p>';
                return;
            }
        }
    }
}
?>