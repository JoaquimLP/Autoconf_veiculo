@extends('layout.template')
@section('body')
  <div class="row">
    <div class="col">
    <form method="GET" action="{{ route('loja') }}">
      <input class="form-control" name="busca" value="{{ old('busca', isset($busca) ? $busca : '') }}">
      <button class="btn btn-default" type="submit">Pesquisar</button>
    </form>
    </div>
    <div class="col-auto">
      <a href="{{route('loja.create')}}" class="btn btn-primary">Adicionar uma Loja</a>
    </div>
  </div>
    <table class="table ">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Loja</th>
            <th scope="col">CNPJ</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($lojas as $loja)
                <tr>
                    <th scope="row">{{$loja->id}}</th>
                    <td>{{$loja->nome}}</td>
                    <td class="_cnpj">{{$loja->cnpj}}</td>
                    <td>
                      <div class="row">
                        <div class="col-6">
                        <a href="{{ route('loja.edit', $loja->id) }}" class="btn btn-secondary">Editar</a>
                        </div>
                        <div class="col-6">
                          <form action="{{route('loja.destroy',  $loja->id)}}" method="POST" novalidate>
                            @method('DELETE')
                            @csrf
                            <input type="hidden" name="id" value="{{ $loja->id }}">
                            <button type="submit" class="btn btn-danger">Deletar</button>
                          </form>
                        </div>
                      </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
      {{ $lojas->links() }}
@endsection
@push('scripts')
    <script>
        $(document).ready(function(){	
            $("._cnpj").mask("99.999.999/9999-99");
        });
    </script>
@endpush  