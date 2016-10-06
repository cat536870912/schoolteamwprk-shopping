<?php
header('Content-type: text/html; charset=utf-8');

require_once "inc/class/Car.class.php";

session_start();

$Cart = new Cart();

$sn = $_GET["sn"];
$num = $_GET['num'];
//echo $sn;
if(!is_numeric($num))
$num = 1;
if(isset($sn) && strlen(trim($sn))>0 && is_numeric($sn) && $sn==0){
	$Cart->addItem($sn, "蜂蜜牛舌餅", 140, $num, "描述", "單位");}
if(isset($sn) && strlen(trim($sn))>0 && is_numeric($sn) && $sn==1){
	$Cart->addItem($sn, "海苔牛舌餅", 140, $num, "描述", "單位");}
if(isset($sn) && strlen(trim($sn))>0 && is_numeric($sn) && $sn==2){
	$Cart->addItem($sn, "咖啡牛舌餅", 140, $num, "描述", "單位");}
if(isset($sn) && strlen(trim($sn))>0 && is_numeric($sn) && $sn==3){
	$Cart->addItem($sn, "鮮奶牛舌餅", 140, $num, "描述", "單位");}
if(isset($sn) && strlen(trim($sn))>0 && is_numeric($sn) && $sn==4){
	$Cart->addItem($sn, "起司牛舌餅", 120, $num, "描述", "單位");}
if(isset($sn) && strlen(trim($sn))>0 && is_numeric($sn) && $sn==5){
	$Cart->addItem($sn, "芝麻牛舌餅", 120, $num, "描述", "單位");}
if(isset($sn) && strlen(trim($sn))>0 && is_numeric($sn) && $sn==6){
	$Cart->addItem($sn, "可可牛舌餅", 140, $num, "描述", "單位");}
if(isset($sn) && strlen(trim($sn))>0 && is_numeric($sn) && $sn==7){
	$Cart->addItem($sn, "黑糖牛舌餅", 120, $num, "描述", "單位");}
if(isset($sn) && strlen(trim($sn))>0 && is_numeric($sn) && $sn==8){
	$Cart->addItem($sn, "紅麴牛舌餅", 160, $num, "描述", "單位");}
if(isset($sn) && strlen(trim($sn))>0 && is_numeric($sn) && $sn==9){
	$Cart->addItem($sn, "花生牛舌餅", 120, $num, "描述", "單位");}
//加入成功後回到前一頁
$referer  = $_SERVER['HTTP_REFERER'];
if(strlen(trim($referer))==0)
$referer = "product2.php";

header("Location:$referer");
?>