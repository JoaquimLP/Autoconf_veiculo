<form action="{{route('veiculo.store')}}" method="post">
    @method('POST')
    @csrf
    <div>
        <label for="_placa">Placa</label>
        <input class="text-uppercase" type="text" name="placa" id="_placa" value="{{old('placa', '')}}">
        @if($errors->has('placa'))
        <div class="invalid-feedback"> {{$errors->first('placa')}}</div>
        @endif
    </div>
    <div>
        <label for="_chassi">Chassi</label>
        <input class="text-uppercase" type="text" name="chassi" id="_chassi" value="{{old('chassi', '')}}">
        @if($errors->has('chassi'))
            <div class="invalid-feedback"> {{  $errors->first('chassi') }}</div>
        @endif
    </div>
    <div>
        <label for="_marca">Marca</label>
        <select name="marca" id="_marca">
            <option value="">--Seleciona--</option>
            @foreach ($marcas as $marca)
                <option value="{{$marca->id}}" @if(old('marca', '' ) == $marca->id ) selected="" @endif>{{$marca->nome}}</option>
            @endforeach
        </select>
        @if($errors->has('marca'))
        <div class="invalid-feedback"> {{  $errors->first('marca') }}</div>
        @endif
    </div>
    <div>
        <label for="_modelo">Modelo</label>
        <select name="modelo" id="_modelo">
            <option value="_modelo">--Seleciona--</option>
            @foreach ($modelos as $modelo)
                <option value="{{$modelo->id}}" @if(old('modelo', '' ) == $modelo->id ) selected="" @endif>{{$modelo->nome}}</option>
            @endforeach
        </select>
        @if($errors->has('modelo'))
        <div class="invalid-feedback"> {{  $errors->first('modelo') }}</div>
        @endif
    </div>
    <div>
        <label for="_anomodelo">Ano Modelo</label>
        <input type="text" name="anomodelo" id="_anomodelo" value="{{old('anomodelo', '')}}">
        @if($errors->has('anomodelo'))
            <div class="invalid-feedback"> {{  $errors->first('anomodelo') }}</div>
        @endif
    </div>
    <div>
        <label for="_anofabricacao">Ano Fabricação</label>
        <input type="text" name="anofabricacao" id="_anofabricacao" value="{{old('anofabricacao', '')}}">
        @if($errors->has('anofabricacao'))
            <div class="invalid-feedback"> {{  $errors->first('anofabricacao') }}</div>
        @endif
    </div>
    <div>
        <button type="submit">Salvar</button>
    </div>
</form>  