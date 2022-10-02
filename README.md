# Course project of the third semester of the master's program


### Настройка back для локальной разработки:
---------------------------------------
1. cp .env.example .env
2. Указать свои порты, если надо
3. git config core.filemode false
4. docker-compose up --build -d
5. Ждать пока композер не отработает своё (в папке vendor должен появиться autoload)
6. sudo chmod -R 777 *
7. cp .env.example .env
8. docker-compose exec web bash
9. php artisan key:generate
10. php artisan migrate --seed
11. php artisan config:clear
12. docker-compose down && docker-compose up --build -d
---------------------------------------

### Настройка front для локальной разработки:
---------------------------------------
1. cp .env.example .env
2. Указать свои порты, если надо
3. docker-compose up --build -d
4. 0.0.0.0:**PORT**
---------------------------------------
###### Настройка завершена.
