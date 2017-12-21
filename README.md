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

## [2.全屏滚动-fullPage.js]()

### 演示

### 简介

fullPage.js 是一个基于 jQuery 的插件，它能够很方便、很轻松的制作出全屏滚动网站。

主要功能有：
- 支持鼠标滚动
- 支持前进后退和键盘控制
- 多个回调函数
- 支持手机、平板触摸事件
- 支持 CSS3 动画
- 支持窗口缩放
- 窗口缩放时自动调整
- 可设置滚动宽度、背景颜色、滚动速度、循环选项、回调、文本对齐方式等等

### 用法

1、引入文件

```
<link rel="stylesheet" href="css/jquery.fullPage.css">
<script src="js/jquery.min.js"></script>
<script src="js/jquery.fullPage.js"></script>
```

如果使用高级功能还需要引入以下文件

```
<!-- jquery.easings.min.js 用于 easing 参数，也可以使用完整的 jQuery UI 代替，如果不需要设置 easing 参数，可去掉改文件 -->
<script src="js/jquery.easings.min.js"></script>

<!-- 如果 scrollOverflow 设置为 true，则需要引入 jquery.slimscroll.min.js，一般情况下不需要 -->
<script src="js/jquery.slimscroll.min.js"></script>
```

2、HTML

```
<div id="dowebok">
    <div class="section">
        <h3>第一屏</h3>
    </div>
    <div class="section">
        <h3>第二屏</h3>
    </div>
    <div class="section">
        <h3>第三屏</h3>
    </div>
    <div class="section">
        <h3>第四屏</h3>
    </div>
</div>
```

每个 section 代表一屏，默认显示“第一屏”，如果要指定加载页面时显示的“屏幕”，可以在对应的 section 加上 class=”active”，如：

```
<div class="section active">第三屏</div>
```

同时，可以在 section 内加入 slide，如：

```
<div id="dowebok">
    <div class="section">第一屏</div>
    <div class="section">第二屏</div>
    <div class="section">
        <div class="slide">第三屏的第一屏</div>
        <div class="slide">第三屏的第二屏</div>
        <div class="slide">第三屏的第三屏</div>
        <div class="slide">第三屏的第四屏</div>
    </div>
    <div class="section">第四屏</div>
</div>
```

3、JavaScript

```
$(function(){
    $('#dowebok').fullpage();
});
```

4、其他：配置、方法、回调函数 

略 (更多请参考此页面)[http://www.dowebok.com/77.html]