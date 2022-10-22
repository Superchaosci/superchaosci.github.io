<?php
$Cement = $_GET["Cement"];
$Sand = $_GET["Sand"];
$Build = $_GET["BuildAWall"];
$Common = $_GET["CommonBrick"];
$Rubbish = $_GET["Rubbish"];
$GreenTile = $_GET["GreenTile"];
$Air = $_GET["AirBrick"];
$Ceramic = $_GET["CeramicTile"];


$priceCement = $_GET["PriceCement"];
$priceSand = $_GET["PriceSand"];
$priceCommonBrick = $_GET["PriceCommonBrick"];
$priceAirBrick = $_GET["PriceAirBrick"];
$priceCeramicbrick = $_GET["PriceCeramicbrick"];
$priceGreentile = $_GET["PriceGreentile"];


if($Cement!=0){
    $totall = $totall+($Cement*$priceCement);
    echo "水泥单价".$priceCement."元每袋\n共".$Cement."袋\n\n";
}
if($Sand!=0){
    $totall = $totall+($priceSand*$Sand);
    echo "沙子单价".$priceSand."元每方\n共".$Sand."方\n\n";
    
}
if($Build!=0){    
    $totall = $totall+$Build;
    echo "打墙".$Build."元\n\n";
    
}
if($Common!=0){
    $totall = $totall+($priceCommonBrick*$Common);
    echo "红砖单价".$priceCommonBrick."元每块\n共".$Common."块\n\n";
    
}
if($Rubbish!=0){
    $totall = $totall+$Rubbish;
    echo "清理垃圾".$Rubbish."元\n\n";
    
}
if($GreenTile!=0){
    $totall = $totall+($priceGreentile*$GreenTile);
    echo "青瓷砖单价".$priceGreentile."元每块\n共".$GreenTile."块\n\n";
    
}
if($Air!=0){
    $totall = $totall+($priceAirBrick*$Air);
    echo "空心砖单价".$priceAirBrick."元每块\n共".$Air."块\n\n";
    
}
if($Ceramic!=0){
    $totall = $totall+($priceCeramicbrick*$Ceramic);
    echo "瓷砖单价".$priceCeramicbrick."元每块\n共".$Ceramic."块\n\n";
    


}

echo "    合计".$totall."元";
?>