@extends('layouts.app')
@section('content')
<div class="container text-center">
	<div class="page-header">
		<h1>Dependencias 
		<a href="{{ url('admin/dependencias/create')}}" class="btn btn-primary">Agregar dependencia</a>

            <form href="{{route('admin.dependencias.index')}}" class="navbar-form navbar-left pull-right" role="search"  method="GET">
                    <div class="form-group">
                        <input class="form-control" name="name" type="text" placeholder="Ingresa la dependencia..." required="" >
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
					<th>Dependencia</th>
					<th>UUID</th>
					<th>Modificar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($dependencia as $info_dep): ?>
				<tr>
					<td>{{ $info_dep-> dependencia}}</td>
					<td>{{ $info_dep-> uuid}}</td>
					<td>
						<a href="{{ route('admin.dependencias.edit', $info_dep) }}" class="btn btn-primary">Modificar</a>
					</td>
					<td>
						{!! Form::open(['route' => ['admin.dependencias.destroy', $info_dep]]) !!}
        								<input type="hidden" name="_method" value="DELETE">
        								<button onClick="return confirm('¡Estas seguro de eliminar la Dependencia?')" class="btn btn-danger">
        									Eliminar
        								</button>
        				{!! Form::close() !!}
					</td>
				</tr>
				<?php endforeach ?>
			</tbody>
		</table>

	</div>
	 <?php echo $dependencia->render(); ?>
	</div>
</div>

@endsection