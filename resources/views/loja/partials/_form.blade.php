<form action="{{route('loja.store')}}" method="post">
    @method('POST')
    @csrf
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="_nome">Loja</label>
            <input class="text-uppercase form-control @if($errors->has('nome')) is-invalid @endif" type="text" name="nome" id="_nome" value="{{old('nome', '')}}">
            @if($errors->has('nome'))
            <div class="invalid-feedback"> {{$errors->first('nome')}}</div>
            @endif
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="_cnpj">CNPJ</label>
            <input class="text-uppercase form-control @if($errors->has('cnpj')) is-invalid @endif" type="text" name="cnpj" id="_cnpj" value="{{old('cnpj', '')}}">
            @if($errors->has('cnpj'))
                <div class="invalid-feedback"> {{  $errors->first('cnpj') }}</div>
            @endif
        </div>
    </div>
    <div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
</form>  