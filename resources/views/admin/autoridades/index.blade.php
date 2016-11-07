@extends('layouts.app')
@section('content')
<div class="container text-center">
	<div class="page-header">
		<h1>Autoridades 
		<a href="{{ url('admin/autoridades/create')}}" class="btn btn-primary">Agregar autoridad</a>

            <form href="{{route('admin.autoridades.index')}}" class="navbar-form navbar-left pull-right" role="search"  method="GET">
                    <div class="form-group">
                        <input class="form-control" name="name" type="text" placeholder="Ingresa la autoridad..." required="" >
                    </div>
                    <button type="submit" class="btn btn-default">Buscar</button>
                </form>


		</h1>
	</div>
	<div class="page">
	<div class="table-responsive">
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<tr>
					  	<th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>E-mail</th>
                        <th>Dependencia</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($autoridad as $info_autoridad): ?>
				<tr>
					<td>{{ $info_autoridad-> nombre}}</td>
					<td>{{ $info_autoridad-> ap_paterno}}</td>
					<td>{{ $info_autoridad-> ap_materno}}</td>
                    <td>{{ $info_autoridad-> email}}</td>
                    <td>{{ $info_autoridad-> dependencia_id }}</td>
					<td>
						<a href="{{route('admin.autoridades.edit', $info_autoridad)}}" class="btn btn-primary">Modificar</a>
					</td>
					<td>
						 {!! Form::open(['route' => ['admin.autoridades.destroy', $info_autoridad]]) !!}
        								<input type="hidden" name="_method" value="DELETE">
        								<button onClick="return confirm('Eliminar registro?')" class="btn btn-danger">
        									Eliminar
        								</button>
        				  {!! Form::close() !!}
        							
					</td>
				</tr>
				<?php endforeach ?>
			</tbody>
		</table>

	</div>
	 <?php echo $autoridad->render(); ?>
	</div>
</div>

@endsection