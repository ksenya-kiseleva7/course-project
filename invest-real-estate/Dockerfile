# Используем официальный PHP образ
FROM php:8.2-fpm

# Устанавливаем зависимости
RUN apt-get update && apt-get install -y \
    git curl libpng-dev libjpeg-dev libonig-dev libxml2-dev zip unzip \
    libzip-dev libpq-dev libfreetype6-dev \
    && docker-php-ext-install pdo pdo_mysql mbstring zip exif pcntl bcmath gd

# Устанавливаем Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Создаем рабочую директорию
WORKDIR /var/www

# Копируем проект внутрь контейнера
COPY . .

# Устанавливаем зависимости Laravel
RUN composer install

# Генерируем ключ
RUN php artisan key:generate

# Делаем публичные файлы доступными
RUN chmod -R 755 /var/www/storage /var/www/bootstrap/cache

# Указываем порт и команду запуска
EXPOSE 8000
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
