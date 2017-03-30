<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no, width=device-width" name="viewport">
	<title><?php echo $argv[2]; ?> - UOJ部署指北</title>

	<!-- css -->
	<link href="/css/base.min.css" rel="stylesheet">
	<link href="/css/project.min.css" rel="stylesheet">
	<link href="/css/styles.css" rel="stylesheet">

</head>
<body class="page-brand">
	
	<?php require_once("nav.php"); ?>

	<header class="header header-transparent header-waterfall ui-header">
		<ul class="nav nav-list pull-left hidden-md hidden-lg">
			<li>
				<a data-toggle="menu" href="#ui_menu">
					<span class="icon icon-lg">menu</span>
				</a>
			</li>
		</ul>
		<span class="header-logo header-affix visible-md-block visible-lg-block margin-right-no" data-offset-top="0" data-spy="affix">
			<p class="pagetitle"><?php echo $argv[2];?></p>
		</span>
		
		<ul class="nav nav-list pull-right">
			<li>
				<a data-toggle="menu" href="/">
					<span class="avatar avatar-sm"><img alt="logo" src="https://i2.buimg.com/519918/1da8328ee5b4147a.png"></span>
				</a>
			</li>
		</ul>
	</header>
	<main class="content">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3 col-md-10 col-md-offset-1">
					<section class="content-inner margin-top-no">
						<br>
						
<?php 

	system("python3 gen.py $argv[1]");
	$argv[1] = str_replace(".md","",$argv[1]);
	

?>
						
					</section>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-6 col-lg-offset-3 col-md-10 col-md-offset-1">
					<section class="content-inner margin-top-no">
						<hr>
							MIT协议 @ UOJ部署指北 2017.
					</section>
				</div>
			</div>

			<!-- 多说评论框 start -->
			<div class="ds-thread" data-thread-key="<?php echo "$argv[1]" ?>" data-title="<?php echo $argv[2] ?>" data-url="<?php echo "/$argv[1].html" ?>"></div>
			<!-- 多说评论框 end -->
			<!-- 多说公共JS代码 start (一个网页只需插入一次) -->
			<script type="text/javascript">
			var duoshuoQuery = {short_name:"uojuoj"};
			(function() {
				var ds = document.createElement('script');
				ds.type = 'text/javascript';ds.async = true;
				ds.src = 'https://dn-hb0716.qbox.me/duoshuo.js';
				ds.charset = 'UTF-8';
				(document.getElementsByTagName('head')[0] 
				|| document.getElementsByTagName('body')[0]).appendChild(ds);
			})();
			</script>
			<!-- 多说公共JS代码 end -->


		</div>


	</main>
	
	<div class="fbtn-container">
		<div class="fbtn-inner">
			<a class="fbtn fbtn-lg fbtn-brand-accent waves-attach waves-circle waves-light" data-toggle="dropdown">
				<span class="fbtn-text fbtn-text-left">Home</span>
				<span class="fbtn-ori icon">apps</span>
				<span class="fbtn-sub icon">close</span>
			</a>
			<div class="fbtn-dropup">
				<a class="fbtn waves-attach waves-circle" href="https://github.com/UniversalOJ/UniversalOJ.github.io/issues" target="_blank">
					<span class="fbtn-text fbtn-text-left">反馈</span><span class="icon">feedback</span>
				</a>
				<a class="fbtn fbtn-green waves-attach waves-circle" href="/" target="_self">
					<span class="fbtn-text fbtn-text-left">返回主页</span><span class="icon">home</span>
				</a>
			</div>
		</div>
	</div>

	

	<!-- js -->
	<script src="/js/jquery.min.js"></script>
	<script src="/js/base.min.js"></script>
</body>
</html>