Instalación del proyecto:
- composer install

Esto va a instalar las dependencias que se encuentran en el composer.json incluyendo el nuwave/lighthouse y el playground.
El graphql-playground es para ejecutar consultas graphql desde el navegador accediendo a traves de la url: http://127.0.0.1:8000/graphql-playground.
Esta consola funciona igual que postman, donde se podrá también realizar el CRUD a la base de datos.

Dejo una imagen dockerizada para su fácil portabilidad, y dejo un dump.sql de la base de datos para su importación.

Importación del docker:
Desde la terminal, navega al directorio donde colocaste el archivo .tar
Ejecuta el siguiente comando para cargar la imagen Docker desde el archivo .tar:
docker load -i api-graphql.tar

Importación del dump.sql:
Asegúrate de tener el contenedor MySQL ejecutándose antes de ejecutar este comando.
Y verifica el nombre de tu contenedor MySQL con el comando docker ps antes de ejecutar el comando:
docker exec -i api-graphql-db-1 mysql -u root -psecurepassword apigraphql < dump.sql

Una vez instalada la imagen del docker y el dump, levanta el proyecto como un servidor local. Usando el comando:
php artisan serve

Consultas para testear la api mutante:

Para obtener todos los post (READ):
{
  allPosts {
    id
    name
    text
    created_at
    updated_at
  }
}


Para crear un post (CREATE):

Borrar un post (DELETE):

Actualizar un post (UPDATE):
mutation {
  updatePost(id: 8, name: "Post de prueba 8", text: "Contenido del post de prueba 8") {
    id
    name
    text
    created_at
    updated_at
  }
}