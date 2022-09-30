[![StyleCI](https://github.styleci.io/repos/541347347/shield?branch=master)](https://github.styleci.io/repos/541347347?branch=master)

# Laravel Idioma Español - Laravel Spanish Language

Paquete de traducciones en español para Laravel 9.x. 

Este paquete agrega a tu proyecto los archivos de traducciones en español para:

- Laravel
- Breeze
- Laravel UI
- Fortify

# Instalación

Podemos instalar este paquete mediante composer:

```bash
composer require lecano/laravel-spanish
```

Ahora necesitamos agregar las traducciones con el siguiente comando:

```bash
php artisan vendor:publish --provider="Lecano\Spanish"
```

O también podemos usar el comando:

```bash
php artisan spanish:install
```

Modificamos el parámetro `locale` de la configuración en `config/app.php`:

```
'locale' => 'es',
```

# Contribuciones

Se aceptan contribuciones siguiendo el [GitHub Flow](https://guides.github.com/introduction/flow). Crea una rama, agrega commits y abre un pull request.

# Licencia

Software de código abierto con licencia [MIT license](LICENSE).
