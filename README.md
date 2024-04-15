<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Site Web de prezentare pentru Raspberry Pi 5

- Site-ul web prezinta diverse aspecte ale Raspberry Pi, inclusiv caracteristicile sale, o scurta prezentare a sistemului de operare, proiecte realizate folosind Raspberry Pi si informatii de contact inclusiv o metoda de abonare la newsletter.

## Caracteristici cheie
- Meniu de navigare catre diferite sectiuni ale site-ului
- Header care afiseaza un banner cu informatii despre Raspberry care include si un efect parallax la deplasarea cursorului.
- Sectiuni precum "Noutati" cu noile caracteristici ale placutei, "Sistemul de operare" cu o scurta prezentare si un link catre descarcarea acestuia, "Proiecte" cu diferite realizari practice folosind Raspberry si sectiunea de "Contact" cu un camp de introducere a datelor pentru abonarea la un newsletter.
- Footer cu diferite link-uri.

## Tehnologii utilizate
- Laravel 11 utilizat pentru dezvoltarea back-end cat si pentru interactiunile cu baza de date.
- MariaDB utilizat ca sistem de gestionare a bazei de date pentru a stoca si gestiona datele legate de site-ul web.
- HTML pentru structura continutului
- CSS pentru stilizarea anumitor componente si pentru layout
- Javascript pentru adaugarea interactivitatii si comportamentului dinamic
- Bootstrap utilizat pentru stilizarea componentelor, layout si design-ul responsive
- Vite.Js pentru gestionarea de assets
- Google Maps API pentru afisarea unei harti
- PHP folosit in cadrul Larravel pentru scriptare si procesare pe server
- Composer pentru geestionarea dependentelor PHP in cadrul unui proiect Laravel
- npm utilizat pentru gestionarea dependentelor Javascript 

## Instructiuni de rulare a proiectului

1. **Setup**:
- Descarcati PHP: https://www.php.net/downloads
  Dupa descarcare, dezarhivati continutul fisierului intr-un folder si plasati folder-ul in C:\, de exemplu C:\php
  Adaugati folder-ul PHP in path:
  Accesați Start > Setări. În caseta de dialog Setări, tastați „variabile de mediu” în bara de căutare. Faceți clic pe Editați variabilele de mediu ale sistemului. Apare caseta de dialog System Properties.
  Faceți clic pe butonul Variabile de mediu. Apare dialogul Variabile de mediu.
  Selectați variabila Cale sub Variabile de sistem din jumătatea inferioară a ferestrei și apoi faceți clic pe Editare. Apare dialogul Editare variabile de mediu.
  Adăugați ;C:\php la variabila cale. Faceți clic pe Ok pentru a confirma.
  Faceți clic pe Ok în dialogul Variabile de mediu.
  Reporniți toate ferestrele de linie de comandă deschise pentru ca noile setări să aibă efect. 
- Instalati Composer: https://getcomposer.org/download/
- Instalati Node.js: https://nodejs.org/en/download
- Instalati MariaDB:  https://mariadb.org/download/?t=mariadb&p=mariadb&r=11.3.2&os=windows&cpu=x86_64&pkg=msi&mirror=chroot-network
- Rulati utilizand Terminal pentru a clona proiectul: https://github.com/dincadaniel146/rpi5.git

2. **Configurarea bazei de date**:
- Intrati in Client-ul MySQL(instalat odata cu MariaDB) si conectati-va utilizand parola setata in timpul instalarii.
- Creati o baza de date numita "tema1": 
  CREATE DATABASE tema1;
- Creati un utilizator numit "admin". Acest utilizator va fi folosit in Laravel pentru a citi din baza de date. Inlocuiti "1234" cu o parola sigura:
  CREATE USER 'admin'@'localhost' IDENTIFIED BY '1234';
  GRANT ALL PRIVILEGES ON tema1.* TO 'admin'@'localhost'
- Creati un tabel in baza de date si indicati coloanele acestuia:
  CREATE TABLE `newsletter` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nume` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `data_abonare` timestamp NOT NULL DEFAULT current_timestamp(),
  `mesaj` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
)
 - Actualizati fisierul .env din folder-ul radacina al proiectului sa foloseasca baza de date creata:
 DB_DATABASE=tema1 
 DB_USERNAME=admin
 DB_PASSWORD=1234 (inlocuiti cu parola setata de dvs.)
 3. **Instalarea Dependentelor**
 - Deschideti un Terminal in folderul radacina al proiectului
 - Rulati: `composer install` pentru a instala dependentele PHP
 - Rulati: `npm install` pentru a instala dependentele Javascript
 4. **Compilarea de assets**
 - Rulati: `npm run dev` pentru a compila stilurile pentru pagina.
 5. **Rularea server-ului**
 - Rulati `php artisan serve` pentru a porni server-ul Laravel
 - Odata pornit, navigati catre localhost: http://127.0.0.1:8000
## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
