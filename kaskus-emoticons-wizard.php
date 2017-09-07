<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"  dir="ltr" lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<style type="text/css">
body{
    text-align:center;
    font-family:"Lucida Grande",Verdana,Arial,"Bitstream Vera";
}
</style>
</head>
<body>
<?php
$httphost = @$_SERVER['HTTP_HOST'];
$httpreferer = @$_SERVER['HTTP_REFERER'];
$nonce = isset($_POST['nonce'])?$_POST['nonce']:"";
require_once '../../../wp-config.php';
include("kaskus-emoticons-list.php");
//print_r($KEEUrl);die;
//$opt = get_option('kaskus_emoticons');
foreach($KEReplace as $k=>$v){
	//if(isset($opt['stat']) && isset($opt['stat'][$k])){}
	echo "<a title=\"".$k."\" href=\"javascript:window.parent.send_to_editor(' ".$k." ')\" style=\"cursor:pointer;margin:1px;border:none\">".$v."</a>";
}
?>
</body>
</html>