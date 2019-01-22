<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Sobre o Projeto

Esse projeto serve como teste para um processo seletivo


## Instalação

- Excute os comando abaixo em seu terminal 
- `git clone https://github.com/l3k/crud-laravel.git`
- Entre no diretório `cd crud-laravel`
- `cp .env.example .env`
- `composer install`
- `npm install`
- `php artisan key:generate`
- Edite o arquivo que esta na raiz do projeto `.env` e defina os detalhes da sua conexão de banco de dados
- `php artisan migrate`
- Ao rodar o comando `php artisan db:seed` o mesmo irá criar um usuário administrador para controlar os demais usuários
- `php artisan serve`
- O acesso do administrador é e-mail: sa@mail.com e a senha é 123456


## Licença

O framework Laravel é um software de código aberto licenciado sob a [MIT license](https://opensource.org/licenses/MIT).
