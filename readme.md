# Laravel Ember Todo List App

## Prerequisites

You will need the following things properly installed on your computer.
* [XAMP](https://www.apachefriends.org/index.html)/[MAMP](https://www.mamp.info/en/), [Laravel 4.2](https://laravel.com/docs/4.2)
* [Git](https://git-scm.com/)
* [Node.js](https://nodejs.org/) (with NPM)
* [Ember CLI](https://ember-cli.com/)
* [Google Chrome](https://google.com/chrome/)

## There are few ways to run the app:

1. Laravel & Ember as sperate apps - Serve as Laravel App with Ember client 
2. Ember & Mirage - Run it as Ember App with Mirage as a backend
3. Laravel & Ember with a server - For example serve it localy from XAMPP as a Laravel App with Ember client 

### Laravel & Ember as sperate apps

* Download or clone this repo
* Inside the the app root clone the client app as follows >git clone [https://github.com/Kamran21/Todos-Ember-Client.git](https://github.com/Kamran21/Todos-Ember-Client.git)
* From within the repo/Todos-Ember-Client go to app/adapters/application.js make sure the host prperty is set to http://localhost:8000
* Now open command prompt and cd into the app
* Run the following: >npm run server
* Open another command prompt and cd into the app
* Run the following: >npm run client
* Open [http://localhost:4200](http://localhost:4200) in your browser

### Ember & Mirage

* You dont need to download this repo instead go to [Todos-Ember-Client](https://github.com/Kamran21/Todos-Ember-Client.git)
* >git clone [https://github.com/Kamran21/Todos-Ember-Client.git](https://github.com/Kamran21/Todos-Ember-Client.git)
* From within the repo folder go to app/adapters/application.js comment the host property in the json object 
* Now open command prompt and cd into the app
* Run the following: >Ember serve
* Open [http://localhost:4200](http://localhost:4200) in your browser

### Laravel & Ember with a local server

* Download or clone this repo
* Inside the the app root clone the client app as follows >git clone [https://github.com/Kamran21/Todos-Ember-Client.git](https://github.com/Kamran21/Todos-Ember-Client.git)
* place the app inside your server public folder - In XAMMP->htdocs for example.
* Now open command prompt and cd into the app 
* Run the following: >npm run build
* Start the server and navigate to localhost/repo/public
* [https://www.youtube.com/watch?v=N_Pa1f7VF0s](setup a virtual host in XAMMP) and then navigate to the virtual URL you set



## Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/downloads.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, and caching.

Laravel aims to make the development process a pleasing one for the developer without sacrificing application functionality. Happy developers make the best code. To this end, we've attempted to combine the very best of what we have seen in other web frameworks, including frameworks implemented in other languages, such as Ruby on Rails, ASP.NET MVC, and Sinatra.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the entire framework can be found on the [Laravel website](http://laravel.com/docs).

### Contributing To Laravel

**All issues and pull requests should be filed on the [laravel/framework](http://github.com/laravel/framework) repository.**

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
