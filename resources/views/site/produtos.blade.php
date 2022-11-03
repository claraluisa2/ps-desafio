@extends('layouts.site.index')

@section('titulo')
    Produtos
@endsection

@section('produtos')
    <section id="index-card-section">
        @if (@isset($produtos))
            @foreach ($produtos as $produto)
                <div class="index-produtos"key="{{ $produto['nome'] }}">
                    <p><img src="/storage/{{ $produto['imagem'] }}" alt=""></p>
                    <p>
                    <h3>{{ $produto['nome'] }}</h3>
                    </p>
                    <p>{{ $produto['descricao'] }}</p>
                    <p>
                    <h4>R${{ $produto['preco'] }}</h4>
                    </p>
                    @if ($produto->quantidade == 0)
                        Indisponível
                    @endif
                    {{-- {{ $produto->categorias->categoria }} --}}
                </div>
            @endforeach
        @endif
    </section>
@endsection
