@extends('layout-app.base')

@section('tittle','Agregar categoría')

@section('content')
	<div class="col-md-6 col-md-offset-3">
		<h1>Adicionar categoría</h1>
		<hr>
		<ul class="breadcrumb">
			<li><a href="{{ url('category')}}">Listar categorias</a></li>
			<li class="active">Adicionar Categoria</li>
		</ul>
		<form action="{{ url('category') }}"" method="post">
			<div class="form-group">
				{!! csrf_field()!!}
				<input type="text" name="name" class="form-control" placeholder="Nombre">
			</div>
			<div class="form-group">
				<button class="btn btn-success" type="submit">
					<i class="glyphicon glyphicon-send"></i> Guardar
				</button>
			</div>
		</form>
	</div>