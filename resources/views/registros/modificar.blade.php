@extends('layouts/default')
@section('content')

@section('title')  @parent Modificar Registro @stop
@section('titulo') @parent Modificar Registro @stop

<div class="box-body crear">
	{!! Form::model($registro, array('route' => array('registro.update', $registro->id), 'method' => 'PUT')) !!}

	<div class="row">
		<div class="form-group">
			<select name="tipoComercio" id="tipoComercio" required="" class="form-control input-lg" tabindex="1">
                <option value="">Tipo de Comercio</option>
                @foreach($sectores as $sector)

                    @if($sector->id == $registro->sector_id )
                    	<option selected value="{{$sector->id}}">{{$sector->sector}}</option>
                    @else
                    	<option value="{{$sector->id}}">{{$sector->sector}}</option>
                    @endif

                @endforeach
          	</select>
		</div>
	</div>		
	<div class="row">
		<div class="form-group">
            <input type="text" name="empresa" id="empresa" class="form-control input-lg" placeholder="Empresa" tabindex="2" value="{{ $registro->empresa }}" >
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-6">
			<div class="form-group">
				<input type="text" name="encargado" id="encargado" class="form-control input-lg" placeholder="Persona encargada" tabindex="3" value="{{ $registro->encargado }}">
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6">
			<div class="form-group">
				<input type="text" name="cargo" id="cargo" class="form-control input-lg" placeholder="Cargo" tabindex="4" value="{{ $registro->cargo }}">
			</div>
		</div>
	</div>			

	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-6">
			<div class="form-group">
				<select name="localidad" id="localidad" required="" class="form-control input-lg" tabindex="5">
                    <option value="">Loalidad</option>
                    @foreach($localidad as $localidad)
                    	@if($localidad == $registro->localidad)
							<option selected value="{{$localidad}}">{{$localidad}}</option>
                    	@else
                    		<option value="{{$localidad}}">{{$localidad}}</option>
                    	@endif
                    @endforeach
              	</select>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6">
			<div class="form-group">
			<input type="text" name="barrio" id="barrio" class="form-control input-lg" placeholder="Barrio" tabindex="6" value="{{ $registro->barrio }}">
			</div>
		</div>				

	</div>

	<div class="row">
		<div class="form-group">
			<input type="text" name="direccion" id="direccion" class="form-control input-lg" placeholder="Dirección" tabindex="7" value="{{ $registro->direccion }}">
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-6">
			<div class="form-group">
				<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email" tabindex="8" value="{{ $registro->email }}">
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6">
			<div class="form-group">
				<input type="text" name="celular" id="celular" class="form-control input-lg" placeholder="Celular" tabindex="9" value="{{ $registro->celular }}" >
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-6">
			<div class="form-group">
				<input type="tel" name="telefono" id="telefono" class="form-control input-lg" placeholder="Teléfono" tabindex="10" value="{{ $registro->telefono }}">
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6">
			<div class="form-group">
				<input type="number" name="extension" id="extension" class="form-control input-lg" placeholder="Extensión" tabindex="11" value="{{ $registro->extension }}">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-6">
			<div class="form-group">
				<div class="form-group">
				<select name="nivelInteres" id="nivelInteres" required="" class="form-control input-lg" tabindex="12">
                    <option value="">Nivel de Interés</option>
                    @foreach($nivel_interes as $interes)
                    	@if($interes == $registro->nivel_interes)
							<option selected value="{{$interes}}">{{$interes}}</option>
                    	@else
                    		<option value="{{$interes}}">{{$interes}}</option>
                    	@endif
                    @endforeach
              	</select>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6">
			<div class="form-group">
				<select name="mensaje" id="mensaje" required="" class="form-control input-lg" tabindex="13">

                    @foreach($mensajes as $mensaje)
                    	@if($mensaje == $registro->mensaje)
							<option selected value="{{$mensaje}}">{{$mensaje}}</option>
                    	@else
                    		<option value="{{$mensaje}}">{{$mensaje}}</option>
                    	@endif
                    @endforeach		                    

              	</select>
			</div>					
			</div>
		</div>
	<div class="row">
		<div class="form-group">
			<select name="servicioInteres" id="servicioInteres" required="" class="form-control input-lg" tabindex="14">

			@foreach($productos as $producto)

                @if($producto->id == $registro->producto_id )
                	<option selected value="{{$producto->id}}">{{$producto->plan}}</option>
                @else
                	<option value="{{$producto->id}}">{{$producto->plan}}</option>
                @endif	

             @endforeach

          	</select>
		</div>
	</div>				
	<div class="row">
		<div class="form-group">
			<textarea name="observaciones" class="form-control input-lg" id="observaciones" placeholder="Observaciones" tabindex="15">{{ $registro->observaciones }}</textarea>
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
		<input type="submit" value="Registrar" class="btn btn-success btn-block btn-lg" tabindex="15">
		</div>
	</div>
{!! Form::close() !!}

</div>
<hr>
<script>
	$('form').preventDoubleSubmission();
</script>

<!-- Finaliza el render de la pagina -->
@stop