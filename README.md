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
5. Si quisieramos **ejecutarlo en segundo** plano solo hay que añadir la flag -d al final del comando.
```
docker-compose up -d
```

 
