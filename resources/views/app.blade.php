<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Develop Me: HTML & CSS</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
</head>
<body>
  <div class="container">
      @include("_partials/nav")
      @yield("title")
    <main class="mt-4">
        @yield("content")
    </main>
      @include("_partials/footer")          
 </div>
</body>
</html>