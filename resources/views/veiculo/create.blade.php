@extends('layout.template')
@section('body')
    @include('veiculo.partials._form') 
    
@endsection 
@push('scripts')
    <script>
        $(document).ready(function(){
            $('[name=placa]').mask('AAA-9S99');
        });
    </script>
@endpush  