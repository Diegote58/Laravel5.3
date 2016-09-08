@extends('layouts.default')

@section('title','Crear Usuario')

@section('content')

	<div class="container">

	<div class="row">
	{!! Form::open(['route' => 'usuario.store','method' => 'POST'])!!}

		<div class="form-group  col-md-4">
			{!! Form::label('name','Nombre:')!!}
			{!! Form::text('name',null,['class' => 'form-control','placeholder' => 'Nombre Completo'],'required')!!}		
		</div>
		<div class="form-group  col-md-4">
			{!! Form::label('email','Correo Eléctronico:')!!}
			{!! Form::email('email',null,['class' => 'form-control','placeholder' => 'example@gmail.com'],'required')!!}		
		</div>
		<div class="form-group  col-md-2">
			{!! Form::label('password','Contraseña:')!!}

			{{--No se puede colocar valor por defecto NULL --}}

			{!! Form::password('password', ['class' => 'form-control'],'required') !!}		
		</div>
		<div class="form-group  col-md-2">
			{!! Form::label('Type','Tipo:')!!}

			{{--No se puede colocar valor por defecto NULL --}}

			{!! Form::select('type',['' => 'Seleccionar...','member' => 'Miembro','admin' => 'Administrador'],null, ['class' => 'form-control']) !!}		
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-12">
			{!! Form::Submit('Guardar',['class'=>'btn btn-primary center-block']) !!}
		</div>
	</div>

	{!! Form::close() !!}
</div>
@endsection