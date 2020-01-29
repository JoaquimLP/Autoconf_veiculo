@extends('layout.template')
@section('body')
    @include('loja.partials._form', ['errorBag' => 'LojaStore']) 
@endsection
@push('scripts')
    <script>
        $(document).ready(function(){	
            $("#_cnpj").mask("99.999.999/9999-99");
            $('#_cep').mask('99999-999');
            $(document).on('change','#_cep', function(e){
                $.ajax({
                    type: 'post',
                    url: '{{ route("endereco.estado.search") }}',
                    dataType: 'jsonp',
                    crossDomain: true,
                    contentType: "application/json",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data){
                        var $el = $('[name=estado');
                        $("input[name=estado]").val(json.estados);
                    }
                });
            })
        });
    </script>
@endpush  