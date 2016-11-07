@extends('layouts.app')

@section('content')
<div class="container text-center">
        <div class="page-header">
            <h1> Referencia API</h1>
        </div>
        
        <div class="container text-center">
        <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <th>Ruta</th>
            <th>Método</th>
            <th>Parametro</th>
            <th>Formato de respuesta</th>
            <th>Descripción</th>
          </thead>
          <tbody>
            <td>dependencia</td>
            <td>Ninguno</td>
            <td>GET</td>
            <td>JSON</td>
            <td>Trae todos los registros de las dependencias</td>
          </tbody>
          <tbody>
            <td>dependencia</td>
            <td>Ninguno</td>
            <td>POST</td>
            <td>JSON</td>
            <td>Registra una nueva dependencia</td>
          </tbody>
          <tbody>
            <td>dependencia/{uuid}</td>
            <td>uuid (texto)</td>
            <td>GET</td>
            <td>JSON</td>
            <td>Trae el registro asociado al parametro de la dependecia</td>
          </tbody>
      </table>
</div>
        </div> 
    </div>
    <hr>
@endsection
