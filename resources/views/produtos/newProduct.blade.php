@extends('layouts.app', ["current" => "produtos"])

@section('content')

<div class="card border">
<div class="card-header">
    <h5 class="card-title">Cadastro de Produtos</h5> 
</div>
    <div class="card-body">
        <form action="/produtos" method="POST"> 
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">

                <label for="name">Nome do Produto</label>
                <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" 
                    id="name" placeholder="Camiseta" value="{{ old('name') }}">
                @if ($errors->has('name'))
                    <div class="invalid-feedback">
                    {{ $errors->first('name') }}
                    </div>
                @endif

                <label for="size">Tamanho</label>
                <input type="text" class="form-control {{ $errors->has('size') ? 'is-invalid' : '' }}" name="size" 
                    id="size" placeholder="M" value="{{ old('size') }}">
                @if ($errors->has('size'))
                    <div class="invalid-feedback">
                    {{ $errors->first('size') }}
                    </div>
                @endif

                <label for="type">Tipo</label>
                <input type="text" class="form-control {{ $errors->has('type') ? 'is-invalid' : '' }}" name="type" 
                    id="type" placeholder="Vestuário" value="{{ old('type') }}">
                @if ($errors->has('type'))
                    <div class="invalid-feedback">
                    {{ $errors->first('type') }}
                    </div>
                @endif

                <label for="amount">Quantidade</label>
                <input type="number" class="form-control {{ $errors->has('amount') ? 'is-invalid' : '' }}" name="amount" 
                    id="amount" placeholder="100" value="{{ old('amount') }}">
                @if ($errors->has('amount'))
                    <div class="invalid-feedback">
                    {{ $errors->first('amount') }}
                    </div>
                @endif 

                <label for="color">Cor</label>
                <input type="text" class="form-control {{ $errors->has('color') ? 'is-invalid' : '' }}" name="color" 
                    id="color" placeholder="Vermelho" value="{{ old('color') }}">
                @if ($errors->has('color'))
                    <div class="invalid-feedback">
                    {{ $errors->first('color') }}
                    </div>
                @endif

                </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="reset" class="btn btn-danger btn-sm">Cancelar</button>
        </form>
    </div>       

</div>

@endsection