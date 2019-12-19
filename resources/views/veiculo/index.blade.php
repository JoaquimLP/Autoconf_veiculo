@extends('layout.template')
@section('body')
    <a href="{{route('veiculo.create')}}" class="btn btn-primary">Adicionar veiculo</a>
    <table class="table ">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Placa</th>
            <th scope="col">Chassi</th>
            <th scope="col">Marca</th>
            <th scope="col">Modelo</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($veiculos as $veiculo)
                <tr>
                    <th scope="row">{{$veiculo->id}}</th>
                    <td>{{$veiculo->placa}}</td>
                    <td>{{$veiculo->chassis}}</td>
                    <td>{{$veiculo->modelo->marca->nome}}</td>
                    <td>{{$veiculo->modelo->nome}}</td>
                    <td>
                      <div class="row">
                        <div class="col-6">
                        <a href="{{ route('veiculo.edit', $veiculo->id) }}" class="btn btn-secondary">Editar</a>
                        </div>
                        <div class="col-6">
                          <form action="{{route('veiculo.destroy',  $veiculo->id)}}" method="POST" novalidate>
                            @method('DELETE')
                            @csrf
                            <input type="hidden" name="id" value="{{ $veiculo->id }}">
                            <button type="submit" class="btn btn-danger">Deletar</button>
                          </form>
                        </div>
                      </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
@endsection