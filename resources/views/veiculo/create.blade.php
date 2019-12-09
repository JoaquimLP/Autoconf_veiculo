@extends('layout.template')
@section('body')
    @include('veiculo.partials._form') 
    
@endsection 
@push('scripts')
    <script>
        $(document).ready(function(){
            $('[name=placa]').mask('SSS-0A00');
        
            $('[name=marca]').on('change', function(){
            $.ajax({
                type: 'post',
                url: '{{ route("modelo.search") }}',
                dataType: "json",
                data: { marca: $('[name=marca]').val() },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data){
                    var $el = $('[name=modelo]');
                    $el.empty();
                    $el.append($("<option></option>").attr("value", 0).attr('selected','').text('Modelo'));
                    $.each(data, function(value, key) {
                        $el.append($("<option></option>").attr("value", key.id).text(key.nome));
                    });
                    @if($errors->any())
                        $('[name=modelo]').val('{{ old('modelo') }}');
                    @endif
                }
            });
        })
        @if($errors->any())
            $('[name=marca]').trigger('change');
        @endif
        
        
    });
    </script>
@endpush  