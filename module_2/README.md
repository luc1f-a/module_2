# Вводный курс. Модуль 2. Практика с проверкой ментором (HW)

### Запуск

1. Сборка сервера и клиента

`docker build -t server ./front/; docker build -t client ./front/`

2. Запуск сервисов

`docker compose up -d`

3. Подключение к клиенту

`docker exec -ti client /bin/bash`

4. Подключение к mysql

`apt install mysql\* && mysql -h host.docker.internal -P 3306 -u user -p`

5. Выполнение sql-запроса. Пример находится в command.sql

`use reg1;`
`update customers set salary = 3000 where id = 3;`

6. Изменения отобразились на фронте