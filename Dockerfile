FROM php:8.2-fpm

# Установим зависимости
RUN apt-get update && apt-get install -y \
    git curl zip unzip libpng-dev libjpeg-dev libfreetype6-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo pdo_mysql mbstring zip exif pcntl bcmath gd

# Установим Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Создаём рабочую директорию
WORKDIR /var/www

# Копируем проект
COPY invest-real-estate .

# Устанавливаем зависимости Laravel
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Генерируем ключ (можно убрать, если нет .env)
# RUN php artisan key:generate

# Права доступа
RUN chmod -R 775 storage bootstrap/cache

# Laravel будет слушать порт 8000
EXPOSE 8000

# Запуск Laravel
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
