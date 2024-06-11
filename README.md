
### Passo a passo

Clone os Arquivos do Laravel
```sh
git clone https://github.com/laravel/laravel.git app-laravel
```

Crie o Arquivo .env
```sh
cp .env.example .env
```


Atualize as variáveis de ambiente do arquivo .env
```dosini
APP_URL=http://localhost:8989

DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=gymtools
DB_USERNAME=root
DB_PASSWORD=root
```


Suba os containers do projeto
```sh
docker-compose up -d
```


Acessar o container
```sh
docker-compose exec app bash
```

Instalar as dependências do projeto
```sh
composer install
```

Gerar a key do projeto Laravel
```sh
php artisan key:generate
```

## Configurações no Postman: 

**Headers para rotas sem auth**: 

```bash
Content-Type - application/json

Accept  - application/json

```

**Headers para rotas com auth**:

```bash
Content-Type - application/json

Accept  - application/json

Authorization - Bearer + Token 
```

OBS.: O token será gerado no Json de Autenticação de Usuário

## Realizar o consumo da API - **Cadastro de usuário personal** 

   POST  /api/register

| Parâmetro   | Tipo       | Descrição                                   |
| :---------- | :--------- | :------------------------------------------ |
| `nome, email, senha, telefone` | `string` | **Obrigatório**|

Exemplo que pode ser adicionado no Body: 

{
    "name": "John Doe",
    "email": "johndoe@example.com",
    "password":1234567,
    "cpf": "123.456.789-00"
}

## Realizar o consumo da API - **Autenticação**

POST  /api/login

| Parâmetro   | Tipo       | Descrição                                   |
| :---------- | :--------- | :------------------------------------------ |
| `email, senha` | `string` | **Obrigatório**|

{
    "email": "johndoe@example.com"
    "password":1234567,
}




