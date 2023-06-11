### Implemented endpoints

<hr>

| Global path |   Path    | Method |                     Parameters                     |     Explanation      |
|:-----------:|:---------:|:------:|:--------------------------------------------------:|:--------------------:|
|    /api     |     /     |  GET   |                         -                          | Records index (list) |
|    /api     |     /     |  POST  | first_name, last_name, category, number_of_tickets |    Record create     |
|    /api     | /{record} |  POST  |  first_name/last_name/category/number_of_tickets   |    Record update     |
|    /api     | /{record} | DELETE |                         -                          |    Record delete     |

<hr>

### The algorithm for running:

Docker and Docker-compose are required to run

#### In the root folder

1. Duplicate «.env.example» and rename to «.env»

```
cp .env.example .env
```

2. Specify a free port for «MYSQL» and «APACHE2», or leave the one that has already been installed

3. Git config core file mode must be false

```
git config core.filemode false
```

4. Launch Docker-compose

```
docker-compose up --build
```

5. Wait for composer to finish working (the «autoload» file will appear in the «vendor» folder)

6. Grant rights for convenience in the root of the project

```
sudo chmod -R 777 *
```

7. Go to the «app» folder in order to duplicate «.env.example» and rename it to «.env» This «.env» file is an
   environment variable file for the application itself

```
cp .env.example .env
```

8. In the root folder of the project, you need to go inside Docker for further configuration

```
docker-compose exec web bash
```

#### Inside the Docker

9. Generate an application key

```
php artisan key:generate
```

10. Start the migration process and seeder

```
php artisan migrate --seed
```

11. Clear the trash

```
php artisan config:clear
```

12. Exit Docker (web) with the
    ```exit``` command, and completely restart Docker

```
docker-compose down && docker-compose up --build -d
```

<hr>

### Ready to start
