<form action="{{route('veiculo.store')}}" method="post">
        @method('POST')
        @csrf
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="_placa">Placa</label>
            <input class="text-uppercase form-control" type="text" name="placa" id="_placa" value="{{old('placa', '')}}">
            @if($errors->has('placa'))
            <div class="invalid-feedback"> {{$errors->first('placa')}}</div>
            @endif
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="_chassis">Chassi</label>
            <input class="text-uppercase form-control" type="text" name="chassis" id="_chassis" value="{{old('chassi', '')}}">
            @if($errors->has('chassi'))
                <div class="invalid-feedback"> {{  $errors->first('chassi') }}</div>
            @endif
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="_marca">Marca</label>
            <select name="marca" class="form-control" id="_marca">
                <option value="">--Seleciona--</option>
                @foreach ($marcas as $marca)
                    <option value="{{$marca->id}}" @if(old('marca', '' ) == $marca->id ) selected="" @endif>{{$marca->nome}}</option>
                @endforeach
            </select>
            @if($errors->has('marca'))
            <div class="invalid-feedback"> {{  $errors->first('marca') }}</div>
            @endif
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="_modelo_id">modelo</label>
            <select name="modelo_id" class="form-control" id="_modelo_id">
                <option value="_modelo">--Seleciona--</option>
                @foreach ($modelos as $modelo)
                    <option value="{{$modelo->id}}" @if(old('modelo', '' ) == $modelo->id ) selected="" @endif>{{$modelo->nome}}</option>
                @endforeach
            </select>
            @if($errors->has('modelo'))
            <div class="invalid-feedback"> {{  $errors->first('modelo') }}</div>
            @endif
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="_anomodelo">Ano Modelo</label>
            <input type="text" class="form-control" name="anomodelo" id="_anomodelo" value="{{old('anomodelo', '')}}">
            @if($errors->has('anomodelo'))
                <div class="invalid-feedback"> {{  $errors->first('anomodelo') }}</div>
            @endif
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="_anofabricacao">Ano Fabricação</label>
            <input type="text" class="form-control" name="anofabricacao" id="_anofabricacao" value="{{old('anofabricacao', '')}}">
            @if($errors->has('anofabricacao'))
                <div class="invalid-feedback"> {{  $errors->first('anofabricacao') }}</div>
            @endif
        </div>
    </div>
        <div>
            <button type="submit">Salvar</button>
        </div>
    </div>
</form>  