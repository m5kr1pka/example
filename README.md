# Example task for job application
## Not readyready for Production 

- Fetches page rank from OpenPageRank
- Displays in Vue.js datatable - basic pagination and filtering

**To fetch rank manually:**
```
php artisan app:fetch-rank 
```

![Screenshot](https://github.com/m5kr1pka/example/blob/main/storage/screenshot.png?raw=true)

## Launch
```
composer install
```
```
- create .env file (copy from .env.example)
```
```
php artisan migrate
php artisan db:seed
```

**Fetching of rank**<br>
if cron is setuped properly in server it is set to run daily
```
php artisan app:fetch-rank 
```