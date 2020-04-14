<?php
// 基本練習 1
// Here your code !
echo "paiza php講座";
?>


<?php 
//　基本練習 2
// Here your code !
echo "勇者はレベルアップした";
?>


<?php 
//　基本練習3
// Here your code !
echo "paizaでプログラミングをマスター!";
?>


<?php 
//　基本練習 4
$a = "「";
$b = 4;
$c = "+";
$d = 5;
$e = "=";
$f = 9;
$g = "」";
echo $a . $b . $c . $d . $e . $f . $g;
?>


<?php 
//　基本練習 5
$a = "「現在日時:";
$b = 2019;
$c = "年0";
$d = 2;
$e = "月";
$f = 1;
$g = "日";
$h = 10;
$i = "時";
$j = 20;
$k = "分」";
echo $a . $b . $c . $d . $e . $f . $g . $h . $i . $j . $k;
?>


<?php 
// 基本練習 6
$a = "「";
$b = 2020;
$c = '年のオリンピック開催地は"東京"です。」';
echo $a . $b . $c;
?>


<?php
// 基本練習 7
$a = 25;
if ($a >= 20)
{
    echo "タバコの購入は可能";
}
else 
{
    echo "タバコの購入は違法";
 }
 ?>


<?php 
// 基本練習 8
$a = 90;
if ($a < 60)
{
    echo "不合格";
}
else 
{
    echo "合格";
}
?>


<?php 
// 基本練習 9
$a = 98;
if ($a == 100)
{
    echo "好きなジュースを買う";
}
elseif ($a == 200)
{
    echo "香ばしいから揚げを買う";
}
else 
{
    echo "家に帰る";
}
?>


<?php 
// phpの練習 成績判定
$a = 99;
if ($a < 60)
{
    echo "不合格";
}
elseif ($a >= 60 && $a <= 70)
{
    echo "合格";
}
elseif ($a >70 && $a <= 80)
{
    echo "良い";
}
elseif ($a > 80 && $a <= 100)
{
    echo "優秀";
}
else 
{
    echo "入力エラー";
}
?>


