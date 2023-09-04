# WeLoveDevs podcast player app

This a project to test the following stack: 

- Laravel: https://laravel.com/
- Livewire v3: https://livewire.laravel.com/
- Laravel Volt: https://livewire.laravel.com/docs/volt
- Laravel Folio: https://laravel.com/docs/10.x/folio

The objective is an desktop app to play the WeLoveDevs podcast episodes (https://welovedevs.com/fr/tag/le-podcast/)

With persistent player even when pages are changed. And page prefetching on links hover.

## Installing the project

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/10.x/installation)

Clone the repository
```bash
git clone git@github.com:DamienToscano/welovedevs-podcast.git
```

Install all the dependencies using composer
```bash
composer install
```

Install all the dependencies using npm
```bash
npm install
```

Install NativePhp using the doc here:
```bash
php artisan native:install
```

## Local Development

I personnaly use Laravel Sail to run the app locally -> https://laravel.com/docs/10.x/sail

But in a native php environment, you can run the following command:

```bash
php artisan native:serve
```

Launch npm
```bash
npm run dev
```

## Data

No migration is needed, the data is stored in the `Episode` Model and fetched with Eloquen thanks to https://usesushi.dev/

## Enjoy!
