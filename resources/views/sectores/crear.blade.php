@extends('layouts/default')
@section('content')

@section('title')  @parent Agregar Sector Comercial @stop
@section('titulo') @parent Agregar Sector Comercial @stop

<div class="box-body crear">
	{!! Form::open(array('action' => 'SectorController@store')) !!}
		<div class="row">
			<div class="form-group">
                <input type="text" name="sector" id="sector" class="form-control input-lg" placeholder="Sector" tabindex="1" value="{{old('sector')}}" required>
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
		    <hr>
		@endif			
		<div class="row">
			<input type="submit" value="Agregar" class="btn btn-success">
		</div>		
	{!! Form::close() !!}
 </div>

<script>
	$('form').preventDoubleSubmission();
</script>
<!-- Finaliza el render de la pagina -->
@stop