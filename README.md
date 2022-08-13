# Web_service_1.0

## Web Service.
- Este projeto foi desenvolvido na plataforma Windows, utilizando Servidor Xampp, PHP 8.0+ e Banco SQL.
Este Web Service retorna apenas JSON de acordo com a url que foi utilizada para realizar a requisição, faz parte do Web_Resquest.

## Funcionamento
- Para funcionamento local. Envie um Post para a url:
```url
  http://localhost/Web_service_1.0/insert
```
Então uma informação será inserida no Sql. Existindo também a possibilidade de excluir, listar.
Para manipulação deste Web Service é nescessário o projeto de Requisição:
```url
https://github.com/marlon655/Request_service_1.0
```
Atravez deste projeto de Requisição será possivel entender como inserir, excluir e listar dados.
Para poder fazer as requisições é nescessário uma chave a qual já esta configurado no arquivo dito antes.

# Como utilizar o projeto
- Utilize-o junto com o Request_service_1.0 para melhor compreensão.

## Configuração
  Para mudar seu banco de dados e local do arquivo acesse o config.php
  ```PHP
    define('INCLUDE_PATH', 'http://localhost/Web_service_1.0/');
    define('DATABASE', 'web_service_1.0');
  ```
# Não esqueça de importar o Arquivo web_service_1_0.sql para seu banco de dados.
## Back end
- PHP

## Front end
- HTML
- CSS
- JavaScript

## Frameworks
- Nenhum
