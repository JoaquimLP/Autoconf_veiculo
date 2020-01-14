@extends('layout.template')
@section('body')
    @include('loja.partials._form', ['errorBag' => 'LojaStore']) 
@endsection
@push('scripts')
    <script>
        $(document).ready(function(){	
            $("#_cnpj").mask("99.999.999/9999-99");
        });
    </script>
@endpush  