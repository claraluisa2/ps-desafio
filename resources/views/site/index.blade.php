@extends('layouts.site.index')

@section('titulo')
    Terrasen Oficial
@endsection

@section('conteudo')
    <div id="um" style="width:100%; heigth:50vh;color:white; background-color:rgb(8, 113, 173)">
        <img src="site/img/quadro.png"width="200px">
        <img src="site/img/camisa.png"width="300px">
        <img src="site/img/funko.png"width="200px">
        <img src="site/img/marcapagina.png"width="200px">

    </div>
    <div id="primeiro-bloco" style=" background-color: white">
        <div id="desconto">
            <div id=imgdesconto><img src="{{ asset('site/img/desconto.png') }}" width="35px"></div>
            <div id="textodesc">
                <p>
                <h3>PRIMEIRA COMPRA</h3>
                </p>
                <p>
                <H4>10% de desconto na sua primeira compra!</H4>
                </p>

            </div>
        </div>


        <div id="frete">
            <div id="imgfrete"><img src="{{ asset('site/img/frete.png') }}" width="50px"></div>
            <div id="textofrete">
                <p>
                <h3><b>FRETE GRÁTIS</b></h3>
                </p>
                <p>
                <H4>Frete grátis para todo o Brasil em pedidos acima de R$199</H4>
                </p>
            </div>
        </div>

        <div id="cartao">
            <div id="imgcartao"><img src="{{ asset('site/img/cartao.png') }}" width="50px"></div>
            <div id="textocartao">
                <p>
                <h3> 3X SEM JUROS</h3>
                </p>
                <p>
                <H4>Parcele suas compras em até 3x sem juros!</H4>
                </p>
            </div>
        </div>

    </div>

    <div id=lancamentos style="width:100%; heigth:50vh; background-color: white">
        <div style="width:100%; heigth:50%; display:flex; justify-content: space-evenly;">
            <p style="font-size: 150%">LANÇAMENTOS</p>
        </div>
        @foreach ($produtos as $produto)
            <div class="lancamentos-produtos"key="{{ $produto['nome'] }}">
                <p><img src="/storage/{{ $produto->imagem }}" alt=""></p>
                <p>
                <h3>{{ $produto->nome }}</h3>
                <p>
                <h3>{{ $produto->descricao }}</h3>
                </p>
                </p>
                <p>
                <h5>R${{ $produto['preco'] }}</h5>
                </p>
            </div>
        @endforeach

    </div>
@endsection
