<?php /*
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>{{$pruaba->category->name}}</title>
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>

<br>
	<h1>
		{{$prueba->title}}	
	</h1>
<br>
<hr>
<p>	
{{$prueba->content}}
</p>
<hr>
<blockquote>
	
		Periodista: {{$prueba->user->name}} | Categoria: {{$prueba->category->name}} 
		<br>
		@foreach($prueba->tags as $tag)
		{{$tag->name}}
		@endforeach
		
		<br>
</blockquote>

<h3>
@for($i=0;$i<=5;$i++)
	@if($i==3)
	{{$i}}
	@endif
@endfor	
</h3>

</body>
</html>
*/?>
@extends('layouts/default')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					You are using bootstrap
					<br>
					{{$prueba->title}}
				</div>
			</div>
		</div>
	</div>
<br>
</div>

@endsection
