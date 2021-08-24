# Laravel Microservices com RabbitMQ (Micro 02)

## Requisitos
Este microservice 02 depende do microservice 01, portanto, primeiramente subir o [microservice 01]()

### Instalação
Clonar Projeto
```sh
//
```

Acessar o projeto
```sh
//
```

Criar o Arquivo .env
```sh
cp .env.example .env
```

Subir os containers do projeto
```sh
docker-compose up -d
```

Acessar o container
```sh
docker-compose exec micro_02 bash
```

Instalar as dependências do projeto
```sh
composer install
```

Gerar a key do projeto Laravel
```sh
php artisan key:generate
```

Rodar os testes
```sh
php artisan test
```

Acessar o projeto
[http://localhost:8001](http://localhost:8001)
