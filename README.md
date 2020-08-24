# AdminLTE dengan Laravel 7
Admin LTE dengan Component Laravel 7

## Instalasi
Instal adminlte dengan composer :

`composer require aldhix/adminlte`



Setelah instalasi berhasil, registrasi provider pada file `config/app.php` pada bagian `providers`:
<pre>'providers' => [
    ...............
    Aldhix\Adminlte\ServiceProvider::class,
]</pre>

publish provider pada laravel :

`php artisan vendor:publish --provider=Aldhix\Adminlte\ServiceProvider`

Untuk mengujicoba pada route tambahkan route demo `AdminlteDemo::routes()` buat server laravel ( `php artisan serv` ), kemudian ketikan pada browser http://localhost:8000/demo 

