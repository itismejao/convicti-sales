# Teste técnico de desenvolvedor Web Backend Laravel.

##  Instruções

### 📋 Pré-Requisitos para instalação e execução:

```
- Docker
```

### 🔧 Instalação e Execução

Executar os seguintes comandos para trabalhar localmente:

- Criar o .env copiando do example através do comando: 
```
cp .env.example .env (linux)
ou
copy .env.example .env (windows)
```

- Subir containers:

```
docker-compose up -d
```

- Rodar Migrations e Seeders: 
```
docker-compose exec app php artisan migrate --seed
```

- Rodar os testes: 
```
docker-compose exec app php artisan test
```

### 📖 Documentação da API

Foi criado um documento para facilitar o entendimento da api, que pode ser acessado atráves do link: 
https://documenter.getpostman.com/view/17548537/2s9Y5eNzBQ
