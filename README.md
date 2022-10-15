# LAMP ESTRUCTURA + PAGINAWEB
## apache + database + phpmyadmin docker compose configuracion

MIKEL GOTI GARAYALDE

El archivo docker-compose.yml se encarga de descargar las imagenes necesarias para crear la estructura que permite lanzar una pagina web en cualquier medio. 
La ventaja principal de utilizar docker-compose es que es rapido y portable. Si en vez de querer lanzar mi web quisieramos abrir cualquier otra seria tan facil como sustituir a la carpeta **app/**, la cual es la que contiene la web.  
```
- ./directorionuevo:/var/www/html/
```
### Instrucciones para ejecutar el docker-compose.yml y abrir la pagina web. 
1. Copiar la url del repositorio donde se encunetra el proyecto:
```
https://github.com/mikelgoti/Entrega-1-Sistema-Web
```
2. Abrir una terminal git en el directorio donde queramos que se descargue el proyecto. Por ejemplo, en el escritorio. Una vez abierta la terminal ejecutamos el siguiente comando:
```
https://github.com/mikelgoti/Entrega-1-Sistema-Web.git
```
3. Una vez se descargue el proyecto ubicamos una terminal donde se haya descargado y accedemos a el.
```
cd LAMPSTRUCTURE-USING-DOCKERCOMPOSE/
```
4. Una vez dentro del proyecto solamente hay que ejecutar un comando para levantar los tres servicios necesarios para abrir la pagina web.
```
docker-compose up
```
Si quisieramos **ejecutarlo en segundo** plano solo hay que añadir la flag -d al final del comando.
```
docker-compose up -d
```

5. Una vez esten la imagenes en funcionamiento hay que entrar en phpmyadmin para poder importar el archivo database.sql. Para ello en el navegador hay que poner la siguiente direccion:
```
localhost:8890
```
Para acceder a phpmyadmin *USUARIO: admin PASSWORD: test*

6. Una de las imagenes que hemos descargado con docker-compose será mysql en concreto *mariadb* esto creara un archivo mysql en la carpeta del proyecto. El cual iniciara una base de datos database dentro de phpmyadmin. Dentro de phpmyadmin hay que clicar en la base de datos database que estará vacia. Para importar clica en *importar* arriba donde estan todas las opciones. Buscar en el proyecto el archivo database.sql e importarlo. 

7. El archivo contiene dos tablas *iniciados* e *todo*. Una vez importadas y en funcionamiento se puede acceder a la pagina web introduciendo la siguiente direccion en el navegador.

```
localhost:81
```
8. Ya puedes utilizar la pagina web sin nigun problema. Para seguir viendo que es lo que puede hacer la pagina web y sus curiosidades esta todo redactado en el archivo documentacion.pdf del proyecto.
 
