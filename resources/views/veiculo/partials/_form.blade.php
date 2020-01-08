@if(empty($veiculo))
<form action="{{route('veiculo.store')}}" method="post">
    @method('POST')
@else
<form action="{{route('veiculo.update', $veiculo->id)}}" method="post">
    @method('PUT')
@endif
    @csrf
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="_placa">Placa</label>
            <input class="text-uppercase form-control @if($errors->{$errorBag}->has('placa')) is-invalid @endif" type="text" name="placa" id="_placa" value="{{old('placa', !empty($veiculo->placa) ? $veiculo->placa : '')}}">
            @if($errors->{$errorBag}->has('placa'))
            <div class="invalid-feedback"> {{$errors->{$errorBag}->first('placa')}}</div>
            @endif
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="_chassis">Chassi</label>
            <input class="text-uppercase form-control @if($errors->{$errorBag}->has('chassis')) is-invalid @endif" type="text" name="chassis" id="_chassis" value="{{old('chassis', !empty($veiculo->chassis) ? $veiculo->chassis : '')}}">
            @if($errors->{$errorBag}->has('chassis'))
                <div class="invalid-feedback"> {{  $errors->{$errorBag}->first('chassis') }}</div>
            @endif
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="_marca">Marca</label>
            <select name="marca" class="form-control @if($errors->{$errorBag}->has('marca')) is-invalid @endif" id="_marca">
                <option value="">--Seleciona--</option>
                @foreach ($marcas as $marca)
                    <option value="{{$marca->id}}" @if(old('marca', !empty($veiculo->modelo->marca->id) ? $veiculo->modelo->marca->id : '') == $marca->id) selected="" @endif>{{$marca->nome}}</option>
                @endforeach
            </select>
            @if($errors->{$errorBag}->has('marca'))
            <div class="invalid-feedback"> {{  $errors->{$errorBag}->first('marca') }}</div>
            @endif
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="_modelo_id">modelo</label>
            <select name="modelo_id" class="form-control @if($errors->{$errorBag}->has('modelo_id')) is-invalid @endif" id="_modelo_id">
                <option value="_modelo">--Seleciona--</option>
                @foreach ($modelos as $modelo)
                    <option value="{{$modelo->id}}" @if(old('modelo', !empty($veiculo->modelo->id) ? $veiculo->modelo->id : '' ) == $modelo->id ) selected="" @endif>{{$modelo->nome}}</option>
                @endforeach
            </select>
            @if($errors->{$errorBag}->has('modelo_id'))
            <div class="invalid-feedback"> {{  $errors->{$errorBag}->first('modelo_id') }}</div>
            @endif
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="_anomodelo">Ano Modelo</label>
            <input type="text" class="form-control @if($errors->{$errorBag}->has('anomodelo')) is-invalid @endif" name="anomodelo" id="_anomodelo" value="{{old('anomodelo', !empty($veiculo->anomodelo) ? $veiculo->anomodelo : '' )}}">
            @if($errors->{$errorBag}->has('anomodelo'))
                <div class="invalid-feedback"> {{  $errors->{$errorBag}->first('anomodelo') }}</div>
            @endif
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="_anofabricacao">Ano Fabricação</label>
            <input type="text" class="form-control @if($errors->{$errorBag}->has('anofabricacao')) is-invalid @endif" name="anofabricacao" id="_anofabricacao" value="{{old('anofabricacao', !empty($veiculo->anofabricacao) ? $veiculo->anofabricacao : '')}}">
            @if($errors->{$errorBag}->has('anofabricacao'))
                <div class="invalid-feedback"> {{  $errors->{$errorBag}->first('anofabricacao') }}</div>
            @endif
        </div>
    </div>
        <div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </div>
</form>  