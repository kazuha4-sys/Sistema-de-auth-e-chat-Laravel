<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>



# Sistema de Auth, chat e de posts

## Sobre
Este projeto é um **sistema completo de autenticação, chat e de poss** feito com **Laravel** usando o **Breeze** e **MySQL** como database.

---

## Tecnologia & Stack 
- **laravel** 
- **Breeze** para Auth 
- **Blade** para views
- **MySQL** como database 
- **TailwindCDN** 

---

## Funcionalidades
✅ Cadastro e login de users  
✅ Tela de dashboard (pode por mais coisa)  
✅ Sistema de chat em tempo real (via polling ou Pusher, depende do que tu escolheu)  
✅ Listagem de mensagens  
✅ Logout  
✅ Tudo protegido por auth

---

## Como rodar o projeto 

- **Clone o repositorio**
```bash 
git clone https://github.com/kazuha4-sys/Sistema-de-auth-e-chat-Laravel.git
cd Sistema-de-auth-e-chat-Laravel
```

- **Instalação**
```bash 
composer install
```

- **Copia o .env**
```bash
cp .env.example .env
```

- **Gera a key do laravel**
```bash
php artisan key:generate
```

- **Configura o banco no .env**
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=teu_banco
DB_USERNAME=teu_user
DB_PASSWORD=senha_aqui
```

- **Roda as migrations**
```bash 
php artisan migrate
```
- ** Liga o serve
```bash 
php artisan serve
```
Acesse a URl *http://localhost:8000/*

---

## Futuras ideias

- Botão de deletar conta
- Chat com upload de imagem
- Notificação real-time
- Dark mode

---

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
