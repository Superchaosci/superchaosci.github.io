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


$totall = 0;
switch($Cement){
    case $Cement!=0:
    $totall = $totall+($Cement*$priceCement);
    echo "水泥单价".$priceCement."//每袋\n共".$Cement."袋\n";
    break;
}
switch($Sand){
    case $Sand!=0:
    $totall = $totall+($priceSand*$Sand);
    echo "沙子单价".$priceSand."//每方\n共".$Sand."方\n";
    break;
}
switch($Build){    
    case $Build>=1:
    $totall = $totall+$Build;
    echo "打墙".$Build."元\n";
    break;
}
switch($Common){
    case $Common>=1:
    $totall = $totall+($priceCommonBrick*$Common);
    echo "红砖单价".$priceCommonBrick."//每块\n共".$Common."块\n";
    break;
}
switch($Rubbish){
    case $Rubbish>=1:
    $totall = $totall+$Rubbish;
    echo "清理垃圾".$Rubbish."元\n";
    break;
}
switch($GreenTile){
    case $GreenTile>=1:
    $totall = $totall+($priceGreentile*$GreenTile);
    echo "青瓷砖单价".$priceGreentile."//每块\n共".$GreenTile."块\n";
    break;
}
switch($Air){
    case $Air>=1:
    $totall = $totall+($priceAirBrick*$Air);
    echo "空心砖单价".$priceAirBrick."//每块\n共".$Air."块\n";
    break;
}
switch($Ceramic){
    case $Ceramic>=1:
    $totall = $totall+($priceCeramicbrick*$Ceramic);
    echo "瓷砖单价".$priceCeramicbrick."//每块\n共".$Ceramic."块\n";
    break;


}

echo "共".$totall."元";
?>