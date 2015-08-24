@extends('layouts/default')
@section('content')

@section('title')  @parent Modificar Sector Comercial @stop
@section('titulo') @parent Modificar Sector Comercial @stop

<div class="box-body crear">
	{!! Form::model($sector, array('route' => array('sector.update', $sector->id), 'method' => 'PUT')) !!}
		<div class="row">
			<div class="form-group">
                <input type="text" name="sector" id="sector" class="form-control input-lg" placeholder="Sector" tabindex="1" value="{{$sector->sector}}">
			</div>	
		</div>
		<hr>
		@if (count($errors) > 0)
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif	
		<div class="row">
			<input type="submit" value="Modificar" class="btn btn-success">	
		</div>			
		
	{!! Form::close() !!}
</div>

<script>
	$('form').preventDoubleSubmission();
</script>
<!-- Finaliza el render de la pagina -->
@stop