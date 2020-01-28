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
                console.log($(this).val());
                $.ajax({
                    url: '{{ route('') }}'',
                    dataType: 'jsonp',
                    crossDomain: true,
                    contentType: "application/json",
					success : function(json){
						if(json.logradouro){
							$("input[name=rua]").val(json.logradouro);
							$("input[name=bairro]").val(json.bairro);
							$("input[name=cidade]").val(json.cidade);
							$("input[name=uf]").val(json.estado);
						}
					}
			    });
            })
            
        });
    </script>
@endpush  