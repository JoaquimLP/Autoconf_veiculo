@if(empty($loja))
    <form action="{{route('loja.store')}}" method="post">
    @method('POST')
@else
    <form action="{{route('loja.update', $loja->id)}}" method="post">
    @method('PUT')
@endif
    @csrf
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="_nome">Loja</label>
            <input class="text-uppercase form-control @if($errors->{$errorBag}->has('nome')) is-invalid @endif" type="text" name="nome" id="_nome" value="{{old('nome', !empty($loja->nome) ? $loja->nome : '')}}">
            @if($errors->{$errorBag}->has('nome'))
                <div class="invalid-feedback"> {{$errors->{$errorBag}->first('nome')}}</div>
            @endif
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="_cnpj">CNPJ</label>
            <input class="text-uppercase form-control @if($errors->{$errorBag}->has('cnpj')) is-invalid @endif" type="text" name="cnpj" id="_cnpj" value="{{old('cnpj', !empty($loja->cnpj) ? $loja->cnpj : '')}}">
            @if($errors->{$errorBag}->has('cnpj'))
                <div class="invalid-feedback"> {{  $errors->{$errorBag}->first('cnpj') }}</div>
            @endif
        </div>
    </div>
    <div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
</form>  