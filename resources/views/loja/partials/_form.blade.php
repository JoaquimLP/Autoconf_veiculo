@if(empty($loja))
    <form action="{{route('loja.store')}}" method="post">
    @method('POST')
@else
    <form action="{{route('loja.update', $loja->id)}}" method="post">
    @method('PUT')
@endif
    @csrf
    <div class="form-row mt-2">
        <div class="col-md-4 mb-3">
            <label for="_nome">Loja</label>
            <input class="form-control @if($errors->{$errorBag}->has('nome')) is-invalid @endif" type="text" name="nome" id="_nome" value="{{old('nome', !empty($loja->nome) ? $loja->nome : '')}}">
            @if($errors->{$errorBag}->has('nome'))
                <div class="invalid-feedback"> {{$errors->{$errorBag}->first('nome')}}</div>
            @endif
        </div>
        <div class="col-md-4 mb-3">
            <label for="_cnpj">CNPJ</label>
            <input class="form-control @if($errors->{$errorBag}->has('cnpj')) is-invalid @endif" type="text" name="cnpj" id="_cnpj" value="{{old('cnpj', !empty($loja->cnpj) ? $loja->cnpj : '')}}">
            @if($errors->{$errorBag}->has('cnpj'))
                <div class="invalid-feedback"> {{  $errors->{$errorBag}->first('cnpj') }}</div>
            @endif
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="_cep">CEP</label>
            <input class="form-control @if($errors->{$errorBag}->has('cep')) is-invalid @endif" type="text" name="cep" id="_cep" value="{{old('cep', !empty($loja->endereco->cep) ? $loja->endereco->cep : '')}}">
            @if($errors->{$errorBag}->has('cep'))
                <div class="invalid-feedback"> {{  $errors->{$errorBag}->first('cep') }}</div>
            @endif
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="_estado">Estado</label>
            <input class="form-control @if($errors->{$errorBag}->has('estado')) is-invalid @endif" type="text" name="estado" id="_estado" value="{{old('estado', !empty($loja->enderecos->bairros->cidades->estados->nome) ? $loja->enderecos->bairros->cidades->estados->nome : '')}}">
            @if($errors->{$errorBag}->has('estado'))
                <div class="invalid-feedback"> {{  $errors->{$errorBag}->first('estado') }}</div>
            @endif
        </div>
        <div class="col-md-4 mb-3">
            <label for="_cidade">Cidade</label>
            <input class="form-control @if($errors->{$errorBag}->has('cidade')) is-invalid @endif" type="text" name="cidade" id="_cidade" value="{{old('cidade', !empty($loja->enderecos->bairros->cidades->nome) ? $loja->enderecos->bairros->cidades->nome : '')}}">
            @if($errors->{$errorBag}->has('cidade'))
                <div class="invalid-feedback"> {{ $errors->{$errorBag}->first('cidade')}}</div>
            @endif
        </div>
        
    </div>
    <div class="form-row">
        
        <div class="col-md-4 mb-3">
            <label for="_bairro">bairro</label>
            <input class="form-control @if($errors->{$errorBag}->has('bairro')) is-invalid @endif" type="text" name="bairro" id="_bairro" value="{{old('bairro', !empty($loja->enderecos->bairros->nome) ? $loja->enderecos->bairros->nome : '')}}">
            @if($errors->{$errorBag}->has('bairro'))
                <div class="invalid-feedback"> {{ $errors->{$errorBag}->first('bairro')}}</div>
            @endif
        </div>
        <div class="col-md-4 mb-3">
            <label for="_endereco">Endereco</label>
            <input class="form-control @if($errors->{$errorBag}->has('endereco')) is-invalid @endif" type="text" name="endereco" id="_endereco" value="{{old('endereco', !empty($loja->enderecos) ? $loja->enderecos : '')}}">
            @if($errors->{$errorBag}->has('endereco'))
                <div class="invalid-feedback"> {{ $errors->{$errorBag}->first('endereco')}}</div>
            @endif
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-2 mb-3">
            <label for="_numero">Numero</label>
            <input class="form-control @if($errors->{$errorBag}->has('numero')) is-invalid @endif" type="text" name="numero" id="_numero" value="{{old('numero', !empty($loja->numero) ? $loja->numero : '')}}">
            @if($errors->{$errorBag}->has('numero'))
                <div class="invalid-feedback"> {{ $errors->{$errorBag}->first('numero')}}</div>
            @endif
        </div>
        <div class="col-md-2 mb-3">
            <label for="_complemento">Complemento</label>
            <input class="form-control @if($errors->{$errorBag}->has('complemento')) is-invalid @endif" type="text" name="complemento" id="_complemento" value="{{old('complemento', !empty($loja->complemento) ? $loja->complemento : '')}}">
            @if($errors->{$errorBag}->has('complemento'))
                <div class="invalid-feedback"> {{ $errors->{$errorBag}->first('complemento')}}</div>
            @endif
        </div>
    </div>
    <div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
</form>  