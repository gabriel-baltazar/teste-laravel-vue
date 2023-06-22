<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Como executar projeto
- O backend foi utilizado o docker sail nativo do laravel portato para rodar o projeto tenha o docker instalado em sua maquina.
- E para executar o frontend é necessario ter o Node.js instalado tambem na versao 20.3.0

- Passos:
- Clone o repositório
- `git clone https://github.com/gabriel-baltazar/teste-laravel-vue.git`
- Rode o comando abaixo na pasta chamada api para instalar todas as dependencias do backend
    - `composer install`
- Inicie o docker na maquina e rode o comando abaixo para subir o docker e o backend da aplicação
    - `./vendor/bin/sail up`
    - Ira rodar no endereço `http://localhost`
- Altere o arquivo .env.example para .env
- Rode as migrações com o comando abaixo:
    - `./vendor/bin/sail artisan migrate`
- Rode os seeders para ja popular o banco com produtos de teste:
    - `./vendor/bin/sail artisan db:seed --class=ProductSeeder`
- Rode o comando abaixo na pasta chamada vue-app para instalar todas as dependencias do frontend
    - `npm install`
- Entre no `localhost:3000` e faça os testes
- A api possui testes unitarios do crud, uma possivel melhoria seria testar nao apenas o crud mas tambem outros cenarios dependendo a regra de negocios porem para o cenario do teste atual não era necessario:
    - `./vendor/bin/sail artisan test`

## Rotas da api

#### Retorna todos os produtos

```http
GET /api/products
```
#### Retorna um produto

```http
GET /api/products/${id}
```

| Parâmetro   | Tipo       | Descrição                                   |
| :---------- | :--------- | :------------------------------------------ |
| `id`      | `string` | O ID do produto |

#### Cria um novo produto

```http
POST /api/products
```

| Parâmetro   | Tipo       | Descrição                                   |
| :---------- | :--------- | :------------------------------------------ |
| `name`      | `string` |Nome do produto |
| `description`     | `file`   |Descrição do produto |
| `tension`| `datetime` |Tensão eletrica padrão do produto |
| `brand`  | `string` |Marca do produto |

#### Atualiza dados do produto

```http
PUT /api/products/${id}
```

| Parâmetro   | Tipo       | Descrição                                   |
| :---------- | :--------- | :------------------------------------------ |
| `id`      | `string` |Id do produto |
| `name`      | `string` |Nome do produto |
| `description`     | `file`   |Descrição do produto |
| `tension`| `datetime` |Tensão eletrica padrão do produto |
| `brand`  | `string` |Marca do produto |

#### Exclui o produto

```http
DELETE /api/products/${id}
```

| Parâmetro   | Tipo       | Descrição                                   |
| :---------- | :--------- | :------------------------------------------ |
| `id`      | `string` |Id do evento |