<p align="center">
  <a href="" rel="noopener">
 <img width=400px height=200px src="https://simplonline.co/_next/image?url=https%3A%2F%2Fsimplonline-v3-prod.s3.eu-west-3.amazonaws.com%2Fmedia%2Fimage%2Fpng%2F848ae791-7122-4229-9ff9-fdc209c6cd09.png&w=1280&q=75" alt="Project logo"></a>
</p>

<h3 align="center">Ecommerce Gentis</h3>

<div align="center">

[![Status](https://img.shields.io/badge/status-development-yellow.svg)]()
[![GitHub Issues](https://img.shields.io/github/issues/adriansunye/portfolio-client.svg)](https://github.com/adriansunye/ecommerce-gentis-client/issues)
[![GitHub Pull Requests](https://img.shields.io/github/issues-pr/adriansunye/ecommerce-gentis-client.svg)](https://github.com/adriansunye/ecommerce-gentis-client/pulls)
[![License](https://img.shields.io/badge/license-Gentis-blue.svg)](/LICENSE)

</div>

---

<p align="center"> Web desenvolupada per al tractament dels cursos oferits per Gentis
    <br> 
</p>

## 📝 Table of Contents

- [📝 Table of Contents](#-table-of-contents)
- [🧐 About ](#-about-)
- [Technologies](#technologies)
- [Installation](#installation)
- [Versions](#versions)
- [✍️ Authors ](#️-authors-)
- [FAQs](#faqs)


## 🧐 About <a name = "about"></a>

La fundación Gentis tiene como objetivos ayudar a las personas en situación de desempleo a llegar a la acción formativa (cursos) que desean y necesitan, más rápido y sin más complejidad innecesaria y así mejorar su ocupabilidad. Por otro lado, yudar al equipo de formaciñón en la tarea de capacitación y selección de alumnado para todos los cursos de formación ocupacional que tienen diseminados por diferentes puntos territoriales de Cataluña.

***

## Technologies
The project was developed with the following technologies
git add .
* PHP
* Laravel 9
* PhpMyAdmin
* Node Js
* Npm

***

## Installation

1- Install PHP and Composer on your computer. You can find instructions for this on the [PHP website](https://www.php.net/)

2- Clone the app's repository from GitHub on this [link](https://github.com/Gentis-Team/Gentis-formacion-server.git)

3- Install the app's dependencies using Composer: <br/>
`composer install`

4- Create a new file named .env and enter your credentials<br/>
`cp .env.example .env`

5- Install the app's JavaScript dependencies using npm:<br/>
`npm install`

6- Create the database using a relational database<br/>

7- Run the migrations to create the tables, factories, controllers, models & seeders:<br/>
´php artisan make:model nameOfTable -m -f --api´ & ´php artisan make:seeder nameOfTable´

8- Run the migrations to create the tables and relationships, and populate the data with the seeders:<br/>
´php artisan migrate:fresh --seed´

9- Run the app using PHP:<br/>
`php artisan serve`

10- Install prettier test:<br/>
´composer require sempro/phpunit-pretty-print --dev´

11- Run test:<br/>
You can specify the printer to use on the phpunit command line:

For PhpUnit < 9, use the following:
´php vendor/bin/phpunit --printer 'Sempro\PHPUnitPrettyPrinter\PrettyPrinter' tests/´

For PhpUnit >= 9, use the following:
´php vendor/bin/phpunit --printer 'Sempro\PHPUnitPrettyPrinter\PrettyPrinterForPhpUnit9' tests/´

***

## Versions

PHP 8.0.2<br>
laravel/framework: 9.19

***

## ✍️ Authors <a name = "authors"></a>

- [@LidiaLG](https://github.com/LidiaLG)
- [@IngridB-afk](https://github.com/IngridB-afk)
- [@camilorocca](https://github.com/camilorocca)
- [@ecp12](https://github.com/ecp12)
- [@adriansunye](https://github.com/adriansunye)

***
## FAQs

We'll fill this field when you ask something


