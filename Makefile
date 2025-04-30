.ONESHELL: ;
.NOTPARALLEL: ;
default: help;

.PHONY: help
help: ## Информация о доступных командах
	@egrep -h '\s##\s' Makefile | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-20s\033[0m %s\n", $$1, $$2}'

.PHONY: up
up: ## Запустить сервер
	@echo "Запуск сервера..."
	docker-compose up -d

.PHONY: down
down: ## Остановить сервер
	@echo "Остановка сервера..."
	docker-compose down

.PHONY: console
console: ## Открыть консоль сервера
	@echo "Открытие консоли сервера..."
	docker compose exec laravel bash

.PHONY: build
build: ## Собрать проект
	@echo "Сборка проекта..."
	docker compose build

.PHONY: install
install: ## Локальная установка проекта
	@echo "Локальная установка проекта..."
	make build
	make up
	docker-compose exec -T laravel bash -c 'composer install'
	docker-compose exec -T laravel bash -c 'php artisan key:generate'
	docker-compose exec -T laravel bash -c 'php artisan storage:link'
	docker-compose exec -T laravel bash -c 'php artisan migrate:fresh --seed'
	docker-compose exec -T laravel bash -c 'php artisan optimize:clear'
	docker-compose exec -T laravel bash -c 'php artisan queue:restart'

.PHONY: update
update: ## Обновить проект
	@echo "Обновление проекта..."
	make build
	make up
	docker-compose exec -T laravel bash -c 'composer install'
	docker-compose exec -T laravel bash -c 'composer dump-autoload'
	docker-compose exec -T laravel bash -c 'php artisan optimize:clear'
	docker-compose exec -T laravel bash -c 'php artisan migrate'
	docker-compose exec -T laravel bash -c 'php artisan queue:restart'

.PHONY: build_prod
build_prod: ## Деплой проекта
	@echo "Деплой проекта..."
	docker-compose -f docker-compose.yml -f docker-compose.production.yml build

.PHONY: up_prod
up_prod: ## Деплой проекта
	@echo "Запуск в проде..."
	docker-compose -f docker-compose.yml -f docker-compose.production.yml up -d

.PHONY: install_prod
install_prod: ## Локальная установка проекта
	@echo "Установка проекта в продакшене..."
	make build_prod
	make up_prod
	docker-compose exec -T laravel bash -c 'composer install'
	docker-compose exec -T laravel bash -c 'php artisan key:generate'
	docker-compose exec -T laravel bash -c 'php artisan storage:link'
	docker-compose exec -T laravel bash -c 'php artisan optimize:clear'
	docker-compose exec -T laravel bash -c 'php artisan config:cache'
	docker-compose exec -T laravel bash -c 'php artisan event:cache'
	docker-compose exec -T laravel bash -c 'php artisan route:cache'
	docker-compose exec -T laravel bash -c 'php artisan migrate:fresh --seed'
	docker-compose exec -T laravel bash -c 'php artisan queue:restart'

.PHONY: update_prod
update_prod: ## Обновить проект
	@echo "Обновление проекта..."
	make build_prod
	make up_prod
	docker-compose exec -T laravel bash -c 'composer install --no-interaction --no-dev --optimize-autoloader'
	docker-compose exec -T laravel bash -c 'php artisan optimize:clear'
	docker-compose exec -T laravel bash -c 'php artisan config:cache'
	docker-compose exec -T laravel bash -c 'php artisan event:cache'
	docker-compose exec -T laravel bash -c 'php artisan route:cache'
	docker-compose exec -T laravel bash -c 'php artisan migrate --force'
	docker-compose exec -T laravel bash -c 'php artisan queue:restart'

.PHONY: test
test: ## Протестировать проект
	@echo "Тестирование проекта..."
	docker-compose run --rm laravel bash -c 'composer check'

.PHONY: init
init: ## Первичная установка проекта
	@echo "Первичная установка проекта..."
	make build
	make up
	make init_backend
	make init_frontend

.PHONY: env
env: ## Установка переменных окружения
	@echo "Установка переменных окружения..."
	cp .env.example .env
	cp backend/.env.example backend/.env
	#cp frontend/.env.example frontend/.env

.PHONY: serve
serve: ## Запуск фронтенд приложения
	@echo "Запуск фронтенд приложения..."
	docker-compose exec -T laravel bash -c 'npm install'
	docker-compose exec -T laravel bash -c 'npm run dev'

.PHONY: init_frontend
init_frontend:
	@echo "Установка фронтенда..."
	docker-compose exec -T laravel bash -c 'cd /frontend && rm .gitignore && npm install vue@next'

.PHONY: init_backend
init_backend:
	@echo "Установка бэкенда..."
	docker-compose exec -T laravel bash -c 'rm .gitignore && composer create-project laravel/laravel .'
