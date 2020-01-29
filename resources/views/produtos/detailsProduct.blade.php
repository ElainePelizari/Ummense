@extends('layouts.app', ["current" => "produtos"])

@section('content')


<div class="card" style="width: 18rem;">
  <div class="card-header">
    Detalhes do Produto
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Nome do Produto: {{$prod->name}}</li>
    <li class="list-group-item">Tamanho: {{$prod->size}}</li>
    <li class="list-group-item">Tipo: {{$prod->type}}</li>
    <li class="list-group-item">Quantidade: {{$prod->amount}}</li>
    <li class="list-group-item">Cor: {{$prod->color}}</li>
  </ul>
</div>
</br>
<div >
    <a href="/produtos" class="btn btn-primary">Voltar</a>
</div>




@endsection