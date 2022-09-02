<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Livros</title>
    </head>
    <body>
        <table>
        <tr><th>Nome</th><th>Autor</th><th>Valor</th><th>
        @foreach($livros as $livros)
            <tr>
                <td>{{$livros->nome}}</td>
                <td>{{$livros->autor}}</td>
                <td>{{$livros->valor}}</td>
                <td><a href="{{ route('editar_livro', ['id'=>$livros->id])}}"
                    title="Editar livro {{$livros->nome }}" > Editar</a></td>
                <td><a href="{{ route('excluir_livro', ['id'=>$livros->id])}}"
                    title="Excluir livro {{$livros->nome }}" > Excluir</a></td>
            </tr>
        @endforeach
    </body>
</html>
