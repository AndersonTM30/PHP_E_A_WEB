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

## Upload de arquivos:
Para enviar arquivos para o servidor precisamos mudar o tipo de envio na tag do formulário HTML para o ``` multipart/form-data ``` e o usar o input do tipo ``` file ```. Depois do envio, todos os dados da imagem estarão em ``` $_FILES ```

## Validações de formulários:
A validação é muito importante para verificar se os dados recebidos são os esperados, evitar injeção de código malicioso e verficar se não está enviando algum dado vazio onde deveria ser obrigatório

## Mantedo o estado
O HTTP é um protocolo que não mantém o estado (stateless), ou seja, após o fim da requisição a ``` conexão entre o servidor e cliente é finalizada ```, a próxima conexão não possui mais relação entre ambos. <br>
Para conseguir manter estes dados podemos utilizar os ``` cookies ```; <br>
O problema desta abordagem é que alguns navegadores não permitem o uso de cookies ou o bloqueiam. <br>
O cookies são strings que contém informações: <br>
A função para adicionar um cookie é ``` setcookie ```; <br>
A função deve ser chamada antes do corpo da págin, pois envia dados como ``` header ```(cabeçalho); <br>
O cookie leva dados como : nome, valor e data de expiração(opcional); <br>
Podemos acessar os cookies de volta com $_COOKIE;

## Sobre as sessions
Com ``` session ``` podemos criar uma variável que persiste em diferentes páginas e também perdura por várias visitas ao mesmo site; <br>
A session ``` utiliza recursos de cookies ``` para  seu funcionamento, e se o recurso estiver desabilitado propaga a sessão via URL; <br>
Sessions são utilizadas para: autenticação, carrinho de compras e tudo o que precisa persistir de página em página: <br>
Acaba sendo recurso mais utilizado, comparando com o cookie; <br>
As ``` sessions são salvas em arquivos ``` no computador que estamos ou no servidor da aplicação; <br>
O caminho para onde os arquvios são salvos fica em php.ini na configuração ``` session.save_path ```; <br>
as sessions podem ser salvas em dois formatos: o próprio do PHP e também o Web Distributed Data eXchange (WDDX).