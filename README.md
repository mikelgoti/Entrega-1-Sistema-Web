# LAMP ESTRUCTURA + PAGINAWEB
## apache + database + phpmyadmin docker compose configuracion

El archivo docker-compose.yml se encarga de descargar las imagenes necesarias para crear la estructura que permite lanzar una pagina web en cualquier medio. 
La ventaja principal de utilizar docker-compose es que es rapido y portable. Si en vez de querer lanzar mi web quisieramos abrir cualquier otra seria tan facil como agregarla a la carpeta **app/**. Esta carpeta esta vinculada en la linea 8 a la imagen descargada de apache automaticamente.  
```
- ./directorionuevo:/var/www/html/
```

Tambien hacemos uso de un archivo de confiuracion de docker **Dockerfile**. El cual se construye en la **linea 2 mediante la sentencia build: .** En el archivo Dockerfile se pueden implementar todas las instrucciones o comandos especificos deseados. En nuestro caso solamente le indicamos la version 8.0.0 de apache porque con las otras e tenido algun problema con las imagenes. Y tambien instalamos una extension para mysqli. Si quisieramos por ejemplo ejecutar un update y upgrade del sistema antes de ejecutar la instalacion de la extension. Se podría agregar una linea:
```
RUN sudo apt-get uptade && sudo apt-get upgrade -y
```
### Instrucciones para ejecutar el docker-compose.yml y abrir la pagina web. 
1. Copiar la url del repositorio donde se encunetra el proyecto:
```
https://github.com/mikelgoti/LAMPSTRUCTURE-USING-DOCKERCOMPOSE.git
```
2. Abrir una terminal git en el directorio donde queramos que se descargue el proyecto. Por ejemplo, en el escritorio. Una vez abierta la terminal ejecutamos el siguiente comando:
```
git clone https://github.com/mikelgoti/LAMPSTRUCTURE-USING-DOCKERCOMPOSE.git
```
3. Una vez se descargue el proyecto ubicamos una terminal donde se haya descargado y accedemos a el.
```
cd LAMPSTRUCTURE-USING-DOCKERCOMPOSE/
```
4. Una vez dentro del proyecto solamente hay que ejecutar un comando para levantar los tres servicios necesarios para abrir la pagina web.
```
docker-compose up
```
5. Si quisieramos **ejecutarlo en segundo** plano solo hay que añadir la flag -d al final del comando.
```
docker-compose up -d
```

 
