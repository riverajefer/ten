@extends('layouts/default')
@section('content')

@section('title')
@parent
 ¡ Detalles !
@stop

<div class="container">
	<div class="row">
		<h2>Detalles</h2>
		<div class="list-group">

		  <a href="#" class="list-group-item"> 
		  	<i class="fa fa-cubes"></i> <strong>Sector: </strong> 
			@if ($registro->sector)
				{{$registro->sector->sector}}
			@else
				No Asignado
			@endif
		  </a>
		  <a href="#" class="list-group-item"> 
		  	<i class="fa fa-cube"></i> <strong>Empresa: </strong> 
		  	{{$registro->empresa}}
		  </a>
		  <a href="#" class="list-group-item"> 
		  	<i class="fa fa-user"></i> <strong>Persona encargada: </strong> 
		  	{{$registro->encargado}}
		  </a>
		  <a href="#" class="list-group-item"> 
		  	<i class="fa fa-user-secret"></i> <strong>Cargo: </strong> 
		  	{{$registro->cargo}}
		  </a>	
		  <a href="#" class="list-group-item"> 
		  	<i class="fa fa-map-o"></i> <strong>Localidad: </strong> 
		  	{{$registro->localidad}}
		  </a>			  	  
		  <a href="#" class="list-group-item"> 
		  	<i class="fa fa-map-marker"></i> <strong>Barrio: </strong> 
		  	{{$registro->barrio}}
		  </a>	
		  <a href="#" class="list-group-item"> 
		  	<i class="fa fa-street-view"></i> <strong>Dirección: </strong> 
		  	{{$registro->direccion}}
		  </a>	
		  <a href="#" class="list-group-item"> 
		  	<i class="fa fa-envelope"></i> <strong>Email: </strong> 
		  	{{$registro->email}}
		  </a>
		  <a href="#" class="list-group-item"> 
		  	<i class="fa fa-mobile"></i> <strong>Celular: </strong> 
		  	{{$registro->celular}}
		  </a>
		  <a href="#" class="list-group-item"> 
		  	<i class="fa fa-phone"></i> <strong>Teléfono: </strong> 
		  	{{$registro->telefono}}
		  </a>
		  <a href="#" class="list-group-item"> 
		  	<i class="fa fa-phone"></i> <strong>Extensión: </strong> 
		  	{{$registro->extension}}
		  </a>
		  <a href="#" class="list-group-item"> 
		  	<i class="fa fa-signal"></i> <strong>Nivel de Interés: </strong> 
		  	{{$registro->nivel_interes}}
		  </a>	
		  <a href="#" class="list-group-item"> 
		  	<i class="fa fa-comment-o"></i> <strong>Mensaje: </strong> 
		  	{{$registro->mensaje}}
		  </a>
		  <a href="#" class="list-group-item"> 
		  	<i class="fa fa-database"></i> <strong>Servicio de Interés: </strong> 
		  	{{$registro->servicio_interes}}
		  </a>
		  <a href="#" class="list-group-item"> 
		  	<i class="fa fa-commenting"></i> <strong>Observaciones: </strong> 
		  	{{$registro->observaciones}}
		  </a>		  		  
		</div>		

	</div>
</div>


<hr>
<!-- Finaliza el render de la pagina -->
@stop