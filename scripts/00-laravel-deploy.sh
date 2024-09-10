#!/usr/bin/env bash
php artisan down

echo "Running composer"

composer install --no-interaction --prefer-dist --optimize-autoloader --no-dev


echo "Caching config/routes..."
php artisan optimize

echo "Running migrations..."
php artisan migrate --force

php artisan auth:clear-resets

echo "Building frontend assets..."
npm ci              
npm run production --silent

php artisan up

echo "Deployment complete"

