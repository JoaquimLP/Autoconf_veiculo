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
                //var cep = $("input[name=cep]").val();
                $.ajax({
                    type: 'post',
                    url: '{{ route("endereco.estado.search") }}',
                    dataType: 'json',
                    //crossDomain: true,
                    data: {cep: $('[name=cep]').val()},
                    //contentType: "application/json",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data){
                        var $el = $('[name=estado]');
                        var estado = val(data);
                        console.log(estado);
                        $('[name=estado]').val(estado);
                    }
                });
            })
        });
    </script>
@endpush  