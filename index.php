<!DOCTYPE html>
<html lang="pt-br">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busca cep</title>
    <style>

        h1{
            margin: 0 auto;
        }

        #centraliza{
            max-width: 600px;
            margin: 0 auto;
            align-items: center;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: center;
            
        }
    
    </style>
</head>
<body>
    <div id="centraliza">
    
    <h1>Busca CEP</h1>
    <div class="input-group mb-3">
        <span class="input-group-text">CEP</span>
        <input id="cep" type="text" class="form-control" onblur="buscaDados(this.value)">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text">cidade</span>
        <input id="cidade" type="text" class="form-control" placeholder="Cidade">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text">Bairro</span>
        <input id="bairro" type="text" class="form-control" placeholder="Bairro" aria-label="Username">
        <span class="input-group-text">Rua</span>
        <input id="rua" type="text" class="form-control disabled" placeholder="Rua">
    </div>
    </div>

    <script type="text/javascript" src="script.js"></script>
</body>
</html>