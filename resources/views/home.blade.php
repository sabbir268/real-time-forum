<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}} ">
</head>
<body>
	<div id="app">
		<v-app>
			<app-home></app-home>
		</v-app>
	</div>

	<script src="{{asset('js/app.js')}} "></script>
</body>
</html>

