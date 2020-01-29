@extends('layouts.app', ["current" => "produtos"])

@section('content')

<div class="card border">
    <div class="card-body">
        <form action="/produtos/{{$prod->id}}" method="POST">
            @csrf
            <div class="form-group">

                <label for="name">Nome Produto</label>
                <input type="text" class="form-control" name="name" value="{{$prod->name}}"
                    id="name" placeholder="Vestido">

                <label for="size">Tamanho</label>
                <input type="text" class="form-control" name="size" value="{{$prod->size}}"
                    id="size" placeholder="M">

                <label for="type">Tipo</label>
                <input type="text" class="form-control" name="type" value="{{$prod->type}}"
                    id="type" placeholder="Vestuário">

                <label for="amount">Quantidade</label>
                <input type="number" class="form-control" name="amount" value="{{$prod->amount}}"
                    id="amount" placeholder="48">

                <label for="color">Cor</label>
                <input type="text" class="form-control" name="color" value="{{$prod->color}}"
                    id="color" placeholder="Vermelho">


            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm">Cancel</button>
        </form>
    </div>
</div>

@endsection