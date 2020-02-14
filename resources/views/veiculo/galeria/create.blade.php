@extends('layout.template')
@section('body')
    <div class="row mt-5">
        <form action="{{route('veiculo.save', $veiculo->id)}}" method="POST" enctype="multipart/form-data">
            @method('POST')
            @csrf
            <div class="form-row">
                <div class="col-md-12 mb-3">
                    <label for="_anomodelo">Adicionar Fotos</label>
                    <input type="file" name="id" class="form-control" value="">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
@endsection 