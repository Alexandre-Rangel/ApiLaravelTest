
# Sistema de Api


## Deploy

Para fazer o deploy desse projeto rode

```bash
  composer install
```
Depois adicione as informações no .env do projeto relacionados ao banco de dados

```bash
DB_HOST=
DB_PORT=
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

rode o comando 
```bash
  php artisan key:generate
```

a seguir inicie o servidor para testes

```bash
  php artisan serve
```


Assim que iniciar o servidor a rota deve ser inserida no sistema que irá fazer a leitura dessa Api

As Rotas são as seguintes:

```bash
GET      /api/products/       Listar Todos
GET      /api/products/{id}   Listar Um Produto
POST     /api/products/       Cadastrar Um Produto
PUT      /api/products/{id}   Alterar Um Produto
DELETE   /api/products/{id}   Deletar Um Produto
```
        