@extends('layouts.app')

@section('content')
  <pagina tamanho="10">
    <painel titulo="Dashboard">
      

      <div class="row">
        @can('eAdmin')
          <div class="col-md-12">
            <caixa qtd="{{$totalUsuarios}}" titulo="Usuários" url="{{route('usuarios.index')}}" cor="green" icone="ion ion-person-stalker"></caixa>
          </div>
        @endcan

      </div>
    </painel>

  </pagina>
@endsection
