# FrontCodeCollection(前端代码整理)

## [1.图片压缩上传](https://github.com/Mr-houzi/FrontCodeCollection/tree/master/uploadPic)

### 演示

[演示Demo](https://mr-houzi.github.io/FrontCodeCollection/uploadPic/)

### 简介

之前图片上传用uploadify插件使用，分为两个版本flash免费版和H5收费版，目前手机端都不采用flash，并且H5版收费，个人感觉这个图片上传代码还是比较好的。虽然网上有大神根据uploadify插件H5版改写出了Huploadify并开源，但是这个图片压缩上传代码比较简洁，并且交互和界面也比较美观。（前端压缩未实现）


## [2.3D旋转焦点图](https://github.com/Mr-houzi/FrontCodeCollection/tree/master/3DRotateBanner)

### 演示

[演示Demo](https://mr-houzi.github.io/FrontCodeCollection/3DRotateBanner/)

### 简介

简洁，轻便的3D旋转焦点图

### 用法

css文件引用：
```
<link href="css/demos.css" rel="stylesheet" />
```

页面结构：
```
<ul>
	<li><img src="images/firefox.png" alt="firefox" /></li>
	<li><img src="images/ps.png" alt="ps" /></li>
	<li><img src="images/word.png" alt="word" /></li>
	<li><img src="images/youtube.png" alt="youtube" /></li>
	<li><img src="images/skype.png" alt="skype" /></li>
</ul>
```

jquery代码调用：
```
<script src="js/jquery.min.js"></script>
<script src="js/jquery.roundabout.js"></script>
<script>
    $(document).ready(function() {
        $('ul').roundabout();
    });
</script>
```