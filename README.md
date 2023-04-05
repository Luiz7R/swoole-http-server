# Projeto Swoole MVC

## Criado uma Aplicação no Padrão MVC Utilizando Swoole

### o Objeto da criação desse projeto foi para aprender o Swoole e estudar a fundo sobre ele utilizar requisições assincronas no PHP, para depois aprender o Framework HyperF que é baseado no Swoole.

<br>

* e também com middlewares definidos de forma intuitiva, com rotas e templates

* Utilizando autorização de Usuário, cache.

<br>

## Rodar MySQL com o Docker

docker compose up -d

### Arquivo .env.example tutorial para conexão do MySQL

#
<br>


## Instalando o Swoole

Instale as dependências necessárias para Swoole:

```
sudo apt-get install -y git php-dev php-pear libpcre3-dev gcc make
```

Clone o repositório Swoole:

```
git clone https://github.com/swoole/swoole-src.git
```

Entre na pasta, e faça o build e a instalação da extensão:

```
phpize
./configure
make && sudo make install
```

Adicione a extensão Swoole ao seu arquivo php.ini:

```
echo "extension=swoole.so" | sudo tee -a /etc/php/8.1/cli/php.ini
```
Substituia 8.1 pela sua versão do PHP.

### Cria as Tabelas Executando os comandos:

```
php insert_users_table.php

php insert_posts_table.php
```

### Agora só rodar o projeto:

```
php index.php
```
