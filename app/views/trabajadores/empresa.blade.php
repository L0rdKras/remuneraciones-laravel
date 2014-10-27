@extends('layout')
@section('content')
<div class="container" style="padding-top: 35px;">
	<h1>{{ $empresa->nombre}}</h1>
	<a class="btn btn-success" href="{{ route('registro_trabajador', [$empresa->slug, $empresa->id]) }}"> +Empleados</a>
	<table class="table table-striped">
		<tr>
			<th>Nombre</th>
			<th>Cargo</th>
			<th>Sueldo Base</th>
			<th>email</th>
			<th>Ver</th>
			<th>Eliminar</th>
		</tr>

	@foreach ($empresa->trabajadores as $trabajador)
		<tr>
			<th>{{ $trabajador->nombre }}</th>
			<th>{{ $trabajador->cargo }}</th>
			<th>{{ $trabajador->sueldo_base }}</th>
			<th>{{ $trabajador->email }}</th>
			<td width="50">
				<a href="{{ route('trabajadores', [$trabajador->slug, $trabajador->id]) }}" class="btn btn-info">
					Ver
				</a>
			</td>
			<th>Eliminar</th>
		</tr>
	@endforeach
		
	</table>
</div>
@endsection