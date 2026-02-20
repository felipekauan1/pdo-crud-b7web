# 🚀 CRUD Prático com PHP & PDO - B7Web

Este repositório contém uma aplicação prática de gerenciamento de dados desenvolvida para consolidar os fundamentos das operações **CRUD** (Create, Read, Update, Delete) utilizando a biblioteca **PDO (PHP Data Objects)**. O projeto foi estruturado durante o curso de Banco de Dados e PDO da **B7Web**.

## 🛠️ Tecnologias Utilizadas

* **Linguagem:** PHP 8+.
* **Banco de Dados:** MySQL.
* **Driver de Conexão:** PDO (Mais seguro e portável).
* **Conceitos:** Prepared Statements, manipulação de erros com `try-catch` e variáveis de ambiente.

## 📋 Funcionalidades

* **Conexão Segura:** Uso de PDO para prevenir SQL Injection através de `bindParams`.
* **Criação (Create):** Script para inserção de novos usuários com senhas protegidas.
* **Listagem (Read):** Exibição de dados recuperados do banco como Objetos e Arrays Associativos.
* **Atualização (Update):** Edição de informações específicas de registros via ID.
* **Exclusão (Delete):** Remoção de registros do banco de dados de forma direta.
* **Segurança de Ambiente:** Separação de credenciais sensíveis em arquivos de configuração de exemplo.

## 📁 Estrutura de Arquivos

O projeto é focado na lógica de back-end, composto pelos seguintes arquivos fundamentais:

* `config/connection.php`: Arquivo central que estabelece a conexão com o MySQL e define o modo de erro do PDO.
* `env.exemple.php`: Modelo de configuração para o ambiente (Host, DB, Usuário e Senha).
* `read.php`: Recupera e exibe os dados do banco (atua como a visualização principal).
* `create.php`: Executa a lógica de inserção de novos dados.
* `update.php`: Realiza a modificação de dados de usuários existentes.
* `delete.php`: Gerencia a exclusão de registros através do ID.

## 🚀 Como Instalar e Rodar

1. **Clone o repositório:**
```bash
git clone https://github.com/felipekauan1/pdo-crud-b7web.git

```


2. **Configure o Banco de Dados:**
* Crie um banco de dados chamado `meu_banco`.
* Importe o arquivo `database.sql` no seu gerenciador de banco de dados (ex: phpMyAdmin).


3. **Configure as Variáveis de Ambiente:**
* Renomeie o arquivo `env.exemple.php` para `env.php`.
* Ajuste as credenciais (host, dbname, username, password) conforme as configurações do seu servidor local.


4. **Inicie o Servidor:**
* Mova a pasta do projeto para o diretório do seu servidor local (ex: `htdocs` no XAMPP ou `www` no WAMP).
* Acesse via navegador: `http://localhost/pdo-crud-b7web/read.php`.