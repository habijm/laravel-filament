

## Laravel Filament

- [Sumber Belajar](https://www.youtube.com/watch?v=7JkyghTVpW0&list=PL6tf8fRbavl3jfL67gVOE9rF0jG5bNTMi&index=4).
- [Dokumentasi](https://filamentphp.com/).


- Instalasi
```
composer require filament/filament:"^3.2" -W
 
php artisan filament:install --panels
```

- Membuat User
```
php artisan make:filament-user
```

- Membuat resource Filament baru dalam aplikasi Laravel
```
php artisan make:filament-resource User --generate --view
```

- Membuat Filament relation manager
```
php artisan make:filament-relation-manager CountryResource states name
```
Perintah ini akan menghasilkan file-file yang diperlukan dan mengatur manajemen relasi states dalam CountryResource di panel admin Filament Anda.