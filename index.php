<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8">
	<title>在线实用小工具</title>
	<meta name="renderer" content="webkit">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="//cdn.staticfile.org/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
</head>

<body>

	<h1 class="m-3 text-center">在线实用小工具</h1>

	<hr />
	
	<div class="container" id="app">

		<blockquote class="blockquote">实用工具</blockquote>

		<div class="card-deck">
			<div class="card">
				<a href="/urlshort"><img class="card-img-top" src="/project/bubble.png"></a>
				<div class="card-body">
					<h5 class="card-title"><a href="/urlshort">URL Short</a></h5>
					<p class="card-text">基于微博的短网址生成</p>
				</div>
			</div>

			<div class="card">
				<a href="/vnote"><img class="card-img-top" src="/project/bubble.png"></a>
				<div class="card-body">
					<h5 class="card-title"><a href="/vnote">VNote Reader</a></h5>
					<p class="card-text">.vnt 格式文件在线读取器</p>
				</div>
			</div>

			<div class="card">
				<a href="/time-task"><img class="card-img-top" src="/project/bubble.png"></a>
				<div class="card-body">
					<h5 class="card-title"><a href="/time-task">time-task</a></h5>
					<p class="card-text">基于 Web 的 URL 定时请求</p>
				</div>
			</div>

			<div class="card">
				<a href="/entities"><img class="card-img-top" src="/project/bubble.png"></a>
				<div class="card-body">
					<h5 class="card-title"><a href="/entities">Entity Conversion Calculator</a></h5>
					<p class="card-text">JS / CSS 实体符号转换工具</p>
				</div>
			</div>

			<div class="card">
				<a href="/mixcolor"><img class="card-img-top" src="/project/bubble.png"></a>
				<div class="card-body">
					<h5 class="card-title"><a href="/mixcolor">Mix Color</a></h5>
					<p class="card-text">App / Web 颜色设计配色工具</p>
				</div>
			</div>
		</div>

		<hr />

		<blockquote class="blockquote">开源项目</blockquote>

		<div class="card-deck">
			<div class="card">
				<a href="/hybrid"><img class="card-img-top" src="/project/bubble.png"></a>
				<div class="card-body">
					<h5 class="card-title">Hybrid.js</h5>
					<p class="card-text">整合文件上传，表单提交，Ajax 处理，模板引擎</p>
				</div>
			</div>

			<div class="card">
				<a href="/magick"><img class="card-img-top" src="/project/bubble.png"></a>
				<div class="card-body">
					<h5 class="card-title">Magick.js</h5>
					<p class="card-text">图片预处理组件，支持压缩、裁切与异步上传</p>
				</div>
			</div>

			<div class="card">
				<a href="/upload"><img class="card-img-top" src="/project/bubble.png"></a>
				<div class="card-body">
					<h5 class="card-title">Upload.js</h5>
					<p class="card-text">文件上传组件，支持多文件，多视图显示</p>
				</div>
			</div>
		</div>

		<hr />

		<blockquote class="blockquote">笔记文档</blockquote>

		<div class="card mb-3">
			<div class="card-body">
			
			<?php
			$base = './../notes/';
			$list = glob( $base.'*.md' );

			foreach( $list as $k => $v ){
				echo '<a class="btn btn-sm btn-light m-1" href="'. basename( $v ) .'" role="button">'. basename($v, '.md') .'</a>';
			}
			?>

			</div>
		</div>

	</div>

	<hr />

	<footer>
		<p class="text-center"><i>Powered by <a href="http://www.veryide.com/" target="_blank">VeryIDE</a></i></p>
	</footer>

	<script src="/project/app.js"></script>
	
</body>
</html>