### Instalação



Subir os containers do projeto
```sh
docker-compose up -d --build
```

Acessar o container

Windows
```sh
./bash.bat
```
Linux / Mac
```sh
chmod +x ./bash.sh
```
```sh
./bash.sh
```


Instalar as dependências do projeto
```sh
composer install
```

Gerar a key do projeto Laravel
```sh
php artisan key:generate
```


# Acessando o projeto
Projeto
[http://localhost:8080](http://localhost:8080)

phpMyAdmin
[http://localhost:8081](http://localhost:8081)
