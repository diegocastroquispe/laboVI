@extends('admin')
@section('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Citas
			<a href="" data-target="#modal-create" data-toggle="modal">
				<button class="btn btn-success">Nuevo</button>
		    </a>
		</h3>		
	</div>
</div>
@include('citas.search')
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Id</th>
                    <th>Id_Paciente</th>
                    <th>Id_Doctor</th>
					<th>Nombre Paciente</th>
					<th>Nombre Doctor</th>
					<th>fecha</th>					
				</thead>

                @foreach ($citas as $cita)
				<tr>
					<td>{{ $cita->id }}</td>
                    <td>{{ $cita->Paciente->id }}</td>
                    <td>{{ $cita->Doctor->id }}</td>
					<td>{{ $cita->nombre_completo_paciente}}</td>
                    <td>{{ $cita->nombre_completo_doctor}}</td>
					<td>{{ $cita->date_of_birth }}</td>  
					
					<td>
					<a href="" data-target="#modal-show-{{$cita->id}}" data-toggle="modal">
							<button class="btn btn-success">Ver</button>
						</a>
						<a href="" data-target="#modal-edit-{{$cita->id}}" data-toggle="modal">
							<button class="btn btn-info">Editar</button>
						</a>
                        <a href="" data-target="#modal-delete-{{$cita->id}}" data-toggle="modal">
							<button class="btn btn-danger">Eliminar</button>
						</a>
					</td>
				</tr>
				@include('citas.delete')
				@include('citas.edit')
				@include('citas.show')
				@endforeach
			</table>
			@include('citas.create')
			
		</div>
		{{$citas->render()}}
	</div>
</div>

@endsection


