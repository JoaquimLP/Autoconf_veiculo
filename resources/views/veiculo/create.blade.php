@extends('layout.template')
@section('body')
    @include('veiculo.partials._form') 
    
@endsection 
@push('scripts')
    <script>
        $(document).ready(function(){
            $('[name=placa]').mask('SSS-0A00');
        });
    </script>
@endpush  