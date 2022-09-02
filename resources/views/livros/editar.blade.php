<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastrar</title>
        <style>
            label{
                float: center;
                display: block;
                width:90px;
            }
        </style>
    </head>
    <body>
        <form action="{{route('atualizar_livro', ['id' => $livro->id]) }}" method="post">
        @csrf
            <div><label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" value="{{$livro->nome}}"></div>
            <div><label for="autor">Autor</label>
            <input type="text" name="autor" id="autor" value="{{$livro->autor}}"></div>
            <div><label for="valor">Valor</label>
            <input type="text" name="valor" id="valor" value="{{$livro->valor}}"></div>
            <button type="submit">Salvar</button>
        </form>
    </body>
</html>
