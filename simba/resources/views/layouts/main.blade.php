<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Navigation</title>
		<link rel="stylesheet" href="./css/tailwind.css">
        @vite('resources/css/app.css')

	</head>
	<body>
	@include('layouts.navbar')
		
    @yield('container')
	</body>
</html>