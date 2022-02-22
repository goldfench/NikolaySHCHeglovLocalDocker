<?php
/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";

// Write your code here:
$order = &$very_bad_unclear_name;
$order .=" and 15 strips and 40% discount";

echo"\nYour order is:$very_bad_unclear_name.";

$number = 23;
echo"<br><br>$number";
echo"<br>";
$FloatNumber = 3.1415926;
echo"$FloatNumber"."<br>";
$negative = -11;
echo($number + $negative)."<br>";
$last_month = 1187.23;
$this_month = 1089.98;
echo($last_month - $this_month)."<br><br>";

$num_languages = 4;
$months = 11;
$days = 16;
$days_per_language = $months * $days / $num_languages;
echo"$days_per_language"."<br><br>";

echo(8**2)."<br><br>";

$my_num = 2;
$answer = $my_num;
$answer +=2;
$answer *=2;
$answer -=2;
$answer /=2;
$answer -=$my_num;
echo"$answer<br><br>";

$a=10;
$b=3;
echo($a % $b)."<br>";
if ($a % $b == 0)
    echo"Делится ", $a / $b;
else
    echo"Делится с остатком ", $a % $b;
echo"<br>";
$st=pow(2,10);
echo"$st<br>";
echo(sqrt(245))."<br>";
$list = [4,2,5,19,13,0,10];
$sum = 0;
foreach ($list as $i)
    $sum +=$i**2;
echo(sqrt($sum))."<br>";
echo round(sqrt(379), 0)."<br>";
echo round(sqrt(379), 1)."<br>";
echo round(sqrt(379), 2)."<br>";
$list2 = array ('ceil' => ceil(sqrt(587)), 'floor' => floor(sqrt(587)));
echo $list2['ceil']."<br>";
echo $list2['floor']."<br>";
echo min(4,-2,5,19,-130,0,10)."<br>";
echo max(4, -2,5,19,-130,0,10)."<br>";
echo rand(1,100)."<br>";
$list3 = [];
for ($i = 0; $i < 10; $i ++)
{
    $list3[$i] = rand(1,100);
    echo"$list3[$i] ";
}
echo"<br>";
echo(abs($a - $b))."<br>";
$list4 =  [1,2,-1,-2,3,-3];
foreach ($list4 as $i)
{
    $i = abs($i);
    echo"$i ";
}
echo"<br>";
$num = 127;
$ListOfDividers = [];
$c = 0;
for ($i = 1; $i <= $num; $i++)
{
    if ($num % $i == 0)
    {
        $ListOfDividers[$c] = $i;
        echo "$ListOfDividers[$c] ";
        $c += 1;
    }
}
echo"<br>";
$nat = [1,2,3,4,5,6,7,8,9,10];
$sum = 0;
$c = 0;
foreach ($nat as $i)
{
    if ($sum <= 10)
    {
        $sum += $i;
        $c += 1;
    }
}
echo"$c<br>";