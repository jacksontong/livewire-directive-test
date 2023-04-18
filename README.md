https://laravel.com/docs/10.x/sail

Sail alias

```bash
alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'
```

## Installing composer dependencies for existing project

https://laravel.com/docs/10.x/sail#installing-composer-dependencies-for-existing-projects

```bash
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs
```
