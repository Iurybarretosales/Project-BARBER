<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="stilo_cad.css">
    <title>Cadastro</title>
</head>
<body>

    <section>
        <h1>Cadastro de cliente</h1>
        <form id="form_cadastro_cliente" action="cad.php"  method="get" class="p-3" >

            <div class="my-3">
                <label class="form-label">Nome</label>
                <input  class="form-control" type="text" name="nome_cliente" 
                id="nome_cliente" >
        
                <label class="form-label">CPF</label>
                <input  class="form-control" type="text" name="cpf_cliente" 
                id="cpf_cliente" >

                <label class="form-label">Email</label>
                <input class="form-control" type="email" name="email_cliente" id="email">
    
    
                <label class="form-label">Tell</label>
                <input class="form-control" type="tel" name="tel_cliente" id="tel_cliente">
    
    
                <label class="form-label">Endereço</label>
                <input class="form-control" type="text" name="endereco_Cliente" id="endereco_Cliente">
    
                <label class="form-label">Data de Cadastro</label>
                <input class="form-control" id="data_cadastro_cliente" type="date" name="data_cadastro_cliente">
            </div>
            
            <div class="my-3">
                <input class="btn btn-primary" type="submit" value="cadastrar">
                <a href="index.php"><input type="button" class="btn btn-primary" value="Voltar"></a>
            </div>
    
        </form>
    </section>
    
</body>
</html>