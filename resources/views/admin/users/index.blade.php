@extends('layouts.default')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
@section('title','Listar Usuario')

@section('content')

<div class="container">

<div class="row">
	<a href="{{route('usuario.create')}}" class="btn btn-primary">Nuevo Usuario</a>
</div>
	@if (session('message'))
		<div class="alert alert-success alert-dismissible" role="alert">
 			 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  			<span aria-hidden="true">&times;</span></button>
  				<strong>
		         {{ session('message') }}
				</strong>
  		
		</div>
  	@endif
  
  		
  	
	<table class="table" id="users">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Mail</th>
			<th>Tipo</th>
		</thead>
{{--<tbody>
			@foreach($users as $us)

				<tr>
					<td>{{ $us->id }}</td>
					<td>{{ $us->name }}</td>
					<td>{{ $us->email }}</td>
					<td>
						@if($us->type == 'admin')	
						<span class="label label-danger">{{ $us->type }}</span>
						@else
						<span class="label label-warning">{{ $us->type }}</span>
						@endif
					</td>
					<td>
					<a href="#" class="btn btn-default">  </a>
					<a href="#" class="btn btn-primary">  </a>
					</td>
				</tr>
			@endforeach

		</tbody>
--}}		
	</table>
	
	</div>

@endsection