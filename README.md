# ByteNet\LaravelAdminBase
Laravel Admin's base package, which offers admin authentication and a blank admin panel

# Base

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

Laravel AdminBase central package, which includes:
- a customized version of Laravel's authentication interface; // TODO
- basic user management page (edit password, name, email);
- basic admin dashboard page; // TODO
- pretty error pages; // TODO
- admin-wide alerts system (notification bubbles); // TODO
- roles / permissions; // TODO

## Install on Laravel 5.3

1) Run in your terminal:

``` bash
$ composer require bytenet/laravel-admin-base
```

2) Add the service providers in config/app.php:
``` php
ByteNet\LaravelAdminBase\BaseServiceProvider::class,
```

3) Then run a few commands in the terminal:
``` bash
$ rm -rf app/Http/Controllers/Auth
$ php artisan vendor:publish --provider="ByteNet\LaravelAdminBase\BaseServiceProvider"
$ php artisan migrate
```

4) Make sure the reset password emails have the correct reset link by editing the adding these to your ```User``` model:
- before class name ```use ByteNet\LaravelAdminBase\app\Notifications\ResetPasswordNotification as ResetPasswordNotification;```
- as a method inside the User class:
``` php
  /**
   * Send the password reset notification.
   *
   * @param  string  $token
   * @return void
   */
  public function sendPasswordResetNotification($token)
  {
      $this->notify(new ResetPasswordNotification($token));
  }
```

5) [optional] Change values in config/bytenet/base.php to make the admin panel your own. Change menu color, project name, developer name etc.

## Usage 

1. Register a new user at yourappname/admin/register
2. Your admin panel will be available at yourappname/admin
3. [optional] If you're building an admin panel, you should close the registration. In config/bytenet/base.php look for "registration_open" and change it to false.

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Todos

// TODO

## Testing

// TODO

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email zexbre1@gmail.com instead of using the issue tracker.

## Credits

- [Nikola Zeravcic][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/bytenet/laravel-admin-base.svg?style=flat-square
[ico-license]: https://img.shields.io/github/license/mashape/apistatus.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/ByteNet-Serbia/laravel-admin-base.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/bytenet/laravel-admin-base.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/bytenet/base.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/bytenet/laravel-admin-base.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/bytenet/laravel-admin-base
[link-travis]: https://travis-ci.org/ByteNet-Serbia/laravel-admin-base
[link-scrutinizer]: https://scrutinizer-ci.com/g/bytenet/laravel-admin-base/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/bytenet/laravel-admin-base
[link-downloads]: https://packagist.org/packages/bytenet/laravel-admin-base
[link-author]: https://github.com/zeravcic
[link-contributors]: ../../contributors
