# TP Docker TODO

Image Docker simple pour servir l'application TODO avec PHP 8 et Apache.

## But du TP

Ce TP sert a apprendre a creer une image Docker transportable pour une application web.
L'objectif est de pouvoir lancer l'application sur n'importe quelle machine sans reconfigurer l'environnement.

Ce que tu revois rapidement avec ce TP :
- choisir une image de base adaptee (ici `php:8-apache`)
- copier les sources de l'application dans l'image (`COPY src/ /var/www/html/`)
- construire l'image avec `docker build`
- lancer un conteneur et acceder a l'application via le port mappe

## Build

```bash
docker build --tag "php-todo:latest" .
```

## Run

```bash
docker run -p 8888:80 php-todo:latest
```

Application disponible sur http://localhost:8888