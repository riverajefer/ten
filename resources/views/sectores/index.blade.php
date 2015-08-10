@extends('layouts/default')
@section('content')

@section('title')
@parent
 ¡ Sectores Comerciales !
@stop

<h1>Sectores Comerciales</h1>
<a href="{{URL::to('sector/create')}}">Agregar</a>
<!-- Finaliza el render de la pagina -->

<div class="container">
	<div class="row">
		<table class="table table-striped table-hover table-bordered">
			<thead>
				<th>No</th>
				<th width="70%">Sector</th>
				<th>Modificar</th>
				<th>Eliminar</th>
			</thead>
			<tbody>
				@foreach($sectores as $sector)
					<tr>
						<td>{{$sector->id}}</td>
						<td>{{$sector->sector}}</td>
						<td>
							<a href="{{url('sector/'.$sector->id.'/edit')}}" class="btn btn-sm btn-primary">
								Modificar
							</a>
						</td>
						<td>
							<a href="#" class="btn btn-sm btn-danger">Eliminar</a>
						</td>
					</tr>
				@endforeach
			</tbody>
			
		</table>
	</div>
</div>
@stop