# Реализация задачи #13 (Backend)

## Установка
   
##### Для разворачивания проекта необходимо:
1. Клонировать ветку репозитория:
    ```
    git clone https://github.com/avega-avega/incubator-events.git
    ```
2. Установить [Composer](https://getcomposer.org/download/ "Download Composer") и в корне проекта выполнить команду: `composer install`;
3. Изменить название файла `.env.example` на `.env` и отредактировать его под своё окружение; 
4. Задать ключ для приложения и произвести миграции: 
    ```
    php artisan key:generate
    php artisan migrate:fresh --seed
5. Запустить сервер и потыкать по ссылочкам!  \^_^
