## uuid vs id in laravel mirgations

### objective
- this repository showing that the performance of uuid vs id in laravel migrations

### why use uuid ?
- for security in laravel and users do not access and randomly guess url and id

### why use id?
- for performance purpose where to query model and databases faster as id is an increemnt integer in laravel while uuid is universally unique alpha-numeric identifiers that are 36 characters long.

### Clone Repository
```console
$ git clone <repo_name>
```

### Setup Database on .env file
```
DB_CONNECTION=mysql
DB_PORT=3306
DB_DATABASE=yourdbname
DB_USERNAME=yourusername
DB_PASSWORD=yourpassword
```

### Migrate Tables (Fresh)
```
$ php artisan migrate:fresh 
```

### Add Factory Fake Data
```
$ php artisan tinker
> Id::factory(10000)->create();
> Uuid::factory(10000)->create();
> IdComment::factory(10000)->create();
> UuidComment::factory(10000)->create();

```

### Performance Test
```
hit 'localhost/testA'

the array return is : 

[
    0 => "time",
    1 => "time"
]

0 : using id,
1 : using uuid

```

### Conclusion
- using id as primary key is huge benefit in databases query
- using uuid in url or api is good for security
- query on databse is based id as PK 
- url use uuid as PK in database