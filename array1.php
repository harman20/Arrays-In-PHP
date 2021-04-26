<?php
$city=array("mohali","chandigarh","shimla",22);


echo $city[0];
echo $city[1];
echo $city[2];

print_r($city);

var_dump($city);

$cities=array("Chandigarh"=>"punjab","Shimla"=>"himachal","ambala"=>"haryana");

foreach($cities as $x=>$x_value)
{
    echo "key=".$x.", value=".$x_value;   // . is used for concatenation
}
echo "<br>";
$cartype=array(
    array("maruti",2020,20),
    array("ford",2021,20),
    array("renault",2020,28)
);
echo $cartype[0][0];
echo $cartype[0][1];

echo $cartype[1][0];
echo $cartype[2][0];
echo $cartype[2][1];

$var1=count($city);
echo $var1;
echo "<br>";
$revcity=array_reverse($city);
foreach($revcity as $rev=>$r)
{
    echo $rev."=>".$r;
}
foreach($revcity as $rev)
{
    echo $rev;
}

?>