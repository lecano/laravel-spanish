[![StyleCI](https://github.styleci.io/repos/541347347/shield?branch=master)](https://github.styleci.io/repos/541347347?branch=master)

# Laravel Idioma Español - Laravel Spanish Language

Paquete de traducciones en español para Laravel 9.x. 

Este paquete agrega a tu proyecto los archivos de traducciones en español para:

- Laravel
- Breeze
- Laravel UI
- Fortify

La estructura de archivos es:

```
lang/es/auth.php
lang/es/passwords.php
lang/es/pagination.php
lang/es/validation.php
lang/es.json
```

Este proyecto mantiene la escencia del paquete `laraveles/spanish` pero actualizado para laravel 9.x.

Las fuentes de traducción provienen principalmente del proyecto `laravel-lang/lang` que ahora requiere compilar las traducciones con paquetes adicionales.

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

**Opcionalmente podemos copiar y pegar el contenido de la carpeta "/resources/lang" de este paquete y pegarlo en la carpeta "/lang" de nuestro proyecto Laravel.*

Finalmente modificamos el parámetro `locale` de la configuración en `config/app.php`:

```
'locale' => 'es',
```

# Contribuciones

Se aceptan contribuciones siguiendo el [GitHub Flow](https://guides.github.com/introduction/flow). Crea una rama, agrega commits y abre un pull request.

# Licencia

Software de código abierto con licencia [MIT license](LICENSE).
