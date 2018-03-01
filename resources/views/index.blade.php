<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud - Pessoas</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <style>
        ._content{
            width: 700px;
            display: flex;
            justify-content: center;
            margin-top: 100px;
        }
    </style>   
</head>
<body>
    <div class="container">
        <h1>Pessoas</h1>
        <p><a href="{{ url('/create_pessoas') }}" class="btn btn-primary">Novo</a></p>
    </div>
    <div class="container _content">       
        <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($pessoas as $pessoass)
                <tr>
                    <td>{{ $pessoass->RECNO }}</td>
                    <td>{{ $pessoass->NOME }}</td>
                    <td>{{ $pessoass->EMAIL }}</td>
                    <td>           
                    <a href="{{ url(welcome), 'pt-BR' }}" >a</a>                
                        <button class="btn btn-danger" type="submit">Deletar</button>
                         
                    </td>
                </tr>
            @endforeach                
            </tbody>
        </table>        
    </div>

</body>
</html>