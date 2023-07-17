## Nombre: José Emmanuel Quiroz Cortez.

Instrucciones para desplegar el sistema:

1.- Requisitor: Composer, PHP, NodeJS y MySQL

2.- Vaya al directorio donde tiene composer.json con el símbolo del sistema y ejecute el siguiente comando: composer install

3.- En el directorio del proyecto realizar el siguiente comando: npm install

4.- Dentro del Gestor de base de datos, crear la base de datos con el comando: CREATE DATABASE api

5.- Dentro del directorio del proyecto ejecutar el siguiente comando: php artisan migrate

6.- Para poblar nuestro proyecto, dentro del mismo ejecutar el siguient comando: php artisan db:seed

7.- Para correr el proyecto es necesario ejecutar el comando: php artisan serve

##### Endpoints de la Api

Peticiones para rol Administrador
POST = api/auth/register
Parametros = {name, email, password, role}
Respuesta de la peticion = 
{
    "status": "success",
    "message": "User created successfully",
    "user": {
        "name": "Lupe",
        "email": "lupe_12@gmail.com",
        "updated_at": "2023-07-17T04:22:23.000000Z",
        "created_at": "2023-07-17T04:22:23.000000Z",
        "id": 24
    }
}

POST = api/auth/login
Parametros = {email, password}
Respuesta de la peticion =
{
    "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYXBpL2F1dGgvbG9naW4iLCJpYXQiOjE2ODk1NjgyMjEsImV4cCI6MTY4OTU3MTgyMSwibmJmIjoxNjg5NTY4MjIxLCJqdGkiOiJmbHBWNlNyZDh1bmRBR1J5Iiwic3ViIjoiMjMiLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.LJUxHxa5qEhWPZ9VMHM1QJzvl6yxUq6d_XuPRN-v83c",
    "user": {
        "id": 23,
        "name": "Mario",
        "email": "mario_12@gmail.com",
        "email_verified_at": null,
        "created_at": "2023-07-17T04:21:00.000000Z",
        "updated_at": "2023-07-17T04:21:00.000000Z"
    }
}


GET = api/users
Parametro = {Authorization:token}
Respuesta de la peticion = 
{
     "data": [
        {
            "id": 1,
            "name": "User one",
            "email": "example@example.com",
            "roles": [
                {
                    "id": 2,
                    "name": "user",
                    "slug": "unprivileged user",
                    "description": "2023-07-16 00:28:32",
                    "created_at": "2023-07-16T00:28:32.000000Z",
                    "updated_at": "2023-07-16T00:28:32.000000Z",
                    "pivot": {
                        "user_id": 1,
                        "role_id": 2
                    }
                }
            ]
        },
     ]
}

POST api/users/create
Parametro = {Authorization:token}
Respuesta de la peticion = 
{
    "status": "success",
    "message": "User created successfully",
    "user": {
        "id": 27,
        "name": "Pancho",
        "email": "pancho_13@gmail.com",
        "role": [
            {
                "id": 2,
                "name": "user",
                "slug": "unprivileged user",
                "description": "2023-07-16 00:28:32",
                "created_at": "2023-07-16T00:28:32.000000Z",
                "updated_at": "2023-07-16T00:28:32.000000Z",
                "pivot": {
                    "user_id": 27,
                    "role_id": 2
                }
            }
        ]
    }
}

POST api/users/edit
Parametro = {Authorization:token}
Respuesta de la peticion = 
{
     "status": "success",
    "message": "User updated successfully",
    "user": {
        "id": 27,
        "name": "Pancho",
        "email": "pancho_13@gmail.com",
        "role": [
            {
                "id": 2,
                "name": "user",
                "slug": "unprivileged user",
                "description": "2023-07-16 00:28:32",
                "created_at": "2023-07-16T00:28:32.000000Z",
                "updated_at": "2023-07-16T00:28:32.000000Z",
                "pivot": {
                    "user_id": 27,
                    "role_id": 2
                }
            }
        ]
    }
}

DELETE api/users/delete/27
Parametro = {Authorization:token}
Respuesta de la peticion = 
{
     "status": "sucess",
    "message": "User deleted successfully.",
    "user": {
        "id": 27,
        "name": "Pancho",
        "email": "pancho_13@gmail.com",
        "role": [
            {
                "id": 2,
                "name": "user",
                "slug": "unprivileged user",
                "description": "2023-07-16 00:28:32",
                "created_at": "2023-07-16T00:28:32.000000Z",
                "updated_at": "2023-07-16T00:28:32.000000Z",
                "pivot": {
                    "user_id": 27,
                    "role_id": 2
                }
            }
        ]
    }
}

Peticiones para Rol Usuario
GET = api/users
Parametro = {Authorization:token}
Respuesta de la peticion = 
{
     "data": [
        {
            "id": 1,
            "name": "User one",
            "email": "example@example.com",
            "roles": [
                {
                    "id": 2,
                    "name": "user",
                    "slug": "unprivileged user",
                    "description": "2023-07-16 00:28:32",
                    "created_at": "2023-07-16T00:28:32.000000Z",
                    "updated_at": "2023-07-16T00:28:32.000000Z",
                    "pivot": {
                        "user_id": 1,
                        "role_id": 2
                    }
                }
            ]
        },
     ]
}
