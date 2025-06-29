<?php
function addNumber($a, $b)
{
  $add = $a + $b;
  return $add;
}

$total = addNumber(2, 3);
print $total;

<?php
function totalscore($score1, $score2, $score3)
{
    $Total = $score1 + $score2 + $score3;
    if ($Total > 210) {
        echo $Total . "点なので合格です";
    } else {
        echo $Total . "点なので不合格です";
    }
}
echo (totalscore(80, 60, 90));

<?php
function getSquareArea($base, $height) {
    return $base * $height;
}
function getTriangleArea($base, $height) {
    return $base * $height / 2;
}
function getTrapezoidArea($upperBase, $lowerBase, $height) {
    return ($upperBase + $lowerBase) * $height / 2;
}

echo getSquareArea(5, 5) . "\n";
echo getTriangleArea(7, 8) . "\n";
echo getTrapezoidArea(4, 5, 4);