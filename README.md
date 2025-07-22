# ✅Projeto Câmara dos Deputados (Laravel + PostgreSQL)

Este projeto é uma aplicação web desenvolvida em **Laravel** que consome dados da [API de Dados Abertos da Câmara dos Deputados](https://dadosabertos.camara.leg.br/) e exibe informações sobre deputados e partidos políticos.

## ✨ Funcionalidades

-   Listagem de deputados e seus dados básicos
-   Listagem de partidos
-   Visualização individual dos dados dos deputados
-   Atualização automática dos dados via Jobs agendados
-   Interface com Bootstrap 5
-   Integração com PostgreSQL
-   Consumo dinâmico da API externa

## 🚀 Tecnologias

-   PHP 8+
-   Laravel 12+
-   PostgreSQL
-   Bootstrap 5
-   Vite (para assets frontend)

---

## ⚙️ Instalação e Configuração

### 1. Clone o projeto

```bash
    git clone https://github.com/eduu777/project-deputies.git
    cd project-deputies
```

### 2. Instale as dependências PHP e JS

```bash
    composer install
    npm install
    npm run dev
```

### 3. Configure o `.env`

Crie um arquivo `.env` com base no arquivo `.env.example`

Altere os dados do banco de dados:

```bash
    DB_CONNECTION=pgsql
    DB_HOST=127.0.0.1
    DB_PORT=5432
    DB_DATABASE=seu_banco
    DB_USERNAME=seu_usuario
    DB_PASSWORD=sua_senha
```

### 4. Rode as Migrations

```bash
    php artisan migrate
```

### 5. Rode o comando para popular o banco com os dados da API.

> Isso deve ser feito apenas na primeira vez que rodar a aplicação nas demais vezes será atualizado automaticamente.

```bash
    php artisan app:import-deputados
```

---

## 🧪 Exemplos de Endpoints

-   `/` - Página inicial com deputados
-   `/deputados/{id}` - Detalhes de um deputado
-   `/partidos` - Lista de partidos

---

## ⚙️ Jobs

Essa aplicação foi progamado um Job que roda todos os dias as 00:20h do horário de Brasília, o mesmo é responsável para atualizar os dados dos deputados, primeiramente através do endpoint `dadosabertos.camara.leg.br/api/v2/deputados ` e logo após `dadosabertos.camara.leg.br/api/v2/deputados/{id}` para inserir os dados detalhados de cada deputado no banco de dados.

---

## 💾 Estrutura do Banco de Dados (Exemplo)

### Tabela `deputados`

| Campo                | Tipo           | Descrição                            | Nullable |
| -------------------- | -------------- | ------------------------------------ | -------- |
| id                   | unsignedBigInt | Identificador único (primary key)    | Não      |
| nome                 | string         | Nome do deputado                     | Não      |
| sigla_partido        | string         | Sigla do partido                     | Não      |
| uri_partido          | string         | URI do partido na API                | Não      |
| sigla_uf             | string         | Sigla do estado (Unidade Federativa) | Não      |
| id_legislatura       | integer        | ID da legislatura atual              | Não      |
| url_foto             | string         | URL da foto do deputado              | Não      |
| email                | string         | E-mail do deputado                   | Sim      |
| nome_civil           | string         | Nome civil completo                  | Sim      |
| situacao             | string         | Situação atual do deputado           | Sim      |
| cpf                  | string         | CPF do deputado                      | Sim      |
| sexo                 | string         | Sexo do deputado                     | Sim      |
| data_nascimento      | date           | Data de nascimento                   | Sim      |
| uf_nascimento        | string         | Unidade Federativa de nascimento     | Sim      |
| municipio_nascimento | string         | Município de nascimento              | Sim      |
| created_at           | timestamp      | Data de criação do registro          | Não      |
| updated_at           | timestamp      | Data da última atualização           | Não      |

---

## 📌 Observações

-   A pasta public/build/manifest.json é gerada pelo Vite. Se ela estiver ausente, rode npm run build.

-   O arquivo .env não é enviado ao repositório. Você deve criar o seu manualmente.

-   Em caso de erro de tipo no PostgreSQL com bigint, verifique se os campos estão usando string no Laravel ou bigInteger() nas migrations.

---

## 👨‍💻 Autor

Eduardo Nobre
[LinkedIn](https://www.linkedin.com/in/eduardo-nobre-8500a2209/)  
[GitHub](https://github.com/eduu777)

---

## 📄 Licença

MIT
