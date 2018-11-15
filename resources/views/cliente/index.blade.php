@extends('layout.clientes')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/colaboradores.css')}}">
@endsection

@section('content')


    @include('cliente.index.productos')

    @if($promociones == null)

        @else
        @include('cliente.index.promociones')
    @endif

    @include('cliente.index.conocenos')

    @include('cliente.index.contacto')

    @include('cliente.index.colaboradores')

@endsection

@section('scripts')
    <script src="{{asset('js/cliente/colaboradores.js')}}"></script>
    <script src="js/custom.js"></script>
@endsection