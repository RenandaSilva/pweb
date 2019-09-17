<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
        
        <form action="{{route('cliente.store')}}" method="post">
            @csrf
            
            <label for="nomcli">Nome do Cliente</label><br/>
            <input type="text" name="nomcli" id="nomcli"/><br/>
            
            <label for="cpfcli">CPF do Cliente</label><br/>
            <input type="text" name="cpfcli" id="cpfcli"/><br/>
            
            <label for="endcli">Endereço do Cliente</label><br/>
            <input type="text" name="endcli" id="endcli"/><br/>
            
            <label for="numcli">Numero do Endereço</label><br/>
            <input type="text" name="numcli" id="numcli"/><br/>
            
            <label for="baicli">Bairro do Cliente</label><br/>
            <input type="text" name="baicli" id="baicli"/><br/>
            
            <label for="cidcli">Cidade do Cliente</label><br/>
            <input type="text" name="cidcli" id="cidcli"/><br/>
            
            <label for="ufcli">UF do Cliente</label><br/>
            <input type="text" name="ufcli" id="ufcli"/><br/>
            
            <label for="telcli">Telefone do Cliente</label><br/>
            <input type="text" name="telcli" id="telcli"/><br/>
            
            
            <button type="submit">Adicionar</button>
            
        </form>
        
    </body>
</html>


