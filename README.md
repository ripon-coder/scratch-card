# Scratch Card Laravel Package
## Installation
```sh
composer require riponcoder/scratch-card
```
## Migration
```sh
php artisan migrate
```
## Facades
```sh
use Ripon\ScratchCard\ScratchCard;
OR
use ScratchCard;
```
## Usage
### Scratch Card For Item Insert
```sh
    ScratchCard::insertItem([
        "Laptop", // Item Name
        1, //status 1 mean Active and 0 Unactive
    ]);
```