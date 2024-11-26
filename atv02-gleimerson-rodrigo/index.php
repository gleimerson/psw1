<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Completo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="navegador">
        <div class="navegador-lista">
        <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Projetos</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </div>
    </div>

    
    <div class="seção">
        <h1>Formulário Completo</h1>
        <form class="caixa">
          
            <div class="grupo">
                <label for="nome">Nome Completo:</label>
                <input type="text" id="nome" name="nome" placeholder="Digite seu nome completo" required>
                <input type="hidden" id="custId" name="custId" value="3487">
            </div>

            <div class="grupo">
            <label for="pwd">Senha:</label><br>
            <input type="password" id="pwd" name="pwd" placeholder="Digite sua senha">
            </div>

            <div class="grupo">
                <label for="data-nascimento">Data de Nascimento:</label>
                <input type="date" id="data-nascimento" name="data-nascimento">
            </div>

            <div class="grupo">
               <label for="país">Seu País:</label>
               <select id="país" name="país">
               <option value="alemanha">Alemanha</option>
               <option value="argentina">Argentina</option>
               <option value="australia">Australia</option>
               <option value="brasil">Brasil</option>
               <option value="canada">Canada</option>
               <option value="chile">Chile</option>
               <option value="chile">Chile</option>
               <option value="usa">USA</option>
               </select>

            </div>

            <div class="grupo">
                <label for="cor-favorita">Cor Favorita:</label>
                <input type="color" id="cor-favorita" name="cor-favorita">
            </div>

            <div class="grupo">
                <label for="arquivo">Envie um arquivo:</label>
                <input type="file" id="arquivo" name="arquivo">
            </div>

            <div class="grupo">
                <label>Sexo:</label>
                <input type="radio" id="masculino" name="sexo" value="masculino">
                <label for="masculino">Masculino</label>
                <input type="radio" id="feminino" name="sexo" value="feminino"> 
                <label for="feminino">Feminino</label>
                <input type="radio" id="outro" name="sexo" value="outro">
                <label for="outro">Outro</label>            
            </div>

          
            <div class="grupo">
                <label for="idade">Idade:</label>
                <input type="number" id="idade" name="idade" min="0" max="120" placeholder="Sua idade">
            </div>

            <div class="grupo">
                <label for="paciência">Nível de paciência:</label>
                <input type="range" id="paciência" name="paciência" min="0" max="150" value="70">
            </div>

            
            <div class="grupo">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" placeholder="exemplo@dominio.com">
            </div>

            <div class="grupo">
                <label for="telefone">Telefone:</label>
                <input type="tel" id="telefone" name="telefone" placeholder="(XX) XXXXX-XXXX" pattern="\([0-9]{2}\) [0-9]{5}-[0-9]{4}">
            </div>

            <div class="grupo">
                <label for="url">Seu site (URL):</label>
                <input type="url" id="url" name="url" placeholder="https://">
            </div>

        
            <div class="grupo">
                <label for="data-hora">Data e Hora:</label>
                <input type="datetime-local" id="data-hora" name="data-hora">
            </div>

            <div class="grupo">
                <label for="hora">Hora Atual:</label>
                <input type="time" id="hora" name="hora">
            </div>

            <div class="grupo">
                <label for="mes">Escolha um Mês:</label>
                <input type="month" id="mes" name="mes">
            </div>

            <div class="grupo">
                <label for="semana">Escolha uma Semana:</label>
                <input type="week" id="semana" name="semana">
            </div>

           
            <div class="grupo">
                <label for="busca">Faça uma Busca:</label>
                <input type="search" id="busca" name="busca" placeholder="Digite para buscar">
            </div>

            <div class="grupo">
                <label for="imagem">Envie uma Imagem:</label>
                <input type="image" id="imagem" src="https://th.bing.com/th/id/R.9e838aac670070bb0dc787ad03aebd20?rik=trgIsBwl9pTC4g&pid=ImgRaw&r=0" alt="Imagem de Envio">
            </div>

            

            <div class="grupo">
                
                <input type="checkbox" id="vehicle1" name="vehicle1" value="termo">
                <label for="vehicle1"> Aceito os termos de uso</label><br>  
                <input type="checkbox" id="vehicle2" name="vehicle2" value="termo">
                <label for="vehicle2"> Eu concordo em continuar</label> 
            </div>

          
            <div class="botoes">
            <input type="button" value="Apenas um botão"> <br>   
            <button type="reset">Resetar</button>
                
                <button type="submit">Enviar</button>
            </div>
        </form>
    </div>

   
    <div class="rodape">
        <p>&copy; 2024 GLEIMERSON RODRIGO. Todos os direitos reservados.</p>
    </div>
</body>
</html>

