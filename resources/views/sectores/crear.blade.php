@extends('layouts/default')
@section('content')

@section('title')
@parent
 ¡ Sectores Comerciales !
@stop

<div class="container">
	<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">

		{!! Form::open(array('action' => 'SectorController@store')) !!}
			<h2>Agregar Sector</h2>
			<hr>
			<div class="row">
				<div class="form-group">
	                <input type="text" name="sector" id="sector" class="form-control input-lg" placeholder="Sector" tabindex="1" value="{{old('sector')}}">
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
				<div class="col-xs-12 col-md-offset-3 col-md-6">
				<input type="submit" value="Agregar" class="btn btn-success btn-block btn-lg" tabindex="7">
				</div>
			</div>			
		</form>
	 </div>
	</div>
</div>
<script>
	$('form').preventDoubleSubmission();
</script>
<!-- Finaliza el render de la pagina -->
@stop