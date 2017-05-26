@extends('layout-app.base')
@section('tittle','Lista de Categorias')
@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1>Lista de Categorías</h1>
			<hr>
			<a href="{{url('category/create')}}" class="btn btn-success">
				<i class="glyphicon glyphicon-plus"></i> Adicionar
			</a>
			<hr>
			<table class="table table-striped table-bordered table-hover">
				<tr>
					<th>Id</th>
					<th>Nombre</th>
					<th>Acciones</th>
				</tr>
			@foreach($categories as $cat)
				<tr>
					<td>{{ $cat->id}}</td>
					<td>{{$cat->name }}</td>
					<td>
						<a href="{{url('category/'.$cat->id.'/edit')}}" class="btn btn-default">
							<i class="glyphicon glyphicon-pencil"></i>
						</a>
						<form action="{{url('category/'.$cat->id)}}" method="post" style="display: inline-block;">
							{{method_field('delete')}}
							{!! csrf_field()!!}
							<button type="button" class="btn btn-danger btn-delete">
								<i class="glyphicon glyphicon-trash"></i>
							</button>
						</form>
						
					</td>
				</tr>
			@endforeach	
			</table>
			
		</div>
	</div>
@endsection