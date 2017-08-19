<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>黑色时间轴个人博客模板</title>
<meta name="keywords" content="黑色模板,个人网站模板,个人博客模板,博客模板,css3,html5,网站模板" />
<meta name="description" content="这是一个有关黑色时间轴的css3 html5 网站模板" />
<link href="/blogs/Public/Home/css/styles.css" rel="stylesheet">
<link href="/blogs/Public/Home/css/animation.css" rel="stylesheet">
<!-- 返回顶部调用 begin -->
<link href="/blogs/Public/Home/css/lrtk.css" rel="stylesheet" />
<script type="text/javascript" src="/blogs/Public/Home/js/jquery.js"></script>
<script type="text/javascript" src="/blogs/Public/Home/js/js.js"></script>
<!-- 返回顶部调用 end-->
<!--[if lt IE 9]>
<script src="/blogs/Public/Home/js/modernizr.js"></script>
<![endif]-->
</head>
<body>
<header>
  <nav id="nav">
    <ul>
    <li><a href="<?php echo U('Index/index');?>">网站首页</a></li>
    <?php if(is_array($ca)): $i = 0; $__LIST__ = $ca;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?><li><a href="/blogs/index.php/Home/Index/two/id/<?php echo ($c["cat_id"]); ?>" ><?php echo ($c["cat_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?> 
     <li><a href="<?php echo U('Index/three');?>">登录/注册</a></li>
    </ul>
    <script src="/blogs/Public/Home/js/silder.js"></script><!--获取当前页导航 高亮显示标题--> 
  </nav>
</header>
<!--header end-->
<div id="mainbody">
  <div class="info">
  <div  style=" width:100%; height:50px; background:#fff;">
    <button class="d1">登录</button>
    <button class="d2">注册</button>
  </div>
    
  <div style=" width:100%; height:700px; background:#fff;" class="f1">
    <div style=" width:400px; height:300px; position: relative; top:50%;
    left:50%; margin-left:-150px;margin-top:-200px;">
    <h2>登录</h2>
      <form action="/blogs/index.php/Home/Index/login/" method="post" enctype="multipart/form-data">
        <p><label>账号：<input type="text" name="lo_name"></label></p>
        <p><label>密码：<input type="text" name="lo_pwd"></label></p>
        <p><input type="submit" value="登录"></p>
      </form>
    </div>
  </div>

  
  <div style="width:100%; height:700px; background:#fff; display:none;" class="f2">
     <div style=" width:400px; height:300px; position: relative; top:50%;
    left:50%; margin:-150px;margin-top:-200px;">
    <h2>注册</h2>
      <form action="/blogs/index.php/Home/Index/threeinsert/" method="post" enctype="multipart/form-data">
        <p><label>账号：<input type="text" name="lo_name"></label></p>
        <p><label>密码：<input type="text" name="lo_pwd"></label></p>
        <p><label>头像：<input type="file" name="lo_img"></label></p>
        <p><input type="submit" value="提交"></p>
      </form>
    </div>
  </div>
    
 
    <!--bloglist end-->
    
 </div>
  <!--blogs end--> 
</div>
<!--mainbody end-->
<script>
  $(".d1").click(function(){
      $(".f1").show();
      $(".f2").hide();
  })
   $(".d2").click(function(){
      $(".f2").show();
      $(".f1").hide();
  })
</script>

</body>
</html>