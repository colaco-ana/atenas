---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#Author


<!-- START_405a8a7729f51fc1f43466304b8a733e -->
## Display a listing of the authors.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/author" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/author"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "message": "Lista de Autores",
    "data": [
        {
            "id": 1,
            "name": "Célia Rodrigues",
            "description": "Parte da equipa de Infogafia do Público.",
            "email": "celia.rodrigues@publico.pt",
            "job_id": 19,
            "created_at": "2020-01-27 11:12:23",
            "updated_at": "2020-01-27 11:12:23",
            "deleted_at": null
        },
        {
            "id": 2,
            "name": "Andrea Espadinha",
            "description": "Designer do Público há 5 anos.",
            "email": "andrea.Espadinha@publico.pt",
            "job_id": 11,
            "created_at": "2020-01-27 11:12:23",
            "updated_at": "2020-01-27 11:12:23",
            "deleted_at": null
        },
        {
            "id": 3,
            "name": "Amílcar Correia",
            "description": "Director Adjunto, responsável pelo online do PÚBLICO.",
            "email": "acorreia@publico.pt",
            "job_id": 5,
            "created_at": "2020-01-27 11:12:23",
            "updated_at": "2020-01-27 11:12:23",
            "deleted_at": null
        },
        {
            "id": 4,
            "name": "Vítor Ferreira",
            "description": "Jornalistas do Público.",
            "email": "voferreira@publico.pt",
            "job_id": 1,
            "created_at": "2020-01-27 11:12:23",
            "updated_at": "2020-01-27 11:12:23",
            "deleted_at": null
        },
        {
            "id": 5,
            "name": "Leonete Botelho",
            "description": "Jornalistas do Público.",
            "email": "lbotelho@publico.pt",
            "job_id": 1,
            "created_at": "2020-01-27 11:12:24",
            "updated_at": "2020-01-27 11:12:24",
            "deleted_at": null
        },
        {
            "id": 6,
            "name": "Patrícia Carvalho",
            "description": "Jornalistas do Público.",
            "email": "patricia.carvalho@publico.pt",
            "job_id": 1,
            "created_at": "2020-01-27 11:12:24",
            "updated_at": "2020-01-27 11:12:24",
            "deleted_at": null
        },
        {
            "id": 7,
            "name": "Clara Barata",
            "description": "Faz parte da equipa do Público como Sub-Editora da categoria Mundo.",
            "email": "clara.barata@publico.pt",
            "job_id": 18,
            "created_at": "2020-01-27 11:12:24",
            "updated_at": "2020-01-27 11:12:24",
            "deleted_at": null
        },
        {
            "id": 8,
            "name": "Álvaro Domingues",
            "description": "Professor da Faculdade de Arquitetura da Universidade do Porto.",
            "email": "alvaro.domingues@publico.pt",
            "job_id": 3,
            "created_at": "2020-01-27 11:12:24",
            "updated_at": "2020-01-27 11:12:24",
            "deleted_at": null
        },
        {
            "id": 9,
            "name": "Sofia Neves",
            "description": "Jornalistas do Público.",
            "email": "sofia.neves@publico.pt",
            "job_id": 1,
            "created_at": "2020-01-27 11:12:24",
            "updated_at": "2020-01-27 11:12:24",
            "deleted_at": null
        },
        {
            "id": 10,
            "name": "Filipe Ribeiro",
            "description": "Designer Digital do Público.",
            "email": "filipe.ribeiro@publico.pt",
            "job_id": 20,
            "created_at": "2020-01-27 11:12:24",
            "updated_at": "2020-01-27 11:12:24",
            "deleted_at": null
        },
        {
            "id": 11,
            "name": "Miguel Esteves Cardoso",
            "description": "Colunista do Público.",
            "email": "opiniao@publico.pt",
            "job_id": 15,
            "created_at": "2020-01-27 11:12:24",
            "updated_at": "2020-01-27 11:12:24",
            "deleted_at": null
        }
    ],
    "result": "ok"
}
```

### HTTP Request
`GET api/author`


<!-- END_405a8a7729f51fc1f43466304b8a733e -->

<!-- START_4d022aeb22efa5bc9e7b10f4f4438544 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/author/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/author/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/author/create`


<!-- END_4d022aeb22efa5bc9e7b10f4f4438544 -->

<!-- START_fe2776bfa1ae79e84e85b35681fbd677 -->
## Store a newly created author in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/author" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"qui","description":"reprehenderit","email":"sit","job_id":16}'

```

```javascript
const url = new URL(
    "http://localhost/api/author"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "qui",
    "description": "reprehenderit",
    "email": "sit",
    "job_id": 16
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/author`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  required  | Author's name
        `description` | string |  required  | Author's description
        `email` | string |  required  | Author's e-mail
        `job_id` | integer |  required  | Author's job
    
<!-- END_fe2776bfa1ae79e84e85b35681fbd677 -->

<!-- START_42a3d84c30811b5dbf3e40825b48a3b6 -->
## Display the specified author.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/author/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/author/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "message": "Autor selecionado",
    "data": {
        "id": 1,
        "name": "Célia Rodrigues",
        "description": "Parte da equipa de Infogafia do Público.",
        "email": "celia.rodrigues@publico.pt",
        "job_id": 19,
        "created_at": "2020-01-27 11:12:23",
        "updated_at": "2020-01-27 11:12:23",
        "deleted_at": null
    },
    "result": "ok"
}
```

### HTTP Request
`GET api/author/{author}`


<!-- END_42a3d84c30811b5dbf3e40825b48a3b6 -->

<!-- START_6b775e13b3acfff575b1634e3dc94870 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/author/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/author/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/author/{author}/edit`


<!-- END_6b775e13b3acfff575b1634e3dc94870 -->

<!-- START_01320f72ae68149e85ed71ea3dacd6a5 -->
## Update the specified author in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/author/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"numquam","description":"explicabo","email":"autem","job_id":1}'

```

```javascript
const url = new URL(
    "http://localhost/api/author/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "numquam",
    "description": "explicabo",
    "email": "autem",
    "job_id": 1
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/author/{author}`

`PATCH api/author/{author}`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  optional  | Author's name
        `description` | string |  optional  | Author's description
        `email` | string |  optional  | Author's e-mail
        `job_id` | integer |  optional  | Author's profession
    
<!-- END_01320f72ae68149e85ed71ea3dacd6a5 -->

<!-- START_20e3b39de6d9d3439fefb9c1eaa22207 -->
## Remove the specified author from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/author/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/author/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/author/{author}`


<!-- END_20e3b39de6d9d3439fefb9c1eaa22207 -->

#Author and User Relationship


<!-- START_cf9306fc70024f49df932f6a8bf05a96 -->
## Display a listing of the users&#039; favorite authors.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/authorUser" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/authorUser"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "message": "Lista de Autor Favoritos dos Users",
    "data": [
        {
            "id": 1,
            "author_id": 11,
            "user_id": 5,
            "created_at": "2020-01-27 11:12:37",
            "updated_at": "2020-01-27 11:12:37",
            "deleted_at": null
        },
        {
            "id": 2,
            "author_id": 4,
            "user_id": 6,
            "created_at": "2020-01-27 11:12:37",
            "updated_at": "2020-01-27 11:12:37",
            "deleted_at": null
        },
        {
            "id": 3,
            "author_id": 5,
            "user_id": 7,
            "created_at": "2020-01-27 11:12:37",
            "updated_at": "2020-01-27 11:12:37",
            "deleted_at": null
        },
        {
            "id": 4,
            "author_id": 6,
            "user_id": 4,
            "created_at": "2020-01-27 11:12:38",
            "updated_at": "2020-01-27 11:12:38",
            "deleted_at": null
        },
        {
            "id": 5,
            "author_id": 9,
            "user_id": 3,
            "created_at": "2020-01-27 11:12:38",
            "updated_at": "2020-01-27 11:12:38",
            "deleted_at": null
        }
    ],
    "result": "ok"
}
```

### HTTP Request
`GET api/authorUser`


<!-- END_cf9306fc70024f49df932f6a8bf05a96 -->

<!-- START_f2cc7442120f5831230b92a84ffc3d79 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/authorUser/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/authorUser/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/authorUser/create`


<!-- END_f2cc7442120f5831230b92a84ffc3d79 -->

<!-- START_39edcadb2b64dd4a0408db515589558e -->
## Store a newly created user favorite author in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/authorUser" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"author_id":20,"user_id":1}'

```

```javascript
const url = new URL(
    "http://localhost/api/authorUser"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "author_id": 20,
    "user_id": 1
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/authorUser`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `author_id` | integer |  required  | Author id
        `user_id` | integer |  required  | User id
    
<!-- END_39edcadb2b64dd4a0408db515589558e -->

<!-- START_3930c9cb91dfc64f82fe0b55bb0e0529 -->
## Display the favorite author of the specified user.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/authorUser/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/authorUser/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "message": "Autor Favorito do User selecionado",
    "data": {
        "id": 1,
        "author_id": 11,
        "user_id": 5,
        "created_at": "2020-01-27 11:12:37",
        "updated_at": "2020-01-27 11:12:37",
        "deleted_at": null
    },
    "result": "ok"
}
```

### HTTP Request
`GET api/authorUser/{authorUser}`


<!-- END_3930c9cb91dfc64f82fe0b55bb0e0529 -->

<!-- START_5788e1c18fb9b746d8a7fd974daab06b -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/authorUser/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/authorUser/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/authorUser/{authorUser}/edit`


<!-- END_5788e1c18fb9b746d8a7fd974daab06b -->

<!-- START_c7a41861e771537a7d8a1320e11b0ade -->
## Update the user favorite author in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/authorUser/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"author_id":6,"user_id":14}'

```

```javascript
const url = new URL(
    "http://localhost/api/authorUser/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "author_id": 6,
    "user_id": 14
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/authorUser/{authorUser}`

`PATCH api/authorUser/{authorUser}`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `author_id` | integer |  optional  | Author id
        `user_id` | integer |  optional  | User id
    
<!-- END_c7a41861e771537a7d8a1320e11b0ade -->

<!-- START_71b089a7d85a8c3c4e7d6a1a143e2b84 -->
## Remove the specified user favorite author from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/authorUser/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/authorUser/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/authorUser/{authorUser}`


<!-- END_71b089a7d85a8c3c4e7d6a1a143e2b84 -->

#Category


<!-- START_db20564ba266cd451caac114b3eac8ab -->
## Display a listing of the category.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/category" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/category"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "message": "Lista de categorias",
    "data": [
        {
            "id": 1,
            "category": "Política",
            "image": "images\/categories\/politica.jpg",
            "created_at": "2020-01-27 11:12:09",
            "updated_at": "2020-01-27 11:12:09",
            "deleted_at": null
        },
        {
            "id": 2,
            "category": "Sociedade",
            "image": "images\/categories\/sociedade.jpg",
            "created_at": "2020-01-27 11:12:09",
            "updated_at": "2020-01-27 11:12:09",
            "deleted_at": null
        },
        {
            "id": 3,
            "category": "Local",
            "image": "images\/categories\/local.jpg",
            "created_at": "2020-01-27 11:12:09",
            "updated_at": "2020-01-27 11:12:09",
            "deleted_at": null
        },
        {
            "id": 4,
            "category": "Economia",
            "image": "economia.jpg",
            "created_at": "2020-01-27 11:12:09",
            "updated_at": "2020-01-27 11:12:09",
            "deleted_at": null
        },
        {
            "id": 5,
            "category": "Mundo",
            "image": "mundo.jpg",
            "created_at": "2020-01-27 11:12:09",
            "updated_at": "2020-01-27 11:12:09",
            "deleted_at": null
        },
        {
            "id": 6,
            "category": "Cultura",
            "image": "cultura.jpg",
            "created_at": "2020-01-27 11:12:09",
            "updated_at": "2020-01-27 11:12:09",
            "deleted_at": null
        },
        {
            "id": 7,
            "category": "Desporto",
            "image": "desporto.jpg",
            "created_at": "2020-01-27 11:12:10",
            "updated_at": "2020-01-27 11:12:10",
            "deleted_at": null
        },
        {
            "id": 8,
            "category": "Ciência",
            "image": "ciência.jpg",
            "created_at": "2020-01-27 11:12:10",
            "updated_at": "2020-01-27 11:12:10",
            "deleted_at": null
        },
        {
            "id": 9,
            "category": "Tecnologia",
            "image": "tecnologia.jpg",
            "created_at": "2020-01-27 11:12:10",
            "updated_at": "2020-01-27 11:12:10",
            "deleted_at": null
        },
        {
            "id": 10,
            "category": "Opinião",
            "image": "opiniao.jpg",
            "created_at": "2020-01-27 11:12:10",
            "updated_at": "2020-01-27 11:12:10",
            "deleted_at": null
        },
        {
            "id": 11,
            "category": "PGlobal",
            "image": "pglobal.jpg",
            "created_at": "2020-01-27 11:12:10",
            "updated_at": "2020-01-27 11:12:10",
            "deleted_at": null
        },
        {
            "id": 12,
            "category": "Editoriais",
            "image": "editoriais.jpg",
            "created_at": "2020-01-27 11:12:10",
            "updated_at": "2020-01-27 11:12:10",
            "deleted_at": null
        },
        {
            "id": 13,
            "category": "Bartoon",
            "image": "bartoon.jpg",
            "created_at": "2020-01-27 11:12:10",
            "updated_at": "2020-01-27 11:12:10",
            "deleted_at": null
        },
        {
            "id": 14,
            "category": "Ensaio",
            "image": "ensaio.jpg",
            "created_at": "2020-01-27 11:12:10",
            "updated_at": "2020-01-27 11:12:10",
            "deleted_at": null
        },
        {
            "id": 15,
            "category": "Bem-Estar",
            "image": "bemestar.jpg",
            "created_at": "2020-01-27 11:12:10",
            "updated_at": "2020-01-27 11:12:10",
            "deleted_at": null
        },
        {
            "id": 16,
            "category": "Alimentação",
            "image": "alimentacao.jpg",
            "created_at": "2020-01-27 11:12:10",
            "updated_at": "2020-01-27 11:12:10",
            "deleted_at": null
        },
        {
            "id": 17,
            "category": "Relações",
            "image": "relacoes.jpg",
            "created_at": "2020-01-27 11:12:10",
            "updated_at": "2020-01-27 11:12:10",
            "deleted_at": null
        },
        {
            "id": 18,
            "category": "Moda",
            "image": "moda.jpg",
            "created_at": "2020-01-27 11:12:10",
            "updated_at": "2020-01-27 11:12:10",
            "deleted_at": null
        },
        {
            "id": 19,
            "category": "Beleza",
            "image": "beleza.jpg",
            "created_at": "2020-01-27 11:12:10",
            "updated_at": "2020-01-27 11:12:10",
            "deleted_at": null
        },
        {
            "id": 20,
            "category": "Casa",
            "image": "casa.jpg",
            "created_at": "2020-01-27 11:12:10",
            "updated_at": "2020-01-27 11:12:10",
            "deleted_at": null
        },
        {
            "id": 21,
            "category": "Pessoas",
            "image": "pessoas.jpg",
            "created_at": "2020-01-27 11:12:10",
            "updated_at": "2020-01-27 11:12:10",
            "deleted_at": null
        },
        {
            "id": 22,
            "category": "Viagens",
            "image": "viagens.jpg",
            "created_at": "2020-01-27 11:12:10",
            "updated_at": "2020-01-27 11:12:10",
            "deleted_at": null
        },
        {
            "id": 23,
            "category": "Passeios",
            "image": "passeios.jpg",
            "created_at": "2020-01-27 11:12:10",
            "updated_at": "2020-01-27 11:12:10",
            "deleted_at": null
        },
        {
            "id": 24,
            "category": "Hóteis",
            "image": "hoteis.jpg",
            "created_at": "2020-01-27 11:12:10",
            "updated_at": "2020-01-27 11:12:10",
            "deleted_at": null
        },
        {
            "id": 25,
            "category": "Gastronomia",
            "image": "gastronomia.jpg",
            "created_at": "2020-01-27 11:12:10",
            "updated_at": "2020-01-27 11:12:10",
            "deleted_at": null
        },
        {
            "id": 26,
            "category": "Bares",
            "image": "bares.jpg",
            "created_at": "2020-01-27 11:12:10",
            "updated_at": "2020-01-27 11:12:10",
            "deleted_at": null
        },
        {
            "id": 27,
            "category": "Protagonista",
            "image": "protagonista.jpg",
            "created_at": "2020-01-27 11:12:10",
            "updated_at": "2020-01-27 11:12:10",
            "deleted_at": null
        },
        {
            "id": 28,
            "category": "Atualidade",
            "image": "atualidade.jpg",
            "created_at": "2020-01-27 11:12:10",
            "updated_at": "2020-01-27 11:12:10",
            "deleted_at": null
        },
        {
            "id": 29,
            "category": "Vícios",
            "image": "vicios.jpg",
            "created_at": "2020-01-27 11:12:11",
            "updated_at": "2020-01-27 11:12:11",
            "deleted_at": null
        },
        {
            "id": 30,
            "category": "Multimédia",
            "image": "multimedia.jpg",
            "created_at": "2020-01-27 11:12:11",
            "updated_at": "2020-01-27 11:12:11",
            "deleted_at": null
        },
        {
            "id": 31,
            "category": "Causas",
            "image": "causas.jpg",
            "created_at": "2020-01-27 11:12:11",
            "updated_at": "2020-01-27 11:12:11",
            "deleted_at": null
        },
        {
            "id": 32,
            "category": "Megafone",
            "image": "megafone.jpg",
            "created_at": "2020-01-27 11:12:11",
            "updated_at": "2020-01-27 11:12:11",
            "deleted_at": null
        },
        {
            "id": 33,
            "category": "Pet",
            "image": "pet.jpg",
            "created_at": "2020-01-27 11:12:11",
            "updated_at": "2020-01-27 11:12:11",
            "deleted_at": null
        },
        {
            "id": 34,
            "category": "Estreias",
            "image": "estreias.jpg",
            "created_at": "2020-01-27 11:12:11",
            "updated_at": "2020-01-27 11:12:11",
            "deleted_at": null
        },
        {
            "id": 35,
            "category": "Trailers",
            "image": "trailers.jpg",
            "created_at": "2020-01-27 11:12:11",
            "updated_at": "2020-01-27 11:12:11",
            "deleted_at": null
        },
        {
            "id": 36,
            "category": "Em-Breve",
            "image": "embreve.jpg",
            "created_at": "2020-01-27 11:12:11",
            "updated_at": "2020-01-27 11:12:11",
            "deleted_at": null
        },
        {
            "id": 37,
            "category": "Críticas",
            "image": "criticas.jpg",
            "created_at": "2020-01-27 11:12:11",
            "updated_at": "2020-01-27 11:12:11",
            "deleted_at": null
        },
        {
            "id": 38,
            "category": "Notícias",
            "image": "noticias.jpg",
            "created_at": "2020-01-27 11:12:11",
            "updated_at": "2020-01-27 11:12:11",
            "deleted_at": null
        },
        {
            "id": 39,
            "category": "Passatempo",
            "image": "passatempo.jpg",
            "created_at": "2020-01-27 11:12:11",
            "updated_at": "2020-01-27 11:12:11",
            "deleted_at": null
        }
    ],
    "result": "ok"
}
```

### HTTP Request
`GET api/category`


<!-- END_db20564ba266cd451caac114b3eac8ab -->

<!-- START_ec11475782f550e9415364d0e8774ea0 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/category/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/category/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/category/create`


<!-- END_ec11475782f550e9415364d0e8774ea0 -->

<!-- START_894ef06ce7a41cb47f9c434fcd778d9a -->
## Store a newly created category in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/category" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"category":"voluptatem","image":"eligendi"}'

```

```javascript
const url = new URL(
    "http://localhost/api/category"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "category": "voluptatem",
    "image": "eligendi"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/category`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `category` | string |  required  | Category name
        `image` | image |  required  | Category image
    
<!-- END_894ef06ce7a41cb47f9c434fcd778d9a -->

<!-- START_977e23840a7e9249b1f7136f1eadabe2 -->
## Display the specified category.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/category/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/category/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "message": "Categoria selecionada",
    "data": {
        "id": 1,
        "category": "Política",
        "image": "images\/categories\/politica.jpg",
        "created_at": "2020-01-27 11:12:09",
        "updated_at": "2020-01-27 11:12:09",
        "deleted_at": null
    },
    "result": "ok"
}
```

### HTTP Request
`GET api/category/{category}`


<!-- END_977e23840a7e9249b1f7136f1eadabe2 -->

<!-- START_f29d34640ef1a69ac4a6e1495464a3bc -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/category/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/category/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/category/{category}/edit`


<!-- END_f29d34640ef1a69ac4a6e1495464a3bc -->

<!-- START_ed2985a22796532e66be664ff9783124 -->
## Update the specified category in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/category/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"category":"nam","image":"autem"}'

```

```javascript
const url = new URL(
    "http://localhost/api/category/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "category": "nam",
    "image": "autem"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/category/{category}`

`PATCH api/category/{category}`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `category` | string |  optional  | Category name
        `image` | image |  optional  | Category image
    
<!-- END_ed2985a22796532e66be664ff9783124 -->

<!-- START_c663adad7473b698445af374c584ba20 -->
## Remove the specified category from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/category/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/category/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/category/{category}`


<!-- END_c663adad7473b698445af374c584ba20 -->

#Category and Publication Relationship


<!-- START_532843003f2a791144d4418ce3b780ca -->
## Display a listing of the connections between categories and publications.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/categoryPublication" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/categoryPublication"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "message": "Lista de ligações das categorias às publicações",
    "data": [
        {
            "id": 1,
            "category_id": 1,
            "publication_id": 1,
            "created_at": "2020-01-27 11:12:39",
            "updated_at": "2020-01-27 11:12:39",
            "deleted_at": null
        },
        {
            "id": 2,
            "category_id": 2,
            "publication_id": 1,
            "created_at": "2020-01-27 11:12:39",
            "updated_at": "2020-01-27 11:12:39",
            "deleted_at": null
        },
        {
            "id": 3,
            "category_id": 3,
            "publication_id": 1,
            "created_at": "2020-01-27 11:12:39",
            "updated_at": "2020-01-27 11:12:39",
            "deleted_at": null
        },
        {
            "id": 4,
            "category_id": 4,
            "publication_id": 1,
            "created_at": "2020-01-27 11:12:39",
            "updated_at": "2020-01-27 11:12:39",
            "deleted_at": null
        },
        {
            "id": 5,
            "category_id": 5,
            "publication_id": 1,
            "created_at": "2020-01-27 11:12:39",
            "updated_at": "2020-01-27 11:12:39",
            "deleted_at": null
        },
        {
            "id": 6,
            "category_id": 6,
            "publication_id": 1,
            "created_at": "2020-01-27 11:12:39",
            "updated_at": "2020-01-27 11:12:39",
            "deleted_at": null
        },
        {
            "id": 7,
            "category_id": 7,
            "publication_id": 1,
            "created_at": "2020-01-27 11:12:39",
            "updated_at": "2020-01-27 11:12:39",
            "deleted_at": null
        },
        {
            "id": 8,
            "category_id": 8,
            "publication_id": 1,
            "created_at": "2020-01-27 11:12:39",
            "updated_at": "2020-01-27 11:12:39",
            "deleted_at": null
        },
        {
            "id": 9,
            "category_id": 9,
            "publication_id": 1,
            "created_at": "2020-01-27 11:12:39",
            "updated_at": "2020-01-27 11:12:39",
            "deleted_at": null
        },
        {
            "id": 10,
            "category_id": 10,
            "publication_id": 1,
            "created_at": "2020-01-27 11:12:39",
            "updated_at": "2020-01-27 11:12:39",
            "deleted_at": null
        },
        {
            "id": 11,
            "category_id": 11,
            "publication_id": 1,
            "created_at": "2020-01-27 11:12:39",
            "updated_at": "2020-01-27 11:12:39",
            "deleted_at": null
        },
        {
            "id": 12,
            "category_id": 12,
            "publication_id": 2,
            "created_at": "2020-01-27 11:12:39",
            "updated_at": "2020-01-27 11:12:39",
            "deleted_at": null
        },
        {
            "id": 13,
            "category_id": 13,
            "publication_id": 2,
            "created_at": "2020-01-27 11:12:40",
            "updated_at": "2020-01-27 11:12:40",
            "deleted_at": null
        },
        {
            "id": 14,
            "category_id": 14,
            "publication_id": 2,
            "created_at": "2020-01-27 11:12:40",
            "updated_at": "2020-01-27 11:12:40",
            "deleted_at": null
        },
        {
            "id": 15,
            "category_id": 15,
            "publication_id": 4,
            "created_at": "2020-01-27 11:12:40",
            "updated_at": "2020-01-27 11:12:40",
            "deleted_at": null
        },
        {
            "id": 16,
            "category_id": 16,
            "publication_id": 4,
            "created_at": "2020-01-27 11:12:40",
            "updated_at": "2020-01-27 11:12:40",
            "deleted_at": null
        },
        {
            "id": 17,
            "category_id": 17,
            "publication_id": 4,
            "created_at": "2020-01-27 11:12:40",
            "updated_at": "2020-01-27 11:12:40",
            "deleted_at": null
        },
        {
            "id": 18,
            "category_id": 18,
            "publication_id": 4,
            "created_at": "2020-01-27 11:12:40",
            "updated_at": "2020-01-27 11:12:40",
            "deleted_at": null
        },
        {
            "id": 19,
            "category_id": 19,
            "publication_id": 4,
            "created_at": "2020-01-27 11:12:40",
            "updated_at": "2020-01-27 11:12:40",
            "deleted_at": null
        },
        {
            "id": 20,
            "category_id": 20,
            "publication_id": 4,
            "created_at": "2020-01-27 11:12:40",
            "updated_at": "2020-01-27 11:12:40",
            "deleted_at": null
        },
        {
            "id": 21,
            "category_id": 21,
            "publication_id": 4,
            "created_at": "2020-01-27 11:12:40",
            "updated_at": "2020-01-27 11:12:40",
            "deleted_at": null
        },
        {
            "id": 22,
            "category_id": 22,
            "publication_id": 5,
            "created_at": "2020-01-27 11:12:40",
            "updated_at": "2020-01-27 11:12:40",
            "deleted_at": null
        },
        {
            "id": 23,
            "category_id": 23,
            "publication_id": 5,
            "created_at": "2020-01-27 11:12:40",
            "updated_at": "2020-01-27 11:12:40",
            "deleted_at": null
        },
        {
            "id": 24,
            "category_id": 24,
            "publication_id": 5,
            "created_at": "2020-01-27 11:12:40",
            "updated_at": "2020-01-27 11:12:40",
            "deleted_at": null
        },
        {
            "id": 25,
            "category_id": 25,
            "publication_id": 5,
            "created_at": "2020-01-27 11:12:40",
            "updated_at": "2020-01-27 11:12:40",
            "deleted_at": null
        },
        {
            "id": 26,
            "category_id": 26,
            "publication_id": 5,
            "created_at": "2020-01-27 11:12:40",
            "updated_at": "2020-01-27 11:12:40",
            "deleted_at": null
        },
        {
            "id": 27,
            "category_id": 27,
            "publication_id": 5,
            "created_at": "2020-01-27 11:12:40",
            "updated_at": "2020-01-27 11:12:40",
            "deleted_at": null
        },
        {
            "id": 28,
            "category_id": 28,
            "publication_id": 6,
            "created_at": "2020-01-27 11:12:40",
            "updated_at": "2020-01-27 11:12:40",
            "deleted_at": null
        },
        {
            "id": 29,
            "category_id": 29,
            "publication_id": 6,
            "created_at": "2020-01-27 11:12:41",
            "updated_at": "2020-01-27 11:12:41",
            "deleted_at": null
        },
        {
            "id": 30,
            "category_id": 30,
            "publication_id": 6,
            "created_at": "2020-01-27 11:12:41",
            "updated_at": "2020-01-27 11:12:41",
            "deleted_at": null
        },
        {
            "id": 31,
            "category_id": 31,
            "publication_id": 6,
            "created_at": "2020-01-27 11:12:41",
            "updated_at": "2020-01-27 11:12:41",
            "deleted_at": null
        },
        {
            "id": 32,
            "category_id": 32,
            "publication_id": 6,
            "created_at": "2020-01-27 11:12:41",
            "updated_at": "2020-01-27 11:12:41",
            "deleted_at": null
        },
        {
            "id": 33,
            "category_id": 33,
            "publication_id": 6,
            "created_at": "2020-01-27 11:12:41",
            "updated_at": "2020-01-27 11:12:41",
            "deleted_at": null
        },
        {
            "id": 34,
            "category_id": 34,
            "publication_id": 7,
            "created_at": "2020-01-27 11:12:41",
            "updated_at": "2020-01-27 11:12:41",
            "deleted_at": null
        },
        {
            "id": 35,
            "category_id": 35,
            "publication_id": 7,
            "created_at": "2020-01-27 11:12:41",
            "updated_at": "2020-01-27 11:12:41",
            "deleted_at": null
        },
        {
            "id": 36,
            "category_id": 36,
            "publication_id": 7,
            "created_at": "2020-01-27 11:12:41",
            "updated_at": "2020-01-27 11:12:41",
            "deleted_at": null
        },
        {
            "id": 37,
            "category_id": 37,
            "publication_id": 7,
            "created_at": "2020-01-27 11:12:41",
            "updated_at": "2020-01-27 11:12:41",
            "deleted_at": null
        },
        {
            "id": 38,
            "category_id": 38,
            "publication_id": 7,
            "created_at": "2020-01-27 11:12:41",
            "updated_at": "2020-01-27 11:12:41",
            "deleted_at": null
        },
        {
            "id": 39,
            "category_id": 39,
            "publication_id": 7,
            "created_at": "2020-01-27 11:12:41",
            "updated_at": "2020-01-27 11:12:41",
            "deleted_at": null
        }
    ],
    "result": "ok"
}
```

### HTTP Request
`GET api/categoryPublication`


<!-- END_532843003f2a791144d4418ce3b780ca -->

<!-- START_0a4a852dd1144b5b4f2d1d7e17cb7ab7 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/categoryPublication/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/categoryPublication/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/categoryPublication/create`


<!-- END_0a4a852dd1144b5b4f2d1d7e17cb7ab7 -->

<!-- START_9aadeae08e9671696a02aab990117dd1 -->
## Store a newly created relationship between category and added publication in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/categoryPublication" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"category_id":13,"publication_id":12}'

```

```javascript
const url = new URL(
    "http://localhost/api/categoryPublication"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "category_id": 13,
    "publication_id": 12
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/categoryPublication`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `category_id` | integer |  required  | Category id
        `publication_id` | integer |  required  | Publication id
    
<!-- END_9aadeae08e9671696a02aab990117dd1 -->

<!-- START_f4d44907c441aa99e73443364527c884 -->
## Display the specified connection between category and publication.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/categoryPublication/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/categoryPublication/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "message": "Ligação selecionada",
    "data": {
        "id": 1,
        "category_id": 1,
        "publication_id": 1,
        "created_at": "2020-01-27 11:12:39",
        "updated_at": "2020-01-27 11:12:39",
        "deleted_at": null
    },
    "result": "ok"
}
```

### HTTP Request
`GET api/categoryPublication/{categoryPublication}`


<!-- END_f4d44907c441aa99e73443364527c884 -->

<!-- START_f98e89504c61754b0273ca76eaac4fd8 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/categoryPublication/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/categoryPublication/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/categoryPublication/{categoryPublication}/edit`


<!-- END_f98e89504c61754b0273ca76eaac4fd8 -->

<!-- START_1ae758c9297efe7f1354a97dac53eb7c -->
## Update the specified connection between category and publication in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/categoryPublication/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"category_id":12,"publication_id":3}'

```

```javascript
const url = new URL(
    "http://localhost/api/categoryPublication/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "category_id": 12,
    "publication_id": 3
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/categoryPublication/{categoryPublication}`

`PATCH api/categoryPublication/{categoryPublication}`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `category_id` | integer |  optional  | Category id
        `publication_id` | integer |  optional  | Publication id
    
<!-- END_1ae758c9297efe7f1354a97dac53eb7c -->

<!-- START_3a652f6d2b6fee0598846ce615ed4c6e -->
## Remove the specified connection between category and publication from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/categoryPublication/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/categoryPublication/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/categoryPublication/{categoryPublication}`


<!-- END_3a652f6d2b6fee0598846ce615ed4c6e -->

#Category and User Relationship


<!-- START_5d8b9cd457c001d49e958d3e65c0b8ad -->
## Display a listing of the users&#039; favorite categories.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/categoryUser" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/categoryUser"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "message": "Lista de Categorias Favoritas dos Users",
    "data": [
        {
            "id": 1,
            "category_id": 1,
            "user_id": 3,
            "created_at": "2020-01-27 11:12:45",
            "updated_at": "2020-01-27 11:12:45",
            "deleted_at": null
        },
        {
            "id": 2,
            "category_id": 4,
            "user_id": 3,
            "created_at": "2020-01-27 11:12:46",
            "updated_at": "2020-01-27 11:12:46",
            "deleted_at": null
        },
        {
            "id": 3,
            "category_id": 6,
            "user_id": 3,
            "created_at": "2020-01-27 11:12:46",
            "updated_at": "2020-01-27 11:12:46",
            "deleted_at": null
        },
        {
            "id": 4,
            "category_id": 39,
            "user_id": 3,
            "created_at": "2020-01-27 11:12:46",
            "updated_at": "2020-01-27 11:12:46",
            "deleted_at": null
        },
        {
            "id": 5,
            "category_id": 9,
            "user_id": 4,
            "created_at": "2020-01-27 11:12:46",
            "updated_at": "2020-01-27 11:12:46",
            "deleted_at": null
        },
        {
            "id": 6,
            "category_id": 17,
            "user_id": 4,
            "created_at": "2020-01-27 11:12:46",
            "updated_at": "2020-01-27 11:12:46",
            "deleted_at": null
        },
        {
            "id": 7,
            "category_id": 15,
            "user_id": 4,
            "created_at": "2020-01-27 11:12:46",
            "updated_at": "2020-01-27 11:12:46",
            "deleted_at": null
        },
        {
            "id": 8,
            "category_id": 20,
            "user_id": 4,
            "created_at": "2020-01-27 11:12:46",
            "updated_at": "2020-01-27 11:12:46",
            "deleted_at": null
        },
        {
            "id": 9,
            "category_id": 3,
            "user_id": 5,
            "created_at": "2020-01-27 11:12:46",
            "updated_at": "2020-01-27 11:12:46",
            "deleted_at": null
        },
        {
            "id": 10,
            "category_id": 16,
            "user_id": 5,
            "created_at": "2020-01-27 11:12:46",
            "updated_at": "2020-01-27 11:12:46",
            "deleted_at": null
        },
        {
            "id": 11,
            "category_id": 25,
            "user_id": 5,
            "created_at": "2020-01-27 11:12:46",
            "updated_at": "2020-01-27 11:12:46",
            "deleted_at": null
        },
        {
            "id": 12,
            "category_id": 33,
            "user_id": 5,
            "created_at": "2020-01-27 11:12:46",
            "updated_at": "2020-01-27 11:12:46",
            "deleted_at": null
        },
        {
            "id": 13,
            "category_id": 2,
            "user_id": 6,
            "created_at": "2020-01-27 11:12:46",
            "updated_at": "2020-01-27 11:12:46",
            "deleted_at": null
        },
        {
            "id": 14,
            "category_id": 6,
            "user_id": 6,
            "created_at": "2020-01-27 11:12:46",
            "updated_at": "2020-01-27 11:12:46",
            "deleted_at": null
        },
        {
            "id": 15,
            "category_id": 11,
            "user_id": 6,
            "created_at": "2020-01-27 11:12:46",
            "updated_at": "2020-01-27 11:12:46",
            "deleted_at": null
        },
        {
            "id": 16,
            "category_id": 38,
            "user_id": 6,
            "created_at": "2020-01-27 11:12:46",
            "updated_at": "2020-01-27 11:12:46",
            "deleted_at": null
        },
        {
            "id": 17,
            "category_id": 14,
            "user_id": 7,
            "created_at": "2020-01-27 11:12:46",
            "updated_at": "2020-01-27 11:12:46",
            "deleted_at": null
        },
        {
            "id": 18,
            "category_id": 25,
            "user_id": 7,
            "created_at": "2020-01-27 11:12:47",
            "updated_at": "2020-01-27 11:12:47",
            "deleted_at": null
        },
        {
            "id": 19,
            "category_id": 22,
            "user_id": 7,
            "created_at": "2020-01-27 11:12:47",
            "updated_at": "2020-01-27 11:12:47",
            "deleted_at": null
        },
        {
            "id": 20,
            "category_id": 35,
            "user_id": 7,
            "created_at": "2020-01-27 11:12:47",
            "updated_at": "2020-01-27 11:12:47",
            "deleted_at": null
        }
    ],
    "result": "ok"
}
```

### HTTP Request
`GET api/categoryUser`


<!-- END_5d8b9cd457c001d49e958d3e65c0b8ad -->

<!-- START_a87c27e52003a65e780e8e72241eebb9 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/categoryUser/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/categoryUser/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/categoryUser/create`


<!-- END_a87c27e52003a65e780e8e72241eebb9 -->

<!-- START_5089ab56d30c3698422b0b1d5ea3f9c8 -->
## Store a newly created user favorite category in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/categoryUser" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"category_id":10,"user_id":11}'

```

```javascript
const url = new URL(
    "http://localhost/api/categoryUser"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "category_id": 10,
    "user_id": 11
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/categoryUser`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `category_id` | integer |  required  | Category id
        `user_id` | integer |  required  | User id
    
<!-- END_5089ab56d30c3698422b0b1d5ea3f9c8 -->

<!-- START_3774a845f5c5b0aa4e1d42351aab952d -->
## Display the favorite category of the specified user.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/categoryUser/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/categoryUser/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "message": "Categoria Favorita do User selecionada",
    "data": {
        "id": 1,
        "category_id": 1,
        "user_id": 3,
        "created_at": "2020-01-27 11:12:45",
        "updated_at": "2020-01-27 11:12:45",
        "deleted_at": null
    },
    "result": "ok"
}
```

### HTTP Request
`GET api/categoryUser/{categoryUser}`


<!-- END_3774a845f5c5b0aa4e1d42351aab952d -->

<!-- START_b186b224606152e9546d9a557cab5199 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/categoryUser/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/categoryUser/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/categoryUser/{categoryUser}/edit`


<!-- END_b186b224606152e9546d9a557cab5199 -->

<!-- START_407e0a62b196e88212eda2872debaf06 -->
## Update the user favorite category in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/categoryUser/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"category_id":7,"user_id":18}'

```

```javascript
const url = new URL(
    "http://localhost/api/categoryUser/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "category_id": 7,
    "user_id": 18
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/categoryUser/{categoryUser}`

`PATCH api/categoryUser/{categoryUser}`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `category_id` | integer |  optional  | Category id
        `user_id` | integer |  optional  | User id
    
<!-- END_407e0a62b196e88212eda2872debaf06 -->

<!-- START_aa4fc74ff08ba89f52ef582123be581c -->
## Remove the specified user favorite category from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/categoryUser/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/categoryUser/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/categoryUser/{categoryUser}`


<!-- END_aa4fc74ff08ba89f52ef582123be581c -->

#Collection


<!-- START_eb783257bcc779ba25a708794d0ccbb1 -->
## Display a listing of the collections.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/collection" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/collection"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/collection`


<!-- END_eb783257bcc779ba25a708794d0ccbb1 -->

<!-- START_e30e6d3b3891f3211c1805fce50c02e1 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/collection/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/collection/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/collection/create`


<!-- END_e30e6d3b3891f3211c1805fce50c02e1 -->

<!-- START_a5ee9b59c13afa631dcff3557769d7cd -->
## Store a newly created collection in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/collection" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"collection":"aperiam","user_id":1}'

```

```javascript
const url = new URL(
    "http://localhost/api/collection"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "collection": "aperiam",
    "user_id": 1
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/collection`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `collection` | string |  required  | Collection Name
        `user_id` | integer |  required  | User id
    
<!-- END_a5ee9b59c13afa631dcff3557769d7cd -->

<!-- START_bbb23ffdf5bdba7fa7c98b0deba68866 -->
## Display the specified collection.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/collection/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/collection/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/collection/{collection}`


<!-- END_bbb23ffdf5bdba7fa7c98b0deba68866 -->

<!-- START_674669f1bd3c00322d95938bd695ab78 -->
## Show the form for editing the specified collection.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/collection/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"collection":"suscipit","user_id":15}'

```

```javascript
const url = new URL(
    "http://localhost/api/collection/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "collection": "suscipit",
    "user_id": 15
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/collection/{collection}/edit`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `collection` | string |  required  | Collection Name
        `user_id` | integer |  required  | User id
    
<!-- END_674669f1bd3c00322d95938bd695ab78 -->

<!-- START_0023ae9b2b0cd0e00d66374e4588ae11 -->
## Update the specified collection in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/collection/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"collection":"minima","user_id":4}'

```

```javascript
const url = new URL(
    "http://localhost/api/collection/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "collection": "minima",
    "user_id": 4
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/collection/{collection}`

`PATCH api/collection/{collection}`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `collection` | string |  optional  | Collection Name
        `user_id` | integer |  optional  | User id
    
<!-- END_0023ae9b2b0cd0e00d66374e4588ae11 -->

<!-- START_6309309db453212e96d5bb907ce10be0 -->
## Remove the specified collection from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/collection/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/collection/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/collection/{collection}`


<!-- END_6309309db453212e96d5bb907ce10be0 -->

#Job


<!-- START_e92c2cc288ee2a69ef89b50609ade7de -->
## Display a listing of the jobs.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/job" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/job"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "message": "Lista de Profissoes\r\n            ",
    "data": [
        {
            "id": 1,
            "job": "Jornalista",
            "created_at": "2020-01-27 11:12:12",
            "updated_at": "2020-01-27 11:12:12",
            "deleted_at": null
        },
        {
            "id": 2,
            "job": "Fotojornalista",
            "created_at": "2020-01-27 11:12:12",
            "updated_at": "2020-01-27 11:12:12",
            "deleted_at": null
        },
        {
            "id": 3,
            "job": "Geógrafo",
            "created_at": "2020-01-27 11:12:12",
            "updated_at": "2020-01-27 11:12:12",
            "deleted_at": null
        },
        {
            "id": 4,
            "job": "Editor de Política",
            "created_at": "2020-01-27 11:12:12",
            "updated_at": "2020-01-27 11:12:12",
            "deleted_at": null
        },
        {
            "id": 5,
            "job": "Diretor-Adjunto",
            "created_at": "2020-01-27 11:12:13",
            "updated_at": "2020-01-27 11:12:13",
            "deleted_at": null
        },
        {
            "id": 6,
            "job": "Diretor de Local",
            "created_at": "2020-01-27 11:12:13",
            "updated_at": "2020-01-27 11:12:13",
            "deleted_at": null
        },
        {
            "id": 7,
            "job": "Editor de Mundo",
            "created_at": "2020-01-27 11:12:13",
            "updated_at": "2020-01-27 11:12:13",
            "deleted_at": null
        },
        {
            "id": 8,
            "job": "Estagiária",
            "created_at": "2020-01-27 11:12:13",
            "updated_at": "2020-01-27 11:12:13",
            "deleted_at": null
        },
        {
            "id": 9,
            "job": "Diretora-Adjunta",
            "created_at": "2020-01-27 11:12:13",
            "updated_at": "2020-01-27 11:12:13",
            "deleted_at": null
        },
        {
            "id": 10,
            "job": "Jornalísta Estagiário",
            "created_at": "2020-01-27 11:12:13",
            "updated_at": "2020-01-27 11:12:13",
            "deleted_at": null
        },
        {
            "id": 11,
            "job": "Web Designer",
            "created_at": "2020-01-27 11:12:13",
            "updated_at": "2020-01-27 11:12:13",
            "deleted_at": null
        },
        {
            "id": 12,
            "job": "Economista",
            "created_at": "2020-01-27 11:12:13",
            "updated_at": "2020-01-27 11:12:13",
            "deleted_at": null
        },
        {
            "id": 13,
            "job": "Sociólogo",
            "created_at": "2020-01-27 11:12:13",
            "updated_at": "2020-01-27 11:12:13",
            "deleted_at": null
        },
        {
            "id": 14,
            "job": "Presidente do Instituto Superior Técnico",
            "created_at": "2020-01-27 11:12:13",
            "updated_at": "2020-01-27 11:12:13",
            "deleted_at": null
        },
        {
            "id": 15,
            "job": "Colunista",
            "created_at": "2020-01-27 11:12:13",
            "updated_at": "2020-01-27 11:12:13",
            "deleted_at": null
        },
        {
            "id": 16,
            "job": "Copy Editor",
            "created_at": "2020-01-27 11:12:13",
            "updated_at": "2020-01-27 11:12:13",
            "deleted_at": null
        },
        {
            "id": 17,
            "job": "Redatora Principal",
            "created_at": "2020-01-27 11:12:13",
            "updated_at": "2020-01-27 11:12:13",
            "deleted_at": null
        },
        {
            "id": 18,
            "job": "Sub-Editora do Mundo",
            "created_at": "2020-01-27 11:12:13",
            "updated_at": "2020-01-27 11:12:13",
            "deleted_at": null
        },
        {
            "id": 19,
            "job": "Infografia",
            "created_at": "2020-01-27 11:12:13",
            "updated_at": "2020-01-27 11:12:13",
            "deleted_at": null
        },
        {
            "id": 20,
            "job": "Designer Digital",
            "created_at": "2020-01-27 11:12:13",
            "updated_at": "2020-01-27 11:12:13",
            "deleted_at": null
        }
    ],
    "result": "ok"
}
```

### HTTP Request
`GET api/job`


<!-- END_e92c2cc288ee2a69ef89b50609ade7de -->

<!-- START_246419f684f26407a7c1ac372b36e88e -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/job/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/job/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/job/create`


<!-- END_246419f684f26407a7c1ac372b36e88e -->

<!-- START_aa0f5578c44fcf314d2465b700c11941 -->
## Store a newly created job in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/job" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"job":"impedit"}'

```

```javascript
const url = new URL(
    "http://localhost/api/job"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "job": "impedit"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/job`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `job` | string |  required  | Job name
    
<!-- END_aa0f5578c44fcf314d2465b700c11941 -->

<!-- START_a5ed034de46d08a56559ff94fc2c51e3 -->
## Display the specified job.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/job/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/job/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "message": "Autor selecionado",
    "data": {
        "id": 1,
        "job": "Jornalista",
        "created_at": "2020-01-27 11:12:12",
        "updated_at": "2020-01-27 11:12:12",
        "deleted_at": null
    },
    "result": "ok"
}
```

### HTTP Request
`GET api/job/{job}`


<!-- END_a5ed034de46d08a56559ff94fc2c51e3 -->

<!-- START_6830d79c191ce1a49e5c0c6262339447 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/job/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/job/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/job/{job}/edit`


<!-- END_6830d79c191ce1a49e5c0c6262339447 -->

<!-- START_b6ea67c80f56f4e0070ff46542700b5b -->
## Update the specified job in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/job/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"job":"earum"}'

```

```javascript
const url = new URL(
    "http://localhost/api/job/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "job": "earum"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/job/{job}`

`PATCH api/job/{job}`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `job` | string |  optional  | Job name
    
<!-- END_b6ea67c80f56f4e0070ff46542700b5b -->

<!-- START_99489cee938b424648566f36d0a892c2 -->
## Remove the specified job from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/job/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/job/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/job/{job}`


<!-- END_99489cee938b424648566f36d0a892c2 -->

#News


<!-- START_5dd1068d84cb8b472b4e1b34928a56af -->
## Display a listing of the news.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/news" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/news"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "message": "Lista de Notícias",
    "data": [
        {
            "id": 1,
            "title": "Bem-vindos anos 20",
            "image": "images\/news\/anos20.jpg",
            "url": "https:\/\/www.publico.pt\/2019\/12\/30\/culturaipsilon\/opiniao\/bemvindos-anos-20-1898758",
            "subtitle": "Quanto tempo faltará para alguém chamar à nova década “os novos anos 20”? Dois dias? Ou a década de Billie Eilish?",
            "news_size_id": 2,
            "category_id": 10,
            "created_at": "2020-01-27 11:12:25",
            "updated_at": "2020-01-27 11:12:25",
            "deleted_at": null
        },
        {
            "id": 2,
            "title": "A viragem consumou-se: motor a gasolina pôs fim ao reinado diesel",
            "image": "images\/news\/diesel.jpg",
            "url": "https:\/\/www.publico.pt\/2020\/01\/02\/economia\/noticia\/viragem-consumouse-motor-gasolina-pos-fim-reinado-dieseli-1899048",
            "subtitle": "Motor a gasóleo liderava há 15 anos. Agora, mais portugueses preferem carros a gasolina. Eléctricos puros cresceram 2,7%. Tesla tem quota de 27,8%.",
            "news_size_id": 3,
            "category_id": 4,
            "created_at": "2020-01-27 11:12:26",
            "updated_at": "2020-01-27 11:12:26",
            "deleted_at": null
        },
        {
            "id": 3,
            "title": "Nos votos de Ano Novo, a justiça levou a Belém uma “sexta-feira da Paixão”",
            "image": "images\/news\/anonovo.jpg",
            "url": "https:\/\/www.publico.pt\/2020\/01\/02\/politica\/noticia\/votos-ano-novo-justica-levou-belem-sextafeira-paixao-1899076",
            "subtitle": "Presidentes dos tribunais supremos, procuradora-geral da República e provedora de justiça tiveram, pela primeira vez, oportunidade de falar publicamente na Presidência da República. ",
            "news_size_id": 3,
            "category_id": 1,
            "created_at": "2020-01-27 11:12:26",
            "updated_at": "2020-01-27 11:12:26",
            "deleted_at": null
        },
        {
            "id": 4,
            "title": "Australianos fogem das chamas incontroláveis, à espera de mais um dia de inferno",
            "image": "images\/news\/australia.jpg",
            "url": "https:\/\/www.publico.pt\/2020\/01\/02\/mundo\/noticia\/australianos-fogem-chamas-incontrolaveis-espera-dia-inferno-1899066",
            "subtitle": "As autoridades estão a ordenar a retirada de milhares de pessoas da costa Sul do país, antecipando um dia potencialmente catastrófico para Sábado. ",
            "news_size_id": 3,
            "category_id": 5,
            "created_at": "2020-01-27 11:12:26",
            "updated_at": "2020-01-27 11:12:26",
            "deleted_at": null
        },
        {
            "id": 5,
            "title": "Luxemburgo testa sistema de transportes públicos grátis na passagem de ano",
            "image": "images\/news\/luxemburgo.jpg",
            "url": "https:\/\/www.publico.pt\/2019\/12\/30\/mundo\/noticia\/luxemburgo-testa-sistema-transportes-publicos-gratis-passagem-ano-1898795",
            "subtitle": "Transportes totalmente gratuitos vão entrar em vigor em Março. ",
            "news_size_id": 2,
            "category_id": 5,
            "created_at": "2020-01-27 11:12:26",
            "updated_at": "2020-01-27 11:12:26",
            "deleted_at": null
        }
    ],
    "result": "ok"
}
```

### HTTP Request
`GET api/news`


<!-- END_5dd1068d84cb8b472b4e1b34928a56af -->

<!-- START_a55c2a7207815f5572446d52783921c2 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/news/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/news/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/news/create`


<!-- END_a55c2a7207815f5572446d52783921c2 -->

<!-- START_aeceef8aaaac3f0954bf7253ecfdb38a -->
## Store a newly created news in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/news" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"mollitia","image":"nihil","url":"minus","subtitle":"rerum","news_size_id":13,"category_id":1}'

```

```javascript
const url = new URL(
    "http://localhost/api/news"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "mollitia",
    "image": "nihil",
    "url": "minus",
    "subtitle": "rerum",
    "news_size_id": 13,
    "category_id": 1
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/news`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `title` | string |  required  | News title
        `image` | image |  required  | News image
        `url` | string |  required  | News URL
        `subtitle` | string |  required  | News subtitle
        `news_size_id` | integer |  required  | News size id
        `category_id` | integer |  required  | News cattegory id
    
<!-- END_aeceef8aaaac3f0954bf7253ecfdb38a -->

<!-- START_02977d2b1e61d37be02f0a55c42e6ba9 -->
## Display the specified news.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/news/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/news/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "message": "Notícia selecionada",
    "data": {
        "id": 1,
        "title": "Bem-vindos anos 20",
        "image": "images\/news\/anos20.jpg",
        "url": "https:\/\/www.publico.pt\/2019\/12\/30\/culturaipsilon\/opiniao\/bemvindos-anos-20-1898758",
        "subtitle": "Quanto tempo faltará para alguém chamar à nova década “os novos anos 20”? Dois dias? Ou a década de Billie Eilish?",
        "news_size_id": 2,
        "category_id": 10,
        "created_at": "2020-01-27 11:12:25",
        "updated_at": "2020-01-27 11:12:25",
        "deleted_at": null
    },
    "result": "ok"
}
```

### HTTP Request
`GET api/news/{news}`


<!-- END_02977d2b1e61d37be02f0a55c42e6ba9 -->

<!-- START_9d70264e3d27dba6fb95d9c9af37e3bc -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/news/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/news/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/news/{news}/edit`


<!-- END_9d70264e3d27dba6fb95d9c9af37e3bc -->

<!-- START_9366fbdef8dea9738966cdfd7daba9f7 -->
## Update the specified news in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/news/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"at","image":"et","url":"reprehenderit","subtitle":"nobis","news_size_id":5,"category_id":3}'

```

```javascript
const url = new URL(
    "http://localhost/api/news/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "at",
    "image": "et",
    "url": "reprehenderit",
    "subtitle": "nobis",
    "news_size_id": 5,
    "category_id": 3
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/news/{news}`

`PATCH api/news/{news}`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `title` | string |  optional  | News title
        `image` | image |  optional  | News image
        `url` | string |  optional  | News URL
        `subtitle` | string |  optional  | News subtitle
        `news_size_id` | integer |  optional  | News size id
        `category_id` | integer |  optional  | News cattegory id
    
<!-- END_9366fbdef8dea9738966cdfd7daba9f7 -->

<!-- START_bb2ed2300538ecd019d36ca11b3af3fe -->
## Remove the specified news from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/news/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/news/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/news/{news}`


<!-- END_bb2ed2300538ecd019d36ca11b3af3fe -->

#News Size


<!-- START_7252c8b6661cb604dc49121e8ae1b606 -->
## Display a listing of the news size.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/newsSize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/newsSize"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "message": "Lista de Tamanho de Notícias",
    "data": [
        {
            "id": 1,
            "size": "Curta",
            "created_at": "2020-01-27 11:12:14",
            "updated_at": "2020-01-27 11:12:14",
            "deleted_at": null
        },
        {
            "id": 2,
            "size": "Média",
            "created_at": "2020-01-27 11:12:14",
            "updated_at": "2020-01-27 11:12:14",
            "deleted_at": null
        },
        {
            "id": 3,
            "size": "Longa",
            "created_at": "2020-01-27 11:12:14",
            "updated_at": "2020-01-27 11:12:14",
            "deleted_at": null
        }
    ],
    "result": "ok"
}
```

### HTTP Request
`GET api/newsSize`


<!-- END_7252c8b6661cb604dc49121e8ae1b606 -->

<!-- START_d5d6588516cc80221c09b8eeb306ef22 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/newsSize/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/newsSize/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/newsSize/create`


<!-- END_d5d6588516cc80221c09b8eeb306ef22 -->

<!-- START_54cae0fce7c69aee2ac0c48f47b101f1 -->
## Store a newly created news size in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/newsSize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"size":"provident"}'

```

```javascript
const url = new URL(
    "http://localhost/api/newsSize"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "size": "provident"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/newsSize`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `size` | string |  required  | News size
    
<!-- END_54cae0fce7c69aee2ac0c48f47b101f1 -->

<!-- START_bd34c2f3d0901cdd1121626f431283d9 -->
## Display the specified news size.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/newsSize/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/newsSize/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "message": "Autor selecionado",
    "data": {
        "id": 1,
        "size": "Curta",
        "created_at": "2020-01-27 11:12:14",
        "updated_at": "2020-01-27 11:12:14",
        "deleted_at": null
    },
    "result": "ok"
}
```

### HTTP Request
`GET api/newsSize/{newsSize}`


<!-- END_bd34c2f3d0901cdd1121626f431283d9 -->

<!-- START_ae9b732ea3814e1f8d0adff275190c4d -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/newsSize/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/newsSize/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/newsSize/{newsSize}/edit`


<!-- END_ae9b732ea3814e1f8d0adff275190c4d -->

<!-- START_3356d82b95c3d234c70b0c03ffcb22d8 -->
## Update the specified news size in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/newsSize/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"size":"et"}'

```

```javascript
const url = new URL(
    "http://localhost/api/newsSize/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "size": "et"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/newsSize/{newsSize}`

`PATCH api/newsSize/{newsSize}`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `size` | string |  optional  | News size
    
<!-- END_3356d82b95c3d234c70b0c03ffcb22d8 -->

<!-- START_b516addeb7b2b50e570b6f82ac88d2b7 -->
## Remove the specified news size from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/newsSize/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/newsSize/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/newsSize/{newsSize}`


<!-- END_b516addeb7b2b50e570b6f82ac88d2b7 -->

#News Topic


<!-- START_d3011797a625002a710aa9b542755b73 -->
## Display a listing of the news topics.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/newsTopic" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/newsTopic"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "message": "Relações entre notícias e tópicos",
    "data": [
        {
            "id": 1,
            "news_id": 1,
            "topic_id": 55,
            "created_at": "2020-01-27 11:12:44",
            "updated_at": "2020-01-27 11:12:44",
            "deleted_at": null
        },
        {
            "id": 2,
            "news_id": 1,
            "topic_id": 27,
            "created_at": "2020-01-27 11:12:44",
            "updated_at": "2020-01-27 11:12:44",
            "deleted_at": null
        },
        {
            "id": 3,
            "news_id": 2,
            "topic_id": 14,
            "created_at": "2020-01-27 11:12:44",
            "updated_at": "2020-01-27 11:12:44",
            "deleted_at": null
        },
        {
            "id": 4,
            "news_id": 2,
            "topic_id": 21,
            "created_at": "2020-01-27 11:12:44",
            "updated_at": "2020-01-27 11:12:44",
            "deleted_at": null
        },
        {
            "id": 5,
            "news_id": 3,
            "topic_id": 8,
            "created_at": "2020-01-27 11:12:44",
            "updated_at": "2020-01-27 11:12:44",
            "deleted_at": null
        },
        {
            "id": 6,
            "news_id": 3,
            "topic_id": 1,
            "created_at": "2020-01-27 11:12:44",
            "updated_at": "2020-01-27 11:12:44",
            "deleted_at": null
        },
        {
            "id": 7,
            "news_id": 4,
            "topic_id": 66,
            "created_at": "2020-01-27 11:12:44",
            "updated_at": "2020-01-27 11:12:44",
            "deleted_at": null
        },
        {
            "id": 8,
            "news_id": 4,
            "topic_id": 26,
            "created_at": "2020-01-27 11:12:44",
            "updated_at": "2020-01-27 11:12:44",
            "deleted_at": null
        },
        {
            "id": 9,
            "news_id": 5,
            "topic_id": 19,
            "created_at": "2020-01-27 11:12:44",
            "updated_at": "2020-01-27 11:12:44",
            "deleted_at": null
        }
    ],
    "result": "ok"
}
```

### HTTP Request
`GET api/newsTopic`


<!-- END_d3011797a625002a710aa9b542755b73 -->

<!-- START_af3cbf9425796b6915993434b5a6a68b -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/newsTopic/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/newsTopic/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/newsTopic/create`


<!-- END_af3cbf9425796b6915993434b5a6a68b -->

<!-- START_69379f517481fd3adcd6d15bdf1c45b4 -->
## Store a newly created news topic in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/newsTopic" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"news_id":16,"topic_id":10}'

```

```javascript
const url = new URL(
    "http://localhost/api/newsTopic"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "news_id": 16,
    "topic_id": 10
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/newsTopic`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `news_id` | integer |  required  | News id
        `topic_id` | integer |  required  | Topic id
    
<!-- END_69379f517481fd3adcd6d15bdf1c45b4 -->

<!-- START_792326382e41018d5c864f415eb57812 -->
## Display the specified topic.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/newsTopic/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/newsTopic/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (422):

```json
{
    "data": {
        "news_id": [
            "Associe uma notícia!"
        ],
        "topic_id": [
            "Associe um topico!"
        ]
    },
    "msg": "Erro de validação."
}
```

### HTTP Request
`GET api/newsTopic/{newsTopic}`


<!-- END_792326382e41018d5c864f415eb57812 -->

<!-- START_cfa08f4b721562fe1ec8cb24fd99f72e -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/newsTopic/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"news_id":14,"topic_id":18}'

```

```javascript
const url = new URL(
    "http://localhost/api/newsTopic/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "news_id": 14,
    "topic_id": 18
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/newsTopic/{newsTopic}/edit`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `news_id` | integer |  required  | News id
        `topic_id` | integer |  required  | Topic id
    
<!-- END_cfa08f4b721562fe1ec8cb24fd99f72e -->

<!-- START_79b8b273b98c3145d3d650e2686aff57 -->
## Update the specified topic in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/newsTopic/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"news_id":14,"topic_id":7}'

```

```javascript
const url = new URL(
    "http://localhost/api/newsTopic/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "news_id": 14,
    "topic_id": 7
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/newsTopic/{newsTopic}`

`PATCH api/newsTopic/{newsTopic}`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `news_id` | integer |  optional  | News id
        `topic_id` | integer |  optional  | Topic id
    
<!-- END_79b8b273b98c3145d3d650e2686aff57 -->

<!-- START_8e744d2652768c1c6b79672462e059b5 -->
## Remove the specified topic from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/newsTopic/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/newsTopic/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/newsTopic/{newsTopic}`


<!-- END_8e744d2652768c1c6b79672462e059b5 -->

#News and User Relationship


<!-- START_ccd115786e5c79dd1a0c5ca2a05f8436 -->
## Display a listing of the connections between news and users.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/newsUser" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/newsUser"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "message": "Lista de relações entre Notícias e Users",
    "data": [
        {
            "id": 1,
            "news_id": 1,
            "user_id": 5,
            "created_at": "2020-01-27 11:12:42",
            "updated_at": "2020-01-27 11:12:42",
            "deleted_at": null,
            "collection_id": 5
        },
        {
            "id": 2,
            "news_id": 2,
            "user_id": 6,
            "created_at": "2020-01-27 11:12:42",
            "updated_at": "2020-01-27 11:12:42",
            "deleted_at": null,
            "collection_id": 6
        },
        {
            "id": 3,
            "news_id": 3,
            "user_id": 7,
            "created_at": "2020-01-27 11:12:42",
            "updated_at": "2020-01-27 11:12:42",
            "deleted_at": null,
            "collection_id": 7
        },
        {
            "id": 4,
            "news_id": 4,
            "user_id": 4,
            "created_at": "2020-01-27 11:12:43",
            "updated_at": "2020-01-27 11:12:43",
            "deleted_at": null,
            "collection_id": 4
        },
        {
            "id": 5,
            "news_id": 5,
            "user_id": 3,
            "created_at": "2020-01-27 11:12:43",
            "updated_at": "2020-01-27 11:12:43",
            "deleted_at": null,
            "collection_id": 3
        }
    ],
    "result": "ok"
}
```

### HTTP Request
`GET api/newsUser`


<!-- END_ccd115786e5c79dd1a0c5ca2a05f8436 -->

<!-- START_29beb9a651c8200adb96a0ef8469964a -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/newsUser/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/newsUser/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/newsUser/create`


<!-- END_29beb9a651c8200adb96a0ef8469964a -->

<!-- START_2faeac742e6ed4515365e136932b93df -->
## Store a newly created relationship between news and added user in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/newsUser" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"news_id":15,"user_id":7,"collection_id":11}'

```

```javascript
const url = new URL(
    "http://localhost/api/newsUser"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "news_id": 15,
    "user_id": 7,
    "collection_id": 11
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/newsUser`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `news_id` | integer |  required  | News id
        `user_id` | integer |  required  | User id
        `collection_id` | integer |  required  | Collection id
    
<!-- END_2faeac742e6ed4515365e136932b93df -->

<!-- START_ae552757171f525b41f655070ca5f1b5 -->
## Display the specified connection between news and user.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/newsUser/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/newsUser/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": 1,
    "news_id": 1,
    "user_id": 5,
    "created_at": "2020-01-27 11:12:42",
    "updated_at": "2020-01-27 11:12:42",
    "deleted_at": null,
    "collection_id": 5
}
```

### HTTP Request
`GET api/newsUser/{newsUser}`


<!-- END_ae552757171f525b41f655070ca5f1b5 -->

<!-- START_431981ca8e93e7e62ac8a83265545811 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/newsUser/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/newsUser/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/newsUser/{newsUser}/edit`


<!-- END_431981ca8e93e7e62ac8a83265545811 -->

<!-- START_c86c64e94002650a7645b5c50b8c2874 -->
## Update the specified connection between news and user in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/newsUser/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"news_id":12,"user_id":3,"collection_id":13}'

```

```javascript
const url = new URL(
    "http://localhost/api/newsUser/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "news_id": 12,
    "user_id": 3,
    "collection_id": 13
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/newsUser/{newsUser}`

`PATCH api/newsUser/{newsUser}`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `news_id` | integer |  optional  | News id
        `user_id` | integer |  optional  | User id
        `collection_id` | integer |  optional  | Collection id
    
<!-- END_c86c64e94002650a7645b5c50b8c2874 -->

<!-- START_88ffc391f00dc86c5d3a936343acdcfb -->
## Remove the specified connection between news and user from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/newsUser/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/newsUser/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/newsUser/{newsUser}`


<!-- END_88ffc391f00dc86c5d3a936343acdcfb -->

#Publication


<!-- START_83f7b40648cc4815caff34ddead15bf5 -->
## Display a listing of the publications.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/publication" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/publication"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "message": "Lista de publicações",
    "data": [
        {
            "id": 1,
            "name": "Público",
            "created_at": "2020-01-27 11:12:16",
            "updated_at": "2020-01-27 11:12:16",
            "deleted_at": null
        },
        {
            "id": 2,
            "name": "P2",
            "created_at": "2020-01-27 11:12:16",
            "updated_at": "2020-01-27 11:12:16",
            "deleted_at": null
        },
        {
            "id": 3,
            "name": "Ípsilon",
            "created_at": "2020-01-27 11:12:16",
            "updated_at": "2020-01-27 11:12:16",
            "deleted_at": null
        },
        {
            "id": 4,
            "name": "Ímpar",
            "created_at": "2020-01-27 11:12:16",
            "updated_at": "2020-01-27 11:12:16",
            "deleted_at": null
        },
        {
            "id": 5,
            "name": "Fugas",
            "created_at": "2020-01-27 11:12:16",
            "updated_at": "2020-01-27 11:12:16",
            "deleted_at": null
        },
        {
            "id": 6,
            "name": "P3",
            "created_at": "2020-01-27 11:12:16",
            "updated_at": "2020-01-27 11:12:16",
            "deleted_at": null
        },
        {
            "id": 7,
            "name": "Cinecartaz",
            "created_at": "2020-01-27 11:12:16",
            "updated_at": "2020-01-27 11:12:16",
            "deleted_at": null
        }
    ],
    "result": "ok"
}
```

### HTTP Request
`GET api/publication`


<!-- END_83f7b40648cc4815caff34ddead15bf5 -->

<!-- START_810226b713038f3d615a8c2ae3287362 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/publication/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/publication/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/publication/create`


<!-- END_810226b713038f3d615a8c2ae3287362 -->

<!-- START_939a1a1c8973dae861330067c30d809b -->
## Store a newly created publication in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/publication" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"assumenda"}'

```

```javascript
const url = new URL(
    "http://localhost/api/publication"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "assumenda"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/publication`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  required  | Publication Name
    
<!-- END_939a1a1c8973dae861330067c30d809b -->

<!-- START_93356f0d5b6f59498b9b031e500543a4 -->
## Display the specified publication.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/publication/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/publication/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "message": "Publicação selecionada",
    "data": {
        "id": 1,
        "name": "Público",
        "created_at": "2020-01-27 11:12:16",
        "updated_at": "2020-01-27 11:12:16",
        "deleted_at": null
    },
    "result": "ok"
}
```

### HTTP Request
`GET api/publication/{publication}`


<!-- END_93356f0d5b6f59498b9b031e500543a4 -->

<!-- START_de0855bcd155856fa787df1211f3513f -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/publication/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/publication/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/publication/{publication}/edit`


<!-- END_de0855bcd155856fa787df1211f3513f -->

<!-- START_1946bcf35cf2c21732c3a33b7d341adf -->
## Update the specified publication in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/publication/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"dolores"}'

```

```javascript
const url = new URL(
    "http://localhost/api/publication/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "dolores"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/publication/{publication}`

`PATCH api/publication/{publication}`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  optional  | Publication Name
    
<!-- END_1946bcf35cf2c21732c3a33b7d341adf -->

<!-- START_1dfd0f8bcff14f1c8ac63d2395b608bc -->
## Remove the specified publication from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/publication/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/publication/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/publication/{publication}`


<!-- END_1dfd0f8bcff14f1c8ac63d2395b608bc -->

#Search


<!-- START_f7828fe70326ce6166fdba9c0c9d80ed -->
## Display a listing of the search.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "message": "Lista de Pesquisas",
    "data": [
        {
            "id": 1,
            "text": "Incêndios Florestais",
            "image": "",
            "user_id": 3,
            "search_type_id": 1,
            "created_at": "2020-01-27 11:12:36",
            "updated_at": "2020-01-27 11:12:36",
            "deleted_at": null
        },
        {
            "id": 2,
            "text": "África",
            "image": "images\/searches\/africa.jpg",
            "user_id": 4,
            "search_type_id": 2,
            "created_at": "2020-01-27 11:12:36",
            "updated_at": "2020-01-27 11:12:36",
            "deleted_at": null
        },
        {
            "id": 3,
            "text": "Imigrantes",
            "image": "",
            "user_id": 5,
            "search_type_id": 3,
            "created_at": "2020-01-27 11:12:36",
            "updated_at": "2020-01-27 11:12:36",
            "deleted_at": null
        }
    ],
    "result": "ok"
}
```

### HTTP Request
`GET api/search`


<!-- END_f7828fe70326ce6166fdba9c0c9d80ed -->

<!-- START_94e662ab66175b9b1b268b142dedc081 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/search/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/search/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/search/create`


<!-- END_94e662ab66175b9b1b268b142dedc081 -->

<!-- START_9792377865465dfd12bebd73e7326925 -->
## Store a newly created search in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"text":"et","image":"aut","user_id":20,"search_type_id":7}'

```

```javascript
const url = new URL(
    "http://localhost/api/search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "text": "et",
    "image": "aut",
    "user_id": 20,
    "search_type_id": 7
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/search`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `text` | string |  required  | Search text
        `image` | image |  optional  | Search image
        `user_id` | integer |  required  | User id
        `search_type_id` | integer |  required  | Type of Search
    
<!-- END_9792377865465dfd12bebd73e7326925 -->

<!-- START_a9b2b49baa158de1acb55cc8b4f7e760 -->
## Display the specified search.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/search/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/search/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "message": "Autor selecionado",
    "data": {
        "id": 1,
        "text": "Incêndios Florestais",
        "image": "",
        "user_id": 3,
        "search_type_id": 1,
        "created_at": "2020-01-27 11:12:36",
        "updated_at": "2020-01-27 11:12:36",
        "deleted_at": null
    },
    "result": "ok"
}
```

### HTTP Request
`GET api/search/{search}`


<!-- END_a9b2b49baa158de1acb55cc8b4f7e760 -->

<!-- START_3976aed1a98a935825f48f8d6775cb9f -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/search/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/search/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/search/{search}/edit`


<!-- END_3976aed1a98a935825f48f8d6775cb9f -->

<!-- START_26374b787c5e334d6ebee6dd03224fa2 -->
## Update the specified search in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/search/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"text":"occaecati","image":"et","user_id":8,"search_type_id":1}'

```

```javascript
const url = new URL(
    "http://localhost/api/search/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "text": "occaecati",
    "image": "et",
    "user_id": 8,
    "search_type_id": 1
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/search/{search}`

`PATCH api/search/{search}`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `text` | string |  optional  | Search text
        `image` | image |  optional  | Search image
        `user_id` | integer |  optional  | User id
        `search_type_id` | integer |  optional  | Type of Search
    
<!-- END_26374b787c5e334d6ebee6dd03224fa2 -->

<!-- START_3de623bd1f131abd42e53ba5f74724d9 -->
## Remove the specified search from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/search/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/search/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/search/{search}`


<!-- END_3de623bd1f131abd42e53ba5f74724d9 -->

#Search Type


<!-- START_ac9c5f70f0e6bfc0e80779f8e51d41b8 -->
## Display a listing of the search types.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/searchType" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/searchType"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "message": "Lista de Tipos de Pesquisa",
    "data": [
        {
            "id": 1,
            "type": "Escrever",
            "created_at": "2020-01-27 11:12:17",
            "updated_at": "2020-01-27 11:12:17",
            "deleted_at": null
        },
        {
            "id": 2,
            "type": "Fotografia",
            "created_at": "2020-01-27 11:12:17",
            "updated_at": "2020-01-27 11:12:17",
            "deleted_at": null
        },
        {
            "id": 3,
            "type": "Voz",
            "created_at": "2020-01-27 11:12:17",
            "updated_at": "2020-01-27 11:12:17",
            "deleted_at": null
        }
    ],
    "result": "ok"
}
```

### HTTP Request
`GET api/searchType`


<!-- END_ac9c5f70f0e6bfc0e80779f8e51d41b8 -->

<!-- START_5b7daa08c3964f6108dea2f8c0de761e -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/searchType/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/searchType/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/searchType/create`


<!-- END_5b7daa08c3964f6108dea2f8c0de761e -->

<!-- START_2f4f019aab3a06a288467df7f5f51ddd -->
## Store a newly created search type in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/searchType" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"type":"quis"}'

```

```javascript
const url = new URL(
    "http://localhost/api/searchType"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "type": "quis"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/searchType`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `type` | string |  required  | Type of search
    
<!-- END_2f4f019aab3a06a288467df7f5f51ddd -->

<!-- START_5557a232e7e8f544421aa6feddb12c8f -->
## Display the specified search type.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/searchType/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/searchType/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "message": "Tipo de pesquisa selecionada",
    "data": {
        "id": 1,
        "type": "Escrever",
        "created_at": "2020-01-27 11:12:17",
        "updated_at": "2020-01-27 11:12:17",
        "deleted_at": null
    },
    "result": "ok"
}
```

### HTTP Request
`GET api/searchType/{searchType}`


<!-- END_5557a232e7e8f544421aa6feddb12c8f -->

<!-- START_fa5665badc6fa5e61d87f0dcde8ecec9 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/searchType/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/searchType/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/searchType/{searchType}/edit`


<!-- END_fa5665badc6fa5e61d87f0dcde8ecec9 -->

<!-- START_0634de496622eb17571b9cd2ed9cfe46 -->
## Update the specified search type in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/searchType/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"type":"non"}'

```

```javascript
const url = new URL(
    "http://localhost/api/searchType/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "type": "non"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/searchType/{searchType}`

`PATCH api/searchType/{searchType}`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `type` | string |  optional  | Type of search
    
<!-- END_0634de496622eb17571b9cd2ed9cfe46 -->

<!-- START_9d8356a65d80e539a14fa8659d15f755 -->
## Remove the specified search type from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/searchType/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/searchType/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/searchType/{searchType}`


<!-- END_9d8356a65d80e539a14fa8659d15f755 -->

#Topic


<!-- START_073038c1d9d1dd94a96a499ca9e3197f -->
## Display a listing of the topics.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/topic" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/topic"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "message": "Lista de Tópicos",
    "data": [
        {
            "id": 1,
            "topic": "PSD",
            "created_at": "2020-01-27 11:12:18",
            "updated_at": "2020-01-27 11:12:18",
            "deleted_at": null
        },
        {
            "id": 2,
            "topic": "PCD",
            "created_at": "2020-01-27 11:12:18",
            "updated_at": "2020-01-27 11:12:18",
            "deleted_at": null
        },
        {
            "id": 3,
            "topic": "PS",
            "created_at": "2020-01-27 11:12:19",
            "updated_at": "2020-01-27 11:12:19",
            "deleted_at": null
        },
        {
            "id": 4,
            "topic": "CDS-PP",
            "created_at": "2020-01-27 11:12:19",
            "updated_at": "2020-01-27 11:12:19",
            "deleted_at": null
        },
        {
            "id": 5,
            "topic": "BE",
            "created_at": "2020-01-27 11:12:19",
            "updated_at": "2020-01-27 11:12:19",
            "deleted_at": null
        },
        {
            "id": 6,
            "topic": "Educação",
            "created_at": "2020-01-27 11:12:19",
            "updated_at": "2020-01-27 11:12:19",
            "deleted_at": null
        },
        {
            "id": 7,
            "topic": "Saúde",
            "created_at": "2020-01-27 11:12:19",
            "updated_at": "2020-01-27 11:12:19",
            "deleted_at": null
        },
        {
            "id": 8,
            "topic": "Justiça",
            "created_at": "2020-01-27 11:12:19",
            "updated_at": "2020-01-27 11:12:19",
            "deleted_at": null
        },
        {
            "id": 9,
            "topic": "Media",
            "created_at": "2020-01-27 11:12:19",
            "updated_at": "2020-01-27 11:12:19",
            "deleted_at": null
        },
        {
            "id": 10,
            "topic": "Lisboa",
            "created_at": "2020-01-27 11:12:19",
            "updated_at": "2020-01-27 11:12:19",
            "deleted_at": null
        },
        {
            "id": 11,
            "topic": "Porto",
            "created_at": "2020-01-27 11:12:19",
            "updated_at": "2020-01-27 11:12:19",
            "deleted_at": null
        },
        {
            "id": 12,
            "topic": "Cidades",
            "created_at": "2020-01-27 11:12:19",
            "updated_at": "2020-01-27 11:12:19",
            "deleted_at": null
        },
        {
            "id": 13,
            "topic": "Mercados",
            "created_at": "2020-01-27 11:12:19",
            "updated_at": "2020-01-27 11:12:19",
            "deleted_at": null
        },
        {
            "id": 14,
            "topic": "Empresas",
            "created_at": "2020-01-27 11:12:19",
            "updated_at": "2020-01-27 11:12:19",
            "deleted_at": null
        },
        {
            "id": 15,
            "topic": "Banca",
            "created_at": "2020-01-27 11:12:19",
            "updated_at": "2020-01-27 11:12:19",
            "deleted_at": null
        },
        {
            "id": 16,
            "topic": "Trabalhos e Emprego",
            "created_at": "2020-01-27 11:12:19",
            "updated_at": "2020-01-27 11:12:19",
            "deleted_at": null
        },
        {
            "id": 17,
            "topic": "Conjuntura",
            "created_at": "2020-01-27 11:12:20",
            "updated_at": "2020-01-27 11:12:20",
            "deleted_at": null
        },
        {
            "id": 18,
            "topic": "Finanças Públicas",
            "created_at": "2020-01-27 11:12:20",
            "updated_at": "2020-01-27 11:12:20",
            "deleted_at": null
        },
        {
            "id": 19,
            "topic": "Internacional",
            "created_at": "2020-01-27 11:12:20",
            "updated_at": "2020-01-27 11:12:20",
            "deleted_at": null
        },
        {
            "id": 20,
            "topic": "Empreendedorismo",
            "created_at": "2020-01-27 11:12:20",
            "updated_at": "2020-01-27 11:12:20",
            "deleted_at": null
        },
        {
            "id": 21,
            "topic": "Europa",
            "created_at": "2020-01-27 11:12:20",
            "updated_at": "2020-01-27 11:12:20",
            "deleted_at": null
        },
        {
            "id": 22,
            "topic": "América",
            "created_at": "2020-01-27 11:12:20",
            "updated_at": "2020-01-27 11:12:20",
            "deleted_at": null
        },
        {
            "id": 23,
            "topic": "África",
            "created_at": "2020-01-27 11:12:20",
            "updated_at": "2020-01-27 11:12:20",
            "deleted_at": null
        },
        {
            "id": 24,
            "topic": "Ásia",
            "created_at": "2020-01-27 11:12:20",
            "updated_at": "2020-01-27 11:12:20",
            "deleted_at": null
        },
        {
            "id": 25,
            "topic": "Médio Oriente",
            "created_at": "2020-01-27 11:12:20",
            "updated_at": "2020-01-27 11:12:20",
            "deleted_at": null
        },
        {
            "id": 26,
            "topic": "Oceânia",
            "created_at": "2020-01-27 11:12:20",
            "updated_at": "2020-01-27 11:12:20",
            "deleted_at": null
        },
        {
            "id": 27,
            "topic": "Música",
            "created_at": "2020-01-27 11:12:20",
            "updated_at": "2020-01-27 11:12:20",
            "deleted_at": null
        },
        {
            "id": 28,
            "topic": "Cinema",
            "created_at": "2020-01-27 11:12:20",
            "updated_at": "2020-01-27 11:12:20",
            "deleted_at": null
        },
        {
            "id": 29,
            "topic": "Teatro",
            "created_at": "2020-01-27 11:12:20",
            "updated_at": "2020-01-27 11:12:20",
            "deleted_at": null
        },
        {
            "id": 30,
            "topic": "Dança",
            "created_at": "2020-01-27 11:12:20",
            "updated_at": "2020-01-27 11:12:20",
            "deleted_at": null
        },
        {
            "id": 31,
            "topic": "Livros",
            "created_at": "2020-01-27 11:12:20",
            "updated_at": "2020-01-27 11:12:20",
            "deleted_at": null
        },
        {
            "id": 32,
            "topic": "Artes",
            "created_at": "2020-01-27 11:12:20",
            "updated_at": "2020-01-27 11:12:20",
            "deleted_at": null
        },
        {
            "id": 33,
            "topic": "Arquitetura",
            "created_at": "2020-01-27 11:12:20",
            "updated_at": "2020-01-27 11:12:20",
            "deleted_at": null
        },
        {
            "id": 34,
            "topic": "Design",
            "created_at": "2020-01-27 11:12:20",
            "updated_at": "2020-01-27 11:12:20",
            "deleted_at": null
        },
        {
            "id": 35,
            "topic": "TV",
            "created_at": "2020-01-27 11:12:20",
            "updated_at": "2020-01-27 11:12:20",
            "deleted_at": null
        },
        {
            "id": 36,
            "topic": "SL Benfica",
            "created_at": "2020-01-27 11:12:20",
            "updated_at": "2020-01-27 11:12:20",
            "deleted_at": null
        },
        {
            "id": 37,
            "topic": "FC Porto",
            "created_at": "2020-01-27 11:12:21",
            "updated_at": "2020-01-27 11:12:21",
            "deleted_at": null
        },
        {
            "id": 38,
            "topic": "Futebol Internacional",
            "created_at": "2020-01-27 11:12:21",
            "updated_at": "2020-01-27 11:12:21",
            "deleted_at": null
        },
        {
            "id": 39,
            "topic": "Futebol Nacional",
            "created_at": "2020-01-27 11:12:21",
            "updated_at": "2020-01-27 11:12:21",
            "deleted_at": null
        },
        {
            "id": 40,
            "topic": "Râguebi",
            "created_at": "2020-01-27 11:12:21",
            "updated_at": "2020-01-27 11:12:21",
            "deleted_at": null
        },
        {
            "id": 41,
            "topic": "Ténis",
            "created_at": "2020-01-27 11:12:21",
            "updated_at": "2020-01-27 11:12:21",
            "deleted_at": null
        },
        {
            "id": 42,
            "topic": "Motores",
            "created_at": "2020-01-27 11:12:21",
            "updated_at": "2020-01-27 11:12:21",
            "deleted_at": null
        },
        {
            "id": 43,
            "topic": "Golfe",
            "created_at": "2020-01-27 11:12:21",
            "updated_at": "2020-01-27 11:12:21",
            "deleted_at": null
        },
        {
            "id": 44,
            "topic": "Running",
            "created_at": "2020-01-27 11:12:21",
            "updated_at": "2020-01-27 11:12:21",
            "deleted_at": null
        },
        {
            "id": 45,
            "topic": "Outras Modalidades",
            "created_at": "2020-01-27 11:12:21",
            "updated_at": "2020-01-27 11:12:21",
            "deleted_at": null
        },
        {
            "id": 46,
            "topic": "Ambiente",
            "created_at": "2020-01-27 11:12:21",
            "updated_at": "2020-01-27 11:12:21",
            "deleted_at": null
        },
        {
            "id": 47,
            "topic": "Espaço",
            "created_at": "2020-01-27 11:12:21",
            "updated_at": "2020-01-27 11:12:21",
            "deleted_at": null
        },
        {
            "id": 48,
            "topic": "Medicina",
            "created_at": "2020-01-27 11:12:21",
            "updated_at": "2020-01-27 11:12:21",
            "deleted_at": null
        },
        {
            "id": 49,
            "topic": "Redes Sociais",
            "created_at": "2020-01-27 11:12:21",
            "updated_at": "2020-01-27 11:12:21",
            "deleted_at": null
        },
        {
            "id": 50,
            "topic": "Privacidade",
            "created_at": "2020-01-27 11:12:21",
            "updated_at": "2020-01-27 11:12:21",
            "deleted_at": null
        },
        {
            "id": 51,
            "topic": "Inteligência Artificial",
            "created_at": "2020-01-27 11:12:21",
            "updated_at": "2020-01-27 11:12:21",
            "deleted_at": null
        },
        {
            "id": 52,
            "topic": "Telemóvies",
            "created_at": "2020-01-27 11:12:21",
            "updated_at": "2020-01-27 11:12:21",
            "deleted_at": null
        },
        {
            "id": 53,
            "topic": "Google",
            "created_at": "2020-01-27 11:12:21",
            "updated_at": "2020-01-27 11:12:21",
            "deleted_at": null
        },
        {
            "id": 54,
            "topic": "Facebook",
            "created_at": "2020-01-27 11:12:21",
            "updated_at": "2020-01-27 11:12:21",
            "deleted_at": null
        },
        {
            "id": 55,
            "topic": "Opinião",
            "created_at": "2020-01-27 11:12:22",
            "updated_at": "2020-01-27 11:12:22",
            "deleted_at": null
        },
        {
            "id": 56,
            "topic": "Editorial",
            "created_at": "2020-01-27 11:12:22",
            "updated_at": "2020-01-27 11:12:22",
            "deleted_at": null
        },
        {
            "id": 57,
            "topic": "Crónica",
            "created_at": "2020-01-27 11:12:22",
            "updated_at": "2020-01-27 11:12:22",
            "deleted_at": null
        },
        {
            "id": 58,
            "topic": "Internet",
            "created_at": "2020-01-27 11:12:22",
            "updated_at": "2020-01-27 11:12:22",
            "deleted_at": null
        },
        {
            "id": 59,
            "topic": "Tecnologia",
            "created_at": "2020-01-27 11:12:22",
            "updated_at": "2020-01-27 11:12:22",
            "deleted_at": null
        },
        {
            "id": 60,
            "topic": "Tendências Globais",
            "created_at": "2020-01-27 11:12:22",
            "updated_at": "2020-01-27 11:12:22",
            "deleted_at": null
        },
        {
            "id": 61,
            "topic": "Cibersegurança",
            "created_at": "2020-01-27 11:12:22",
            "updated_at": "2020-01-27 11:12:22",
            "deleted_at": null
        },
        {
            "id": 62,
            "topic": "Greve",
            "created_at": "2020-01-27 11:12:22",
            "updated_at": "2020-01-27 11:12:22",
            "deleted_at": null
        },
        {
            "id": 63,
            "topic": "Ano Novo",
            "created_at": "2020-01-27 11:12:22",
            "updated_at": "2020-01-27 11:12:22",
            "deleted_at": null
        },
        {
            "id": 64,
            "topic": "Coimbra",
            "created_at": "2020-01-27 11:12:22",
            "updated_at": "2020-01-27 11:12:22",
            "deleted_at": null
        },
        {
            "id": 65,
            "topic": "Dinheiro",
            "created_at": "2020-01-27 11:12:22",
            "updated_at": "2020-01-27 11:12:22",
            "deleted_at": null
        },
        {
            "id": 66,
            "topic": "Incêndios Florestais",
            "created_at": "2020-01-27 11:12:22",
            "updated_at": "2020-01-27 11:12:22",
            "deleted_at": null
        },
        {
            "id": 67,
            "topic": "Itália",
            "created_at": "2020-01-27 11:12:22",
            "updated_at": "2020-01-27 11:12:22",
            "deleted_at": null
        }
    ],
    "result": "ok"
}
```

### HTTP Request
`GET api/topic`


<!-- END_073038c1d9d1dd94a96a499ca9e3197f -->

<!-- START_53df43210a808fe2f0b3231de904dfb0 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/topic/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/topic/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/topic/create`


<!-- END_53df43210a808fe2f0b3231de904dfb0 -->

<!-- START_d6ac531840397c5be894e5e43ac50074 -->
## Store a newly created topic in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/topic" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"topic":"et"}'

```

```javascript
const url = new URL(
    "http://localhost/api/topic"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "topic": "et"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/topic`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `topic` | string |  required  | Topic name
    
<!-- END_d6ac531840397c5be894e5e43ac50074 -->

<!-- START_bee18e7ad4fcd6882dde2d937c0d0043 -->
## Display the specified topic.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/topic/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/topic/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "message": "Tópico selecionado",
    "data": {
        "id": 1,
        "topic": "PSD",
        "created_at": "2020-01-27 11:12:18",
        "updated_at": "2020-01-27 11:12:18",
        "deleted_at": null
    },
    "result": "ok"
}
```

### HTTP Request
`GET api/topic/{topic}`


<!-- END_bee18e7ad4fcd6882dde2d937c0d0043 -->

<!-- START_1479a08c4f509412e9c51593a238c7be -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/topic/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/topic/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/topic/{topic}/edit`


<!-- END_1479a08c4f509412e9c51593a238c7be -->

<!-- START_61fe52bc698bd1ab2ac6b89b1e37e83d -->
## Update the specified topic in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/topic/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"topic":"voluptates"}'

```

```javascript
const url = new URL(
    "http://localhost/api/topic/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "topic": "voluptates"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/topic/{topic}`

`PATCH api/topic/{topic}`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `topic` | string |  optional  | Topic name
    
<!-- END_61fe52bc698bd1ab2ac6b89b1e37e83d -->

<!-- START_259faf62cf0a9e932bce365ba4e2c5e8 -->
## Remove the specified topic from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/topic/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/topic/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/topic/{topic}`


<!-- END_259faf62cf0a9e932bce365ba4e2c5e8 -->

#User


<!-- START_fc1e4f6a697e3c48257de845299b71d5 -->
## Display a listing of the users.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/users"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "message": "Lista de Users",
    "data": [
        {
            "id": 1,
            "username": "Administrator",
            "image": "images\/users\/admin.jpg",
            "email": "admin@tdi.pt",
            "email_verified_at": null,
            "role_id": 1,
            "news_size_id": 2,
            "created_at": "2020-01-27 11:12:29",
            "updated_at": "2020-01-27 11:12:29",
            "deleted_at": null
        },
        {
            "id": 2,
            "username": "Manager",
            "image": "images\/users\/manager.jpg",
            "email": "manager@tdi.pt",
            "email_verified_at": null,
            "role_id": 2,
            "news_size_id": 3,
            "created_at": "2020-01-27 11:12:30",
            "updated_at": "2020-01-27 11:12:30",
            "deleted_at": null
        },
        {
            "id": 3,
            "username": "Miguel Esteves Cardoso",
            "image": "images\/users\/miguel.jpg",
            "email": "opiniao@publico.pt",
            "email_verified_at": null,
            "role_id": 2,
            "news_size_id": 3,
            "created_at": "2020-01-27 11:12:30",
            "updated_at": "2020-01-27 11:12:30",
            "deleted_at": null
        },
        {
            "id": 4,
            "username": "Victor Ferreira",
            "image": "images\/users\/victor.jpg",
            "email": "voferreira@publico.pt",
            "email_verified_at": null,
            "role_id": 2,
            "news_size_id": 2,
            "created_at": "2020-01-27 11:12:30",
            "updated_at": "2020-01-27 11:12:30",
            "deleted_at": null
        },
        {
            "id": 5,
            "username": "Leonete Botelho ",
            "image": "images\/users\/botelho.jpg",
            "email": "lbotelho@publico.pt",
            "email_verified_at": null,
            "role_id": 2,
            "news_size_id": 3,
            "created_at": "2020-01-27 11:12:31",
            "updated_at": "2020-01-27 11:12:31",
            "deleted_at": null
        },
        {
            "id": 6,
            "username": "Patrícia Carvalho",
            "image": "images\/users\/patricia.jpg",
            "email": "patricia.carvalho@publico.pt",
            "email_verified_at": null,
            "role_id": 2,
            "news_size_id": 2,
            "created_at": "2020-01-27 11:12:31",
            "updated_at": "2020-01-27 11:12:31",
            "deleted_at": null
        },
        {
            "id": 7,
            "username": "Sofia Neves",
            "image": "images\/users\/sofia.jpg",
            "email": "sofia.neves@publico.pt",
            "email_verified_at": null,
            "role_id": 2,
            "news_size_id": 2,
            "created_at": "2020-01-27 11:12:31",
            "updated_at": "2020-01-27 11:12:31",
            "deleted_at": null
        },
        {
            "id": 8,
            "username": "Aisha Ferry",
            "image": "images\/users\/users.jpg",
            "email": "hobart31@example.net",
            "email_verified_at": "2020-01-27 11:12:31",
            "role_id": 3,
            "news_size_id": 2,
            "created_at": "2020-01-27 11:12:31",
            "updated_at": "2020-01-27 11:12:31",
            "deleted_at": null
        },
        {
            "id": 9,
            "username": "Candice Von",
            "image": "images\/users\/users.jpg",
            "email": "german08@example.org",
            "email_verified_at": "2020-01-27 11:12:31",
            "role_id": 3,
            "news_size_id": 3,
            "created_at": "2020-01-27 11:12:31",
            "updated_at": "2020-01-27 11:12:31",
            "deleted_at": null
        },
        {
            "id": 10,
            "username": "Dr. Amparo Sipes",
            "image": "images\/users\/users.jpg",
            "email": "mosciski.orval@example.org",
            "email_verified_at": "2020-01-27 11:12:31",
            "role_id": 3,
            "news_size_id": 3,
            "created_at": "2020-01-27 11:12:31",
            "updated_at": "2020-01-27 11:12:31",
            "deleted_at": null
        },
        {
            "id": 11,
            "username": "Alvis Gislason",
            "image": "images\/users\/users.jpg",
            "email": "bud40@example.org",
            "email_verified_at": "2020-01-27 11:12:31",
            "role_id": 3,
            "news_size_id": 2,
            "created_at": "2020-01-27 11:12:31",
            "updated_at": "2020-01-27 11:12:31",
            "deleted_at": null
        },
        {
            "id": 12,
            "username": "Odessa Skiles",
            "image": "images\/users\/users.jpg",
            "email": "mertz.verlie@example.net",
            "email_verified_at": "2020-01-27 11:12:31",
            "role_id": 3,
            "news_size_id": 3,
            "created_at": "2020-01-27 11:12:31",
            "updated_at": "2020-01-27 11:12:31",
            "deleted_at": null
        },
        {
            "id": 13,
            "username": "Prof. Myrtis Gaylord I",
            "image": "images\/users\/users.jpg",
            "email": "norma64@example.net",
            "email_verified_at": "2020-01-27 11:12:31",
            "role_id": 3,
            "news_size_id": 1,
            "created_at": "2020-01-27 11:12:31",
            "updated_at": "2020-01-27 11:12:31",
            "deleted_at": null
        },
        {
            "id": 14,
            "username": "Terrill Simonis",
            "image": "images\/users\/users.jpg",
            "email": "hintz.lily@example.org",
            "email_verified_at": "2020-01-27 11:12:31",
            "role_id": 3,
            "news_size_id": 3,
            "created_at": "2020-01-27 11:12:31",
            "updated_at": "2020-01-27 11:12:31",
            "deleted_at": null
        },
        {
            "id": 15,
            "username": "Mrs. Therese Haag",
            "image": "images\/users\/users.jpg",
            "email": "cronin.xzavier@example.org",
            "email_verified_at": "2020-01-27 11:12:31",
            "role_id": 3,
            "news_size_id": 3,
            "created_at": "2020-01-27 11:12:31",
            "updated_at": "2020-01-27 11:12:31",
            "deleted_at": null
        },
        {
            "id": 16,
            "username": "Ena Kozey",
            "image": "images\/users\/users.jpg",
            "email": "kbeier@example.com",
            "email_verified_at": "2020-01-27 11:12:31",
            "role_id": 3,
            "news_size_id": 2,
            "created_at": "2020-01-27 11:12:32",
            "updated_at": "2020-01-27 11:12:32",
            "deleted_at": null
        },
        {
            "id": 17,
            "username": "Timmothy Walsh",
            "image": "images\/users\/users.jpg",
            "email": "kailee32@example.com",
            "email_verified_at": "2020-01-27 11:12:31",
            "role_id": 3,
            "news_size_id": 1,
            "created_at": "2020-01-27 11:12:32",
            "updated_at": "2020-01-27 11:12:32",
            "deleted_at": null
        },
        {
            "id": 18,
            "username": "Dr. Trisha Huels",
            "image": "images\/users\/users.jpg",
            "email": "donnelly.gaetano@example.com",
            "email_verified_at": "2020-01-27 11:12:31",
            "role_id": 3,
            "news_size_id": 1,
            "created_at": "2020-01-27 11:12:32",
            "updated_at": "2020-01-27 11:12:32",
            "deleted_at": null
        },
        {
            "id": 19,
            "username": "Buck Lakin",
            "image": "images\/users\/users.jpg",
            "email": "hailey50@example.org",
            "email_verified_at": "2020-01-27 11:12:31",
            "role_id": 3,
            "news_size_id": 3,
            "created_at": "2020-01-27 11:12:32",
            "updated_at": "2020-01-27 11:12:32",
            "deleted_at": null
        },
        {
            "id": 20,
            "username": "Theresia Greenfelder",
            "image": "images\/users\/users.jpg",
            "email": "ferry.hunter@example.org",
            "email_verified_at": "2020-01-27 11:12:31",
            "role_id": 3,
            "news_size_id": 1,
            "created_at": "2020-01-27 11:12:32",
            "updated_at": "2020-01-27 11:12:32",
            "deleted_at": null
        },
        {
            "id": 21,
            "username": "Dina Braun",
            "image": "images\/users\/users.jpg",
            "email": "zechariah37@example.com",
            "email_verified_at": "2020-01-27 11:12:31",
            "role_id": 3,
            "news_size_id": 1,
            "created_at": "2020-01-27 11:12:32",
            "updated_at": "2020-01-27 11:12:32",
            "deleted_at": null
        },
        {
            "id": 22,
            "username": "Darrell Zieme",
            "image": "images\/users\/users.jpg",
            "email": "donavon84@example.org",
            "email_verified_at": "2020-01-27 11:12:31",
            "role_id": 3,
            "news_size_id": 3,
            "created_at": "2020-01-27 11:12:32",
            "updated_at": "2020-01-27 11:12:32",
            "deleted_at": null
        },
        {
            "id": 23,
            "username": "Amira Cole",
            "image": "images\/users\/users.jpg",
            "email": "meggie.heidenreich@example.com",
            "email_verified_at": "2020-01-27 11:12:31",
            "role_id": 3,
            "news_size_id": 2,
            "created_at": "2020-01-27 11:12:32",
            "updated_at": "2020-01-27 11:12:32",
            "deleted_at": null
        },
        {
            "id": 24,
            "username": "Emmanuel Schmeler",
            "image": "images\/users\/users.jpg",
            "email": "katelin.beahan@example.net",
            "email_verified_at": "2020-01-27 11:12:31",
            "role_id": 3,
            "news_size_id": 1,
            "created_at": "2020-01-27 11:12:32",
            "updated_at": "2020-01-27 11:12:32",
            "deleted_at": null
        },
        {
            "id": 25,
            "username": "Leland Hickle",
            "image": "images\/users\/users.jpg",
            "email": "harvey.delbert@example.org",
            "email_verified_at": "2020-01-27 11:12:31",
            "role_id": 3,
            "news_size_id": 3,
            "created_at": "2020-01-27 11:12:32",
            "updated_at": "2020-01-27 11:12:32",
            "deleted_at": null
        },
        {
            "id": 26,
            "username": "Kallie Powlowski",
            "image": "images\/users\/users.jpg",
            "email": "vheller@example.net",
            "email_verified_at": "2020-01-27 11:12:31",
            "role_id": 3,
            "news_size_id": 3,
            "created_at": "2020-01-27 11:12:32",
            "updated_at": "2020-01-27 11:12:32",
            "deleted_at": null
        },
        {
            "id": 27,
            "username": "Clifford Leannon I",
            "image": "images\/users\/users.jpg",
            "email": "kristy.osinski@example.net",
            "email_verified_at": "2020-01-27 11:12:31",
            "role_id": 3,
            "news_size_id": 2,
            "created_at": "2020-01-27 11:12:32",
            "updated_at": "2020-01-27 11:12:32",
            "deleted_at": null
        }
    ],
    "result": "ok"
}
```

### HTTP Request
`GET api/users`


<!-- END_fc1e4f6a697e3c48257de845299b71d5 -->

<!-- START_5dac10bb34c7618b018b0230d4a51648 -->
## Show the form for creating a resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/users/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/users/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/users/create`


<!-- END_5dac10bb34c7618b018b0230d4a51648 -->

<!-- START_12e37982cc5398c7100e59625ebb5514 -->
## Store a newly created user in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"username":"possimus","email":"debitis","password":"architecto","image":"iure","role_id":2,"news_size_id":3}'

```

```javascript
const url = new URL(
    "http://localhost/api/users"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "username": "possimus",
    "email": "debitis",
    "password": "architecto",
    "image": "iure",
    "role_id": 2,
    "news_size_id": 3
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/users`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `username` | string |  required  | Username
        `email` | string |  required  | E-mail
        `password` | string |  required  | Password
        `image` | image |  optional  | Image
        `role_id` | integer |  required  | Role id
        `news_size_id` | integer |  required  | News size id
    
<!-- END_12e37982cc5398c7100e59625ebb5514 -->

<!-- START_8653614346cb0e3d444d164579a0a0a2 -->
## Display the specified user.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/users/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/users/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "message": "User selecionado",
    "data": {
        "id": 1,
        "username": "Administrator",
        "image": "images\/users\/admin.jpg",
        "email": "admin@tdi.pt",
        "email_verified_at": null,
        "role_id": 1,
        "news_size_id": 2,
        "created_at": "2020-01-27 11:12:29",
        "updated_at": "2020-01-27 11:12:29",
        "deleted_at": null
    },
    "result": "ok"
}
```

### HTTP Request
`GET api/users/{user}`


<!-- END_8653614346cb0e3d444d164579a0a0a2 -->

<!-- START_11ae28146a4d70ba9a0af9b65d290ad5 -->
## Show the form for editing the specified user.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/users/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/users/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/users/{user}/edit`


<!-- END_11ae28146a4d70ba9a0af9b65d290ad5 -->

<!-- START_48a3115be98493a3c866eb0e23347262 -->
## Update the specified user in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/users/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"username":"dolor","email":"quisquam","password":"ad","image":"dolores","role_id":16,"news_size_id":5}'

```

```javascript
const url = new URL(
    "http://localhost/api/users/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "username": "dolor",
    "email": "quisquam",
    "password": "ad",
    "image": "dolores",
    "role_id": 16,
    "news_size_id": 5
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/users/{user}`

`PATCH api/users/{user}`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `username` | string |  optional  | Username
        `email` | string |  optional  | E-mail
        `password` | string |  optional  | Password
        `image` | image |  optional  | Image
        `role_id` | integer |  optional  | Role id
        `news_size_id` | integer |  optional  | News size id
    
<!-- END_48a3115be98493a3c866eb0e23347262 -->

<!-- START_d2db7a9fe3abd141d5adbc367a88e969 -->
## Remove the specified user from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/users/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/users/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/users/{user}`


<!-- END_d2db7a9fe3abd141d5adbc367a88e969 -->

