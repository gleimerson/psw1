<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Completo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="navbar">
        <div class="nav-list">
        <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Projetos</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </div>
    </div>

    
    <div class="form-section">
        <h1>Formulário Completo</h1>
        <form class="form-container">
          
            <div class="form-group">
                <label for="nome">Nome Completo:</label>
                <input type="text" id="nome" name="nome" placeholder="Digite seu nome completo" required>
            </div>

            <div class="form-group">
                <label for="data-nascimento">Data de Nascimento:</label>
                <input type="date" id="data-nascimento" name="data-nascimento">
            </div>

            <div class="form-group">
                <label for="cor-favorita">Cor Favorita:</label>
                <input type="color" id="cor-favorita" name="cor-favorita">
            </div>

            <div class="form-group">
                <label for="arquivo">Envie um arquivo:</label>
                <input type="file" id="arquivo" name="arquivo">
            </div>

            <div class="form-group">
                <label>Sexo:</label>
                <input type="radio" id="masculino" name="sexo" value="masculino">
                <label for="masculino">Masculino</label>
                <input type="radio" id="feminino" name="sexo" value="feminino">
                <label for="feminino">Feminino</label>
            </div>

          
            <div class="form-group">
                <label for="idade">Idade:</label>
                <input type="number" id="idade" name="idade" min="0" max="120" placeholder="Sua idade">
            </div>

            <div class="form-group">
                <label for="paciência">Nível de paciência:</label>
                <input type="range" id="paciência" name="paciência" min="0" max="150" value="70">
            </div>

            
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" placeholder="exemplo@dominio.com">
            </div>

            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="tel" id="telefone" name="telefone" placeholder="(XX) XXXXX-XXXX" pattern="\([0-9]{2}\) [0-9]{5}-[0-9]{4}">
            </div>

            <div class="form-group">
                <label for="url">Seu site (URL):</label>
                <input type="url" id="url" name="url" placeholder="https://">
            </div>

        
            <div class="form-group">
                <label for="data-hora">Data e Hora:</label>
                <input type="datetime-local" id="data-hora" name="data-hora">
            </div>

            <div class="form-group">
                <label for="hora">Hora Atual:</label>
                <input type="time" id="hora" name="hora">
            </div>

            <div class="form-group">
                <label for="mes">Escolha um Mês:</label>
                <input type="month" id="mes" name="mes">
            </div>

            <div class="form-group">
                <label for="semana">Escolha uma Semana:</label>
                <input type="week" id="semana" name="semana">
            </div>

           
            <div class="form-group">
                <label for="busca">Faça uma Busca:</label>
                <input type="search" id="busca" name="busca" placeholder="Digite para buscar">
            </div>

            <div class="form-group">
                <label for="imagem">Envie uma Imagem:</label>
                <input type="image" id="imagem" src="https://th.bing.com/th/id/R.9e838aac670070bb0dc787ad03aebd20?rik=trgIsBwl9pTC4g&pid=ImgRaw&r=0" alt="Imagem de Envio">
            </div>

            <div class="form-group">
                <label>
                    <input type="checkbox" id="termos" name="termos" required>
                    Aceito os Termos e Condições
                </label>
            </div>

          
            <div class="form-footer">
            <input type="button" value="Apenas um botão"> <br>   
            <button type="reset">Resetar</button>
                
                <button type="submit">Enviar</button>
            </div>
        </form>
    </div>

   
    <div class="footer">
        <p>&copy; 2024 GLEIMERSON RODRIGO. Todos os direitos reservados.</p>
    </div>
</body>
</html>

