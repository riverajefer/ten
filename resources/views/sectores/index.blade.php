@extends('layouts/default')
@section('content')

@section('title')  @parent Sectores Comerciales @stop
@section('titulo') @parent Sectores Comerciales @stop

<div class="box-header">
  <h3 class="box-title">Lista de Registros</h3>
</div>

<div align="center">
	<a class="btn btn-success" href="{{URL::to('sector/create')}}"><i class="fa fa-plus"></i> Agregar</a>	
</div>

<div class="box-body">		
	<table id="tabla" class="table table-striped table-hover table-bordered" >
		<thead>
			<tr>
				<th>No</th>
				<th width="70%">Sector</th>
				<th>Modificar</th>
				<th>Eliminar</th>
			</tr>
		</thead>
		<tbody>
			@foreach($sectores as $key => $sector)
				<tr>
					<td>{{$key+1}}</td>
					<td>{{$sector->sector}}</td>
					<td>
						<a href="{{url('sector/'.$sector->id.'/edit')}}" class="btn btn-xs btn-primary">
							<i class="fa fa-pencil-square-o"></i> Modificar
						</a>
					</td>
					<td>
	                {!! Form::open(array('url' => 'sector/' . $sector->id,  'class' => 'pull-right' )) !!}
	                    {!! Form::hidden('_method', 'DELETE') !!}
	                    <button class="btn btn-xs btn-danger click_delete"><i class="fa fa-times"></i> Eliminar </button>
	                {!! Form::close() !!}
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>


<script>
	$( ".pull-right" ).submit(function( event ) {
	    var r = confirm("Desea eliminar el registro");
	    if (r == true) {
	        return
	    } else {
	        event.preventDefault();
	    }	  
	});

    $(function () {
        $('#tabla').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": true
        });
      });
    </script>
@stop