# Not So Dropbox

__Not So Dropbox__ es una aplicación web durante durante el curso de __Desarrollo web en Entorno Servidor__.

## Instalación del proyecto

Una vez instalado el stack de desarrollo, clonar el repositorio:

```bash
git clone https://github.com/ganaram/NotSoDropbox
```

Entrar el el directorio e instalar todas las dependencias:

```bash
composer install
```

Crear en el servidor __MySql__ dos bases de datos con nombres __'ibdb'__ e __'ibdb_telescope'__ (sin las comillas). Asimismo configurar un usuario (nombre y contraseña) con permisos suficiente de acceso a dichas bases de datos. 

Renombrar el archivo __.env.example__ a __.env__ cumplimentando los datos de acceso al SGBD:

```php
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=notSoDropboxDB
DB_USERNAME=usuario_mysql
DB_PASSWORD=password_mysql
```

Generar la clave de cifrado, sin ella no podremos conectar a la DB:

```bash
php artisan key:generate
```

Lanzar las migraciones cargando de datos la base de datos con los sedes:

```bash
php artisan migrate --seed
```

Llegados a este punto la aplicación ya debe funcionar y ser operativa desde la url [http://notSoDropbox.test](http://ibdb.test) (si se ha utilizado __Laravel Valet__).