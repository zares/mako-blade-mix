<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Mako {{mako\Mako::VERSION}}</title>
		<style>
			body
			{
				background: #eee;
				font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
				font-weight: bold;
				padding:0px;
				margin:0px;
			}
			a
			{
				color: #03C5A0;
				text-decoration: none;
			}
			a:hover
			{
				color: #067761;
			}
			.welcome
			{
				text-align: center;
				top: 50%;
				left: 50%;
				position: absolute;
				transform: translate(-50%, -50%);
				background-color: #F4F4F4;
				padding: 15px 25px;
			}
			.mako
			{
				font-size: 60px;
			}
		</style>
		<link rel="stylesheet" type="text/css" href="{{ mix('/assets/css/style.css') }}">
	</head>
	<body>
		<div class="welcome">
			<span class="mako">
				<a title="Head over to the documentation" href="https://makoframework.com/docs">{{ $title }}</a>
			</span>
		</div>
		<script src="{{ mix('/assets/js/app.js') }}"></script>
	</body>
</html>
