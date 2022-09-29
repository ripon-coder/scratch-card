# Scratch Card Laravel Package

[![Issues](https://img.shields.io/github/issues/ripon-coder/scratch-card)](https://github.com/ripon-coder/scratch-card/issues)
[![Stars](https://img.shields.io/github/stars/ripon-coder/scratch-card)](https://github.com/ripon-coder/scratch-card/stargazers)

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
### Scratch Card For Item Update
```sh
    ScratchCard::updateItem($id,[
        "Laptop", // Item Name
        1, //status 1 mean Active and 0 Unactive
    ]);
```
### Scratch Card insert
```sh
       ScratchCard::insert([
        "Ripon Shikder", //name
        "01730000000", //mobile
         1, //status 1 mean Active and 0 Unactive
       ]);
```
### Scratch Card Update

```sh
       ScratchCard::update($id,[
        "Ripon", //name
        "01730000000", //mobile
         1, //status 1 mean Active and 0 Unactive
       ]);
```
### Scratch Card Get

```sh
  ScratchCard::ScratchItemGet(30);
```
30 Mean Pagination Per page

### Scratch Card Find By Mobile
```sh
  ScratchCard::FindByMobile("01730000000");
```
### Scratch Card Find By Token
```sh
  ScratchCard::TokenbyFind("7tvUzM7uWHl8dLyf2zJWssXvTopMyOYe");
```
### Scratch Card Status Deactive
```sh
  ScratchCard::ID(1)->StatusDeactive();
```
### Scratch Card Status Active
```sh
  ScratchCard::ID(1)->StatusActive();
```
### When Scratch Card Gift Done
```sh
  ScratchCard::ID(1)->giftDone();
```
## If You Want To Change Scratch Card View Change
```sh
  php artisan vendor:publish --tag=scratch-views
```
## Scratch Card View URL will be
```sh
  http://127.0.0.1:8000/scratch-card/7tvUzM7uWHl8dLyf2zJWssXvTopMyOYe
```
