@extends('layout')
@section('content')
	<div class="container" style="padding-top: 35px;">
		<h1>{{ $trabajador->nombre }}</h1>
		<p>
		Empresa:
		<a href="{{ route('empresas', [$trabajador->empresa->slug, $trabajador->empresa->id]) }}">
		{{ $trabajador->empresa->nombre }}
		</a>
		</p>
		<p>Tipo de trabajo: {{ $trabajador->cargo }}</p>
		<p>
		Correo Electronico:
		<a href="mailto:{{ $trabajador->email }}">
		{{ $trabajador->email }}
		</a>
		</p>
		<h4>Sueldo Base</h4>
		<p>${{ $trabajador->sueldo_base }}</p>
		<p><button>Eliminar</button></p>
	</div> <!-- /container -->
@endsection