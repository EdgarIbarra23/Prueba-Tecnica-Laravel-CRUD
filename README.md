#Prueba Técnica de la Empresa [Jacs3d](https://jacs3d.com/)

####Utilizar [Laravel](https://laravel.com/) como framework para el desarrollo.

<p>Implementar una API RESTFUL que proporcione endpoints para:</p>

- Crear un nuevo registro.
- Leer todos los registros.
- Leer un registro específico por su ID.
- Actualizar un registro existente.
- Eliminar un registro.


- Utilizar Eloquent ORM para interactuar con la base de datos.
- Utilizar controladores y rutas de Laravel para manejar las solicitudes HTTP.
- Utilizar migraciones de Laravel para crear la estructura de la base de datos.
- Implementar validación de datos en el backend.

#####Atributos de la Base de Datos:

| Nombre | Edad | Grado | Correo | Fecha de Registro |
| ------------------------ | ---------------------- | --------------------------------------------- | ------------------------------------- | ------------------------------------------------------------ |
| Nombre el Estudiante | Edad del Estudiante | Grado al que pertenece el Estudiante | Correo Electronico del Estudiante | Fecha en la que se registró el Estudiante en el Sistema |

<hr>

##Instalaciones Necesarias 
<p>Estas Instalaciones no afectan la Versión de Laravel que desean utilizar.</p>

- **[Composer](https://getcomposer.org/)**
- **[Xampp](https://www.apachefriends.org/es/index.html)**
- **[Node JS](https://nodejs.org/en)**
- **[Git](https://git-scm.com/)**

<hr>

##Mi Historia en la Prueba

<p>Habia aplicado a la oferta de Practicante de Tecnologo en Analisis y Desarrollo de Software en la Empresa Jacs3d el 12 de Marzo de 2024, en la cual me respondieron con un correo a las 2:02 pm del 15 de Marzo de 2024 donde me informaron que me comunicara con ellos por via WhatsApp, dada la casualidad ese dia habia salido a las 12:15 pm hacer una compras regresando a la casa a las 5:15 pm donde me comunique con ellos a las 5:18 pm, despues de una preguntas me comentaron de que la prueba habia iniciado ese mismo dia  a las 10:00 am pero me darian la oportunidad de participar y estarian disponibles hasta las 10:00 pm, si lograba terminar la prueba harian la revision a esa misma hora si no podia terminarla entonces la revisarian el 18 de Marzo de 2024 a las 10:00 am. 

Luego de haber recibido los requerimiento para la Prueba, Inicie el 15 de Marzo de 2024 a las 5:45 pm pero tenia una problema y era porque nunca habia usado Laravel aunque sabia un poquito de PHP y haber usado el Framework CodeIgniter 4, sabia de estas tecnologias porque la Clases de mi Etapa Lectiva lo requeria pero despues de comenzar la Etapa Productiva que fue el 23 de Septiembre de 2023 nunca más volvi a saber de PHP y CodeIgniter 4, por lo que al tener que aprender un nuevo Framework en 4 horas era dificil con funcionalidad CRUD y entre otras cosas, por lo que me habia puesto a mirar un canal de Youtube **[Coders Free](https://www.youtube.com/@CodersFree)** que contaba con una **[PlayList de Laravel 10](https://www.youtube.com/playlist?list=PLZ2ovOgdI-kWWS9aq8mfUDkJRfYib-SvF)**, comenze a realizar la Prueba pero no tenia la Esperanza de que iba a quedar en la Empresa y  poder hacer mis practicas.

Por muy impresionante que sea cuando llego las 10:00 pm solo me faltaban tres requerimiento en la prueba las cuales eran: 

- Actualizar un registro existente
- Eliminar un Registro
- Validacion de datos en el BackEnd

Luego me comunique con el Encargado de la Prueba y le explique que todavia no habia terminado la Prueba y luego de haberle dicho cuales requerimiento me faltaban, me dijo que no me preocupara y que lo terminara que el 18 de Marzo a las 10:00 am harian una reunion por Meet en la que ellos revisarian y me tocaria explicarles sobre la Prueba que realize, en ese mismo instante segui realizando la Prueba hasta que por fin lo termine el 19 de Marzo a las 3:05 am.
</p>

<hr>

##Recomendaciones por si quieres Clonar el Repositorio

#####En mi Caso utilize [Laravel en la Versión 10](https://laravel.com/docs/10.x)

- Instale **[Tailwind CSS](https://tailwindcss.com/docs/guides/laravel)** para los Estilos en Laravel, si deseas Visualizar y Actualizar los Estilos, es necesario que en la terminal ejecutes este comando: `npm run dev`
- El Gestor de Base de Datos es **phpMyAdmin** el cual **Xampp** maneja
- El nombre que utilize para la Base de Datos fue **prueba-tecnica-jacs3d**
- Utilizar las Migraciones de Laravel para Crear las Tablas de la Base de Datos usando este comando en la Terminal: `php artisan migrate`
- Desde Laravel los Datos que Utilice para la Conexión con la Base de Datos fueron en la Conexion **mysql**, en el Puerto **3307**, el Usuario **root** y no tiene Contraseña