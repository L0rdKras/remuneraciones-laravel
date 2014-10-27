@extends('layout')
@section('content')
<div class="container" style="padding-top: 35px;">
	<h1>Listado Empresas</h1>

	<table class="table table-striped">
		<tr>
			<th>Rut</th>
			<th>Nombre</th>
			<th>Giro</th>
			<th>email</th>
			<th>Ver Empleados</th>
			<th>Eliminar</th>
		</tr>

	@foreach ($empresa as $la_empresa)
		<tr>
			<th>{{ $la_empresa->rut }}</th>
			<th>{{ $la_empresa->nombre }}</th>
			<th>{{ $la_empresa->giro }}</th>
			<th>{{ $la_empresa->email }}</th>
			<td width="50">
				<a href="{{ route('empresas', [$la_empresa->slug, $la_empresa->id]) }}" class="btn btn-info">
					Ver
				</a>
			</td>
			<th>Eliminar</th>
		</tr>
	@endforeach
		
	</table>
</div>
@endsection