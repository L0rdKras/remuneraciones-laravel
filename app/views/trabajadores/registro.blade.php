@extends('layout')
@section('content')
	<div class="container" style="padding-top: 35px;">
		<div class="row">
			<div class="col-md-6">
				<h1>Registrar Empleado {{$empresa->nombre}}</h1>

				{{ Form::open(['route' => ['guardar_trabajador',$empresa->slug,$empresa->id], 'method' => 'POST', 'role' => 'form'])}}
				{{ Form::hidden('empresa_id',$empresa->id)}}
				<div class="form-group">
					{{ Form::label('nombre','Nombre')}}
					{{ Form::text('nombre', null ,[ 'class' => 'form-control' ]) }}
					{{ $errors->first('nombre')}}
				</div>
				<div class="form-group">
					{{ Form::label('email','Correo')}}
					{{ Form::email('email', null ,[ 'class' => 'form-control' ]) }}
					{{ $errors->first('email')}}
				</div>
				<div class="form-group">
					{{ Form::label('sueldo_base','Sueldo Base')}}
					{{ Form::text('sueldo_base', null ,[ 'class' => 'form-control' ]) }}
					{{ $errors->first('sueldo_base')}}
				</div>

				<p><input type="submit" value="Guardar" class="btn btn-success"></p>
				{{ Form::close() }}
			</div>
		</div>
	</div> <!-- /container -->
@endsection