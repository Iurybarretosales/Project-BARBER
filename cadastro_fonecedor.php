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
        <h1>Cadastro de Fonercedor</h1>
        <form id="form_cadastro_Usuacrio" action="cad.php"  method="get" class="p-3" >

            <div class="my-3">
                <label class="form-label">Nome</label>
                <input  class="form-control" type="text" name="nome_fonercedor" 
                id="nome_fonercedor" >
        
                <label class="form-label">CNPJ</label>
                <input  class="form-control" type="text" name="cnpj_fonercedor" 
                id="cnpj_fonercedor" >

                <label class="form-label">Email</label>
                <input class="form-control" type="email" name="email_fonercedor" id="email_fonercedor">
    
                <label class="form-label">Tell</label>
                <input class="form-control" type="tel" name="tel_fonercedor" id="tel_fonercedor">
    
    
                <label class="form-label">Endereço</label>
                <input class="form-control" type="text" name="endereco_fonercedor" id="endereco_fonercedor">

        
                <label class="form-label">Data de Cadastro</label>
                <input class="form-control" id="data_cadastro_fonercedor" type="date" name="data_cadastro_fonercedor">
            </div>
            
            <div class="my-3">
                <input class="btn btn-primary" type="submit" value="cadastrar">
                <a href="index.php"><input type="button" class="btn btn-primary" value="Voltar"></a>
            </div>
    
        </form>
    </section>
    
</body>
</html>