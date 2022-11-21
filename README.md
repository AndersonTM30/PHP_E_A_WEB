## Métodos HTTP:

GET => Faz requisições para trazer informações do servidor.<br>
POST => Faz envio de dados para o servidor.<br>
PUT => Faz atualizações de dados do servidor.<br>
DELETE => Deleta dados do servidor.<br>
PATCH => Atualiza dados específicos do servidor.<br>

## Variáveis Globais do PHP:

$_ENV => Variáveis de ambiente.<br>
$_GET => Parâmetros que foram enviados por request GET.<br>
$_POST => Parâmetros que foram enviados por POST.<br>
$_COOKIE => Valores de cookies.<br>
$_SERVER => Informações sobre o servidor.<br>
$_FILES => Informações sobre os arquivos que vieram por upload.<br>

## Explorando o Server:
SERVER_SOFTWARE => Identifica o servidor.<br>
SERVER_NAME => Hostname, DNS ou IP do servidor.<br>
SERVER_PROTOCOL => Protocolo do servidor.<br>
SERVER_PORT => Porta do servidor.<br>
QUERY_STRING => Argumentos passados na URL após o ?.<br>

## Autoprocessamento de páginas:
$_SERVER['REQUEST_METHOD'] => Podemos validar o tipo de requisição para fazer validações e deixar o processo de requisições mais automatizado.

## Preechendo campos do formulário com php:
Podemos utilizar o atributo value das tags HTML para inserir dados PHP.
``` <input type="text" value="<?php echo $nome; ?>"> ```

## Parâmetro com mais de um valor:
Os inputs de checkbox podem conter mais de um valor, para poder receber todos os valores no backend, precisamos adicionar uma sintaxe de array no name;
``` <input type="checkbox" name="caracteristicas[]"> ```

## Upload de arquivos
Para enviar arquivos para o servidor precisamos mudar o tipo de envio na tag do formulário HTML para o ``` multipart/form-data ``` e o usar o input do tipo ``` file ```. Depois do envio, todos os dados da imagem estarão em ``` $_FILES ```