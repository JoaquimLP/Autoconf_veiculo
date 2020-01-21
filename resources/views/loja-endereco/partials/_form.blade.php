<div class="container">
    <div class="row">
        <div class="card col-12">
            <div class="card-header bg-light">
                <h1>Cadastro de Cliente</h1>
            </div>
            <div class="card-body">
                <form action="{{route('loja-endereco.store')}}" method="post">
                    @method('POST')
                    @csrf
                    <div class="form-group">
                        <label for="_cliente">Nome do cliente</label>
                        <input type="text" class="form-control @error('cliente') is-invalid @enderror" id="_cliente" name="cliente" 
                        placeholder="Nome clompleto" value="{{old('cliente', !empty($cliente->name) ? $cliente->name : '')}}">
                        @error('cliente')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="_cpf">CPF</label>
                            <input type="text" class="form-control @error('cpf') is-invalid @enderror" id="_cpf" name="cpf" value="{{old('cpf', !empty($cliente->cpf) ? $cliente->cpf : '')}}" placeholder="000.000.000-00">
                            @error('cpf')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="_cep">CEP</label>
                            <input type="text" class="form-control @error('cep') is-invalid @enderror" id="_cep" name="cep" value="{{old('cep', !empty($cliente->cep) ? $cliente->cep : '')}}" placeholder="00000-000">
                            @error('cep')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="_endereco">Endereço</label>
                            <input type="text" class="form-control @error('endereco') is-invalid @enderror " id="_endereco" name="endereco" value="{{old('endereco', !empty($cliente->endereco) ? $cliente->endereco : '')}}" placeholder="Rua">
                            @error('endereco')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="_bairro">Bairro</label>
                            <input type="text" class="form-control @error('bairro') is-invalid @enderror " id="_bairro" name="bairro" value="{{old('bairro', !empty($cliente->bairro) ? $cliente->bairro : '')}}" placeholder="Bairro">
                            @error('bairro')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="_cidade">Cidade</label>
                            <input type="text" class="form-control @error('cidade') is-invalid @enderror" id="_cidade" value="{{old('cidade', !empty($cliente->cidade) ? $cliente->cidade : '')}}" name="cidade" placeholder="Cidade">
                            @error('cidade')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="_estado">Estado</label>
                            <input type="text" class="form-control @error('estado') is-invalid @enderror" id="_estado" name="estado" value="{{old('estado', !empty($cliente->estado) ? $cliente->estado : '')}}" placeholder="Estado">
                            @error('estado')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</div>