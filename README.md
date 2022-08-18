# CRUD-Clientes-API
Projeto CRUD para gestão de clientes com consumo da API [ViaCep](https://viacep.com.br/)
# Requisitos
-  PHP 7.4
- MySQL
# Configuração do banco de dados
- Executar a query "database.sql" para que seja criado o banco de dados e a table necessária para o projeto;
- Editar o arquivo Conexao.php na pasta "Model" com suas credenciais do MySQL.
- Executar o comando abaixo na pasta raiz do projeto para atualizar o cache:
```
composer dump-autoload
```
- Entrar na pasta "public" e executar o comando abaixo para iniciar o servidor:
```
php -S 127.0.0.1:8000
```
