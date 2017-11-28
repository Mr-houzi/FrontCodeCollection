<?php
header("content-type:text/html;charset=utf-8");
// var_dump($_FILES['file']);
foreach ($_FILES['file']['type'] as $key => $value) {
	//检验图片是否是通过HTTP POST上传的
	if (is_uploaded_file($_FILES['file']['tmp_name'][$key])) {
		echo $_FILES['file']['name'][$key]."文件是通过HTTP POST上传的<br/>";
	}else{
		echo $_FILES['file']['name'][$key]."文件不是通过HTTP POST上传的";exit;
	}
	
	//检验图片格式
	if (($_FILES['file']['type'][$key]=='image/jpeg')
		|| ($_FILES['file']['type'][$key]=='image/gif')
		|| ($_FILES['file']['type'][$key]=='image/png')) {
		
	}else{
		echo "图片格式不符合要求<br/>";
		exit;
	}
	//检验图片大小 图片大小小于1m
	if ($_FILES['file']['size'][$key]/1024>=1024) {
		echo "图片大小大于1M<br/>";
		exit;
	}
	//移动图片
	$uploaddir = 'upload/';
	$uploadfile = $uploaddir.basename($_FILES['file']['name'][$key]);
	if(move_uploaded_file($_FILES['file']['tmp_name'][$key], $uploadfile)){
		echo "上传成功";
	}

}
?>