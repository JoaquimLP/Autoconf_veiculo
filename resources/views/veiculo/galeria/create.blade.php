@extends('layout.template')
@section('body')
    <div class="row mt-5">
        <form action="{{route('veiculo.save', $veiculo->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="col-md-12 mb-3">
                    <label for="_image">Adicionar Fotos</label>
                    <input type="file" name="image[]" multiple class="form-control-file" id="_image" value="{{old('image','')}}">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
    <div class="row">
        @foreach ($veiculo->galeria as $item)
            <div class="col-4">
                <div class="card mt-5">
                    <img src="{{url('storage/'.$item->path)}}" class="img-fluid" alt="...">
                </div>
            </div>
        @endforeach
    </div>
@endsection 