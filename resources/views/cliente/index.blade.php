@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Lista de clientes</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    @foreach($clientes as $cliente)
                    <li>{{$cliente->nome}}</li>
                    @endforeach

                    <table class="table table-border">
                    </table>
                    <div align="center">
                        {!! $clientes->links()  !!}
                    </div>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
