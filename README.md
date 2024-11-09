# Proyecto de Portafolio

Este es un proyecto de portafolio creado en Laravel que incluye un panel de administración. Este portafolio permite a los usuarios mostrar sus trabajos, proyectos y habilidades, mientras que el panel de administración proporciona una interfaz fácil de usar para gestionar el contenido.

## Tecnologías Utilizadas

-   **Laravel**: Framework PHP para el backend.
-   **MySQL**: Base de datos para almacenar la información.
-   **CSS3**: CSS para el diseño y la estructura del frontend.
-   **javascript**: JavaScript para facilitar las interacciones y el DOM.

## Características

-   **Panel de Administración**: Gestión de proyectos, categorías y usuarios.
-   **Autenticación de Usuarios**: Registro, inicio de sesión.
-   **CRUD de Proyectos**: Crear, leer, actualizar y eliminar proyectos desde el panel de administración.
-   **CRUD de Educación**: Crear, leer, actualizar y eliminar cada uno de los estudios realizados.
-   **CRUD de Experiencia**: Crear, leer, actualizar y eliminar cada una de las experiencias laborales.
-   **CRUD de Habilidades**: Crear, leer, actualizar y eliminar cada una de las habilidades que tiene.
-   **Responsivo**: Diseño adaptable a dispositivos móviles y de escritorio.

## Instalación

Sigue estos pasos para instalar y configurar el proyecto en tu entorno local:

1. Clona el repositorio:

```
   git clone https://github.com/shamirtano/portafolio_admin.git
   cd portafolio_admin
```

2. Instala las dependencias

```
composer install
npm install && npm run build
```

3. Configura las variables de entorno del proyecto

```
cp .env.example .env
```

4. Configura la base de datos

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=portafolio_admin
DB_USERNAME=root
DB_PASSWORD=
```

5. Agrega el key y realiza las migraciones

```
php artisan key:generate

php artisan migrate

php artisan db:seed
```

6. Por último ejecuta el proyecto

```
php artisan serve
```

Abre tu navegador web y ve a `http://localhost:8000` para ver tu proyecto.

## Capturas de Pantalla

Agrega aquí algunas capturas de pantalla del proyecto para que los usuarios puedan ver una vista previa de la interfaz.

## Contribuir

Si deseas contribuir a este proyecto, por favor sigue estos pasos:

1. Realiza un fork del repositorio.
2. Crea una rama para tu función (feature) (git checkout -b feature/nueva-funcion).
3. Realiza commit de tus cambios (git commit -am 'Añadir nueva función').
4. Publica tu rama (git push origin feature/nueva-funcion).
5. Abre un Pull Request.

## Licencia

Este proyecto está licenciado bajo la Licencia MIT. Para más información, por favor, revisa el archivo LICENSE.

¡Gracias por visitar mi portafolio! Si tienes alguna pregunta o sugerencia, no dudes en contactarme. 🚀📄✨
[![GitHub](https://img.shields.io/badge/GitHub-TuUsuario-blue?logo=github)](https://github.com/shamirtano)
