@extends('layout.template')
@section('body')
    <a href="{{route('veiculo.create')}}">Adicionar veiculo</a>
    <table class="table ">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Placa</th>
            <th scope="col">Chassi</th>
            <th scope="col">Modelo</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($veiculos as $veiculo)
                <tr>
                    <th scope="row">{{$veiculo->id}}</th>
                    <td>{{$veiculo->placa}}</td>
                    <td>{{$veiculo->chassis}}</td>
                    <td>{{$veiculo->modelo_id}}</td>
                </tr>
            @endforeach
        </tbody>
      </table>
@endsection