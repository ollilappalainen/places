# Places
Places is an GIS app that uses Google Maps Api, JavaScript, Php/Laravel and PostgreSql, that user can go and pin places on map.

## System requirements

### API
  * PHP version 7.2.2
  * Composer version 1.6.3
  * Laravel Framework with Artisan version 5.6.3

### Database
Client already uses open PostgreSQL database, but if you want to have a local DB running you'll need:
  Table: 
  * places

  Columns:
  * id: auto-increment
  * title: string
  * description: text
  * geometry_lat: string
  * geometry_lng: string
  * opening: time
  * closing: time
  * is_favorite: boolean

### Client
  * npm version 5.1.0
  * node http-server for local run

## Installation

Run API
  * copy the .env-example file and rename it as .env, then fill it with your local database settings
  * Run 'composer install'
  * Run 'php artisan migrate' or 'php artisan migrate --force' if needed to migrate database
  * Run 'php artisan serve' in the api root directory
  * Client http request uses locally URL 'http://127.0.0.1:8000/api/'

Run Client
  * Clone client source from https://github.com/ollilappalainen/places-client
  * Or in places root directory clone submodule using 'git clone --recurse-submodules https://github.com/ollilappalainen/places-client.git'
  * in places-client directory run 'npm install'
  * run 'http-server'
  * App should be running now in localhost:8080
  * If you need to change the API url, you can go change the 'apiUrl' variable value in ./places-client/src/services/places-service.js

### Known problems
  * Info windows won't automatically close when another is opened
  * If multiple info windows are opened, only the data of the first is shown and the site has to be refreshed
  * Info window styles are ugly
  * Filter checkboxes are unaligned
  * Search by title might cause an error in Element.remove() function if used too rapidly
  * Favorites are not saved in cookies, so they are global
  * App uses browser alerts..
  * App does now know keywords yet
  * http requests are slow because of a slow db service
  * Adding, removing and modifying places might jam the markers and info windows.. then press F5