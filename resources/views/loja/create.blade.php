@extends('layout.template')
@section('body')
    @include('includes.alert')
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
                    //async: false,
                    data: {cep: $('[name=cep]').val()},
                    //contentType: "application/json",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data){
                        var $el = $('[name=estado]');
                        //var data = JSON.parse(JSON.stringify(data));
                        console.log(data.nome);
                        if (data != 0) {
                            $('[name=estado]').val(data.nome);
                        } else {
                            $('[name=estado]').val('Teste');
                        }
                        
                    }
                });
                $.ajax({
                    type: 'post',
                    url: '{{ route("endereco.cidade.search") }}',
                    dataType: 'json',
                    //async: false,
                    data: {cep: $('[name=cep]').val()},
                    //contentType: "application/json",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data){
                        var $el = $('[name=cidade]');
                        //var data = JSON.parse(JSON.stringify(data));
                        console.log(data.nome);
                        $('[name=cidade]').val(data.nome);
                    }
                });
                $.ajax({
                    type: 'post',
                    url: '{{ route("endereco.bairro.search") }}',
                    dataType: 'json',
                    //async: false,
                    data: {cep: $('[name=cep]').val()},
                    //contentType: "application/json",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data){
                        var $el = $('[name=bairro]');
                        //var data = JSON.parse(JSON.stringify(data));
                        console.log(data);
                        $('[name=bairro]').val(data.nome);
                    }
                });
                $.ajax({
                    type: 'post',
                    url: '{{ route("endereco.search") }}',
                    dataType: 'json',
                    //async: false,
                    data: {cep: $('[name=cep]').val()},
                    //contentType: "application/json",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data){
                        var $el = $('[name=endereco]');
                        //var data = JSON.parse(JSON.stringify(data));
                        //console.log(data.logadora);
                        $('[name=endereco]').val(data.logradoura);
                    }
                });
            })
        });
    </script>
@endpush  