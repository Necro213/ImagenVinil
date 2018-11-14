@extends('layout.clientes')

@section('content')


    @include('cliente.index.productos')

    @if($promociones == null)

        @else
        @include('cliente.index.promociones')
    @endif

    @include('cliente.index.conocenos')

    @include('cliente.index.contacto')

@endsection

@section('scripts')
    <script src="js/custom.js"></script>
@endsection