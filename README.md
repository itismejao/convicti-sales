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

- instalar Dependencias:

```
docker-compose exec app composer i
```

- Rodar Migrations e Seeders: 
```
docker-compose exec app php artisan migrate --seed
```
Obs: Laravel oferece a opção de criar o banco caso não tenha criado "sales-control"

- Rodar os testes: 
```
docker-compose exec app php artisan test
```
Obs: Os testes nesse caso estão sendo feitos no banco da aplicação mas num cenário real é necessário um .ev.testing para um ambiente de testes

### 📖 Documentação da API

Foi criado um documento para facilitar o entendimento da api, que pode ser acessado atráves do link: 
https://documenter.getpostman.com/view/17548537/2s9Y5eNzBQ
