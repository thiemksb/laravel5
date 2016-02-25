<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tran van thiem</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('public/css/bootstrap.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('public/css/style.css') }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<header>
<nav class="navbar navbar-inverse" style="border-radius: 0px;">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Thiêm Trần</a>
    </div>
    <ul class="nav navbar-nav">
    <li class="active"><a href="#">Home</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">Contact</a></li>asdasd
    <li><a href="#">Page 3</a></lisdfasd>
    </ul>
  </div>
</nav>
</header>
<main>
<div class="container">

@foreach($articles as $data)
  <div class="post">
    <h2>{{ $data->title }}</h2>
    <img src="{{ $data->image }}" width="150" height="150">
    <p>{{ $data->descript}}</p>
    <p><a href="">Readmore</a></p>
    <p class="clear"></p>
  </div>
@endforeach

</div>
</main>
<footer>
<h4 class="container text-center" style="padding: 10px; border-top:1px solid gray;">Wrote by Thiêm Trần</h4>
</footer>
<script type="text/javascript" src="{{ asset('public/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/js/jquery.min.js') }}"></script>
</body>
</html>