# Используем официальный PHP-образ с FPM
FROM php:8.2-fpm

# Установим зависимости для PHP и Composer
RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    pkg-config \
    libssl-dev \
    && docker-php-ext-install pdo pdo_mysql mbstring zip exif pcntl bcmath gd \
    && apt-get clean

# Устанавливаем Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Устанавливаем Node.js и npm
RUN curl -sL https://deb.nodesource.com/setup_16.x | bash - \
    && apt-get install -y nodejs

# Создаём рабочую директорию
WORKDIR /var/www

# Копируем всё содержимое внутрь контейнера
COPY . .

# Устанавливаем зависимости Laravel
RUN composer install --no-interaction --prefer-dist --optimize-autoloader
RUN php artisan key:generate

# Права доступа
RUN chmod -R 775 storage bootstrap/cache

# Laravel будет слушать порт 8000
EXPOSE 8000

# Запуск Laravel
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
