@extends('layouts/default')
@section('content')

@section('title')
@parent
 ¡ Registro de Datos !
@stop



<div class="container">

<div class="row">

    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">

		<form role="form" method="POST" action="formulario">
			{!! csrf_field() !!}
			<h2>Registro de Datos</h2>
			<hr>

			<div class="row">
				<div class="form-group">
				  <input list="tipoComercio" name="tipoComercio" placeholder="Tipo de Comercio" class="form-control input-lg">
				  <datalist id="tipoComercio">
				  	<option value="Hoteles">
				    <option value="Calzado">
				    <option value="Ropa">
				    <option value="Celulares">
				    <option value="Muebles">
				    <option value="Restaurantes">
				    <option value="Bares">
				    <option value="Odontología">
				    <option value="Centro médico">
				    <option value="Opticas">
				    <option value="Veterinarias">
				    <option value="Peluquería">
				    <option value="Gimnacio">
				    <option value="Colegio">
				    <option value="Variedades">
				    <option value="Repuestos">
				    <option value="Droguerías">
				    <option value="Laboratorio Clínicos">
				    <option value="Agencia de Viajes">
				    <option value="Construcón">
				    <option value="Super Mercado">
				    <option value="Tienda de Mascotas">
				    <option value="Servicios">
				    <option value="Persona natural">
				  </datalist>
				</div>
			</div>		
			<div class="row">
				<div class="form-group">
	                <input type="text" name="empresa" id="empresa" class="form-control input-lg" placeholder="Empresa" tabindex="1">
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="display_name" id="display_name" class="form-control input-lg" placeholder="Persona encargada" tabindex="3">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="number" name="cargo" id="cargo" class="form-control input-lg" placeholder="Cargo" tabindex="6">
					</div>
				</div>
			</div>			

			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<select name="localidad" id="localidad" required="" class="form-control input-lg" >
		                    <option value="">Loalidad</option>
		                    <option value="Alto">Bosa</option>
		                    <option value="Medio">Chapinero</option>
		                    <option value="Bajo">Bajo</option>
	                  	</select>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="direccion" id="direccion" class="form-control input-lg" placeholder="Dirección" tabindex="6">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control input-lg" placeholder="Email" tabindex="4">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="celular" id="celular" class="form-control input-lg" placeholder="Celular" tabindex="6">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="tel" name="telefono" id="telefono" class="form-control input-lg" placeholder="Teléfono" tabindex="5">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="number" name="extension" id="extension" class="form-control input-lg" placeholder="Extensión" tabindex="6">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<div class="form-group">
						<select name="nivelInteres" id="nivelInteres" required="" class="form-control input-lg" >
		                    <option value="">Nivel de Interés</option>
		                    <option value="Alto">Alto</option>
		                    <option value="Medio">Medio</option>
		                    <option value="Bajo">Bajo</option>
	                  	</select>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<select name="nivelInteres" id="nivelInteres" required="" class="form-control input-lg" >
		                    <option value="">Mensaje</option>
		                    <option value="app">Envíar portafolio por correo</option>
		                    <option value="app">Envìar cotización por correo</option>
		                    <option value="app">Nosotros le escribimos o lo llamamos luego</option>
		                    <option value="app">Volver cuando este el dueño</option>
		                    <option value="app">Muy costoso</option>
		                    <option value="app">En el monento no me interesa</option>
		                    <option value="app">Llamar luego</option>
	                  	</select>
					</div>					
					</div>
				</div>
			<div class="row">
				<div class="form-group">
					<select name="nivelInteres" id="nivelInteres" required="" class="form-control input-lg" >
	                    <option value="">Servicio de Interés</option>

	                    <optgroup label="Desarrollo Web">
		                    <option value="basico">Plan Básico</option>
		                    <option value="Intermedio">Plan Intermedio</option>
		                    <option value="Tienda">Plan Tienda Virtual</option>
		                    <option value="Medida">Plan A la medida</option>
		                    <option value="Micro Sitio">Micro Sitio</option>
		                </optgroup>

		                <option value="app">Aplicación Móbil</option>
		                <option value="Posicionamiento">Posicionamiento</option>
		                <option value="video">Vídeo</option>
		                <option value="animacion">Animación</option>
		                <option value="diseno">Diseño</option>
		                <option value="promocionales">Promocionales</option>
		                <option value="otro">Redes Sociales</option>
		                <option value="otro">Otro</option>
		                <option value="otro">Ninguno</option>
                  	</select>
				</div>
			</div>				
			<div class="row">
				<div class="form-group">
					<textarea name="observaciones" class="form-control input-lg" id="observaciones" placeholder="Observaciones"></textarea>
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
				<input type="submit" value="Registrar" class="btn btn-success btn-block btn-lg" tabindex="7">
				</div>
			</div>
		</form>
	</div>
</div>

</div>
<hr>

<!-- Finaliza el render de la pagina -->
@stop