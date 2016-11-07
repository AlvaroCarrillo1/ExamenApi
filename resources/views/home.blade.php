@extends('layouts.app')

@section('content')
<div class="container text-center">
        <div class="page-header">
            <h1> TCADF - Panel de Administración</h1>
        </div>
        
        <div class="row">
            
        <div class="col-md-6">
                <div class="panel">
                    <a href="{{url('admin/autoridades') }}" class="btn btn-primary btn-block">Autoridades</a>
                </div>
            </div> 

            <div class="col-md-6">
                <div class="panel">
                    <a href="{{url('admin/dependencias') }}" class="btn btn-primary btn-block">Dependencias</a>
                </div>
            </div>                           
        </div>        
    </div>
    <hr>
@endsection
