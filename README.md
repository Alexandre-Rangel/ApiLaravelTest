
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