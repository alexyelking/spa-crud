## Back
<hr>

### The algorithm for running:

1. Duplicate «.env.example» and rename to «.env»
```
cp .env .env.example 
```

2. Specify a free port to follow the link, or leave the one that has already been installed
<br>
<br>

3. Git config core file mode must be false
```
git config core.filemode false
```

4. Launch Docker-compose
```
docker-compose up --build -d
```

5. Wait for composer to finish working (the «autoload» file will appear in the «vendor» folder)
 
 
6. Grant rights for convenience in the root of the project
```
sudo chmod -R 777 *
```
 
7. Go to the «app» folder in order to duplicate «.new.example» and rename it to «.env» This «.env» file is an environment variable file for the application itself
```
cp .env.example .env
```

8. In the root folder of the project, you need to go inside Docker for further configuration
```
docker-compose exec web bash
```

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

12. Completely restart Docker 
```
docker-compose down && docker-compose up --build -d
```

### Ready to start
<hr>

### Implemented features in the form of API requests:
#### You can use Postman to test the capability

1) [Index] A GET type request along the path "/" => outputs a list of all records
2) [Create] A POST type request along the path "/" => creates a new record
3) [Update] A POST type request along the path "/{record}" => updates the information of an already existing record
4) [Delete] A DELETE type request along the path "/{record}" => deletes the specified record

The response comes in JSON format.
