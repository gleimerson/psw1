<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ListaAluno</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="cabecalho">
        <img src="https://ifrs.edu.br/viamao/wp-content/uploads/sites/11/2018/08/logo_if_vertical-1.png" alt="Logo 2" class="cabecalho-img">
        <h1>Programação de Sistemas WEB</h1>
    </div>
    
    <div class="navegador">
        <div class="navegador-lista">
        <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="cadaluno.php">CadAluno</a></li>
                <li><a href="listaaluno.php">ListaAluno</a></li>
                
            </ul>
        </div>
    </div>

     <div class="tabela">
        <h1>Listas dos Alunos</h1>
    <table>
        <tr>
            <th>Nome</th>
            <th>Endereço</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>UF</th>
            <th>CPF</th>
            <th>Celular</th>
            <th>WhatsApp</th>
            <th>Data de Nascimento</th>
            <th>Disciplinas Cursadas</th>
            <th>Disciplinas Preferidas</th>
        </tr>

        <td>
            <?php 
            echo $_POST['nome'];
            ?>
        </td>

        <td>
            <?php 
            echo $_POST['endereco'];
            ?>
        </td>

        <td>
            <?php 
            echo $_POST['bairro'];
            ?>
        </td>

        <td>
           <?php 
            echo $_POST['cidade'];
            ?>
        </td>

        <td>
           <?php 
            echo $_POST['uf'];
            ?>
        </td>

        
        
    </div>
</table>


<div class="rodape">
    <h2>Todos os direitos reservados - Gleimerson Rodrigo 2AII</h2>

</div>
</body>
</html>