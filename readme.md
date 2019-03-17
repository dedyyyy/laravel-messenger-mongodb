

# Laravel Messenger
This package will allow you to add a full user messaging system into your Laravel application.



## Features
* Multiple conversations per user
* Optionally loop in additional users with each new message
* View the last message for each thread available
* Returns either all messages in the system, all messages associated to the user, or all message associated to the user with new/unread messages
* Return the users unread message count easily
* Very flexible usage so you can implement your own access control

## Common uses
* Open threads (everyone can see everything)
* Group messaging (only participants can see their threads)
* One to one messaging (private or direct thread)

## Laravel Versions

Laravel | Messenger
--- | ---
4.* | 1.*
5.0-5.4 | <= 2.16.2
5.5+ | 2.*

## Installation (Laravel 4.x - no longer actively supported)
Installation instructions for Laravel 4 can be [found here](https://github.com/dedyyyy/laravel-messenger/tree/v1).

## Installation (Laravel 5.x)
```
composer require dedyyyy/messenger
```

Or place manually in composer.json:

```
"require": {
    "dedyyyy/messenger": "~2.0"
}
```

Run:

```
composer update
```

Add the service provider to `config/app.php` under `providers`:

```php
'providers' => [
    Dedyyyy\Messenger\MessengerServiceProvider::class,
],
```

> **Note**: If you are using Laravel 5.5, this step is unnecessary. Laravel Messenger supports [Package Discovery](https://laravel.com/docs/5.5/packages#package-discovery).

Publish config:

```
php artisan vendor:publish --provider="Dedyyyy\Messenger\MessengerServiceProvider" --tag="config"
```
	
Update config file to reference your User Model:

```
config/messenger.php
```

Create a `users` table if you do not have one already. If you need one, the default Laravel migration will be satisfactory.

**(Optional)** Define names of database tables in package config file if you don't want to use default ones:

```php
'messages_table' => 'messenger_messages',
'participants_table' => 'messenger_participants',
'threads_table' => 'messenger_threads',
```
    
Publish migrations:

```
php artisan vendor:publish --provider="Dedyyyy\Messenger\MessengerServiceProvider" --tag="migrations"
```

Migrate your database:

```
php artisan migrate
```

Add the trait to your user model:

```php
use Dedyyyy\Messenger\Traits\Messagable;

class User extends Authenticatable {
    use Messagable;
}
```

## Examples
* [Controller](https://github.com/dedyyyy/laravel-messenger/tree/master/examples/MessagesController.php)
* [Routes](https://github.com/dedyyyy/laravel-messenger/tree/master/examples/routes.php)
* [Views](https://github.com/dedyyyy/laravel-messenger/tree/master/examples/views)


### Special Thanks
This package used [Cmgmyr/laravel-messenger](https://github.com/cmgmyr/laravel-messenger) as a starting point.
