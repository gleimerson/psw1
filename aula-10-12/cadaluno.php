<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CadAluno</title>
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

    <div class="cadastro">
        <h1>Cadrastro do Aluno</h1>


      
          <form action="listaaluno.php" method="post">
            <div class="informacoes">
                <label for="nome">Nome Completo:</label>
                <input type="text"  name="nome" placeholder="Digite seu nome completo" required>
             
            </div>

            <div class="informacoes">
                <label for="endereco">Endereço:</label>
                <input type="text" name="endereco" placeholder="Digite seu Endereço" required>
                  
            </div>

            <div class="informacoes">
                <label for="bairro">Bairro:</label>
                <input type="text" name="bairro" placeholder="Digite seu Bairro" required>
                <input type="hidden" id="custId" name="custId" value="3487">  
            </div>

            <div class="informacoes">
                <label for="cidade">Cidade:</label>
                <input type="text"  name="cidade" placeholder="Digite sua cidade" required>
                <input type="hidden" id="custId" name="custId" value="3487">  
            </div>

            <div class="informacoes">
                <label for="uf">UF:</label>
                <select id="uf" name="uf" required>
                    <option value="">Selecione</option>
                    <option value="AC">AC</option>
                    <option value="AL">AL</option>
                    <option value="AP">AP</option>
                    <option value="AM">AM</option>
                    <option value="BA">BA</option>
                    <option value="CE">CE</option>
                    <option value="DF">DF</option>
                    <option value="ES">ES</option>
                    <option value="GO">GO</option>
                    <option value="MA">MA</option>
                    <option value="MT">MT</option>
                    <option value="MS">MS</option>
                    <option value="MG">MG</option>
                    <option value="PA">PA</option>
                    <option value="PB">PB</option>
                    <option value="PR">PR</option>
                    <option value="PE">PE</option>
                    <option value="PI">PI</option>
                    <option value="RJ">RJ</option>
                    <option value="RN">RN</option>
                    <option value="RS">RS</option>
                    <option value="RO">RO</option>
                    <option value="RR">RR</option>
                    <option value="SC">SC</option>
                    <option value="SP">SP</option>
                    <option value="SE">SE</option>
                    <option value="TO">TO</option>
                </select>
            </div>

            <div class="informacoes">
                 <label for="cpf">CPF:</label>
                <input type="text" id="cpf" name="cpf"  placeholder="123.456.789-00">
                <input type="hidden" id="custId" name="custId" value="3487">
             </div>

             <div class="informacoes">
               <label for="celular">Celular:</label>
                <input type="tel" id="celular" name="celular"  placeholder="(99) 99999-9999">
                <input type="hidden" id="custId" name="custId" value="3487">
             </div>
       
             <div class="informacoes">
             <label for="zap">WhatsApp:</label>
             <input type="tel" id="zap" name="zap"  placeholder="(99) 99999-9999">
             <input type="hidden" id="custId" name="custId" value="3487">
            </div>

     <div class="informacoes">
        <label for="datanascimento">Data de Nascimento:</label>
        <input type="date" id="datanascimento" name="datanascimento" required>
        <input type="hidden" id="custId" name="custId" value="3487">
     </div>

     <div class="informacoes">
        <label for="disciplinascursadas">Disciplinas Cursadas:</label>
        <textarea id="disciplinascursadas" name="disciplinascursadas"  placeholder="Informe as disciplinas cursadas..."></textarea>
        <input type="hidden" id="custId" name="custId" value="3487"> 
    </div>

     <div class="informacoes">
        <label for="disciplinaspreferidas">Disciplinas Preferidas:</label><br>
        <input type="checkbox" id="matematica" name="matematica" value="diciplina">
        <label for="matematica"> Matemática</label>
        <input type="checkbox" id="portugues" name="portugues" value="diciplina">
        <label for="portugues"> Português</label>
        <input type="checkbox" id="fisica" name="fisica" value="diciplina">
        <label for="fisica"> Física</label>
        
        <input type="hidden" id="custId" name="custId" value="3487"> 
    </div>


        <input type="submit" value="Salvar">


    </div>
</form>

    <div class="rodape">
        <h2>Todos os direitos reservados - Gleimerson Rodrigo 2AII</h2>

    </div>
</body>
</html>