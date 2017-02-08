# Change Log

All Notable changes to `bytenet\laravel-admin-base` project will be documented in this file.


The format is based on [Keep a Changelog](http://keepachangelog.com/) and this project adheres to [Semantic Versioning](http://semver.org/).


## [0.3.0] - 2017-02-08
### Changed
- src/BaseServiceProvider.php
- src/app/Http/Controllers/AdminController.php
- src/app/Http/Controllers/Auth/ForgotPasswordController.php
- src/app/Http/Controllers/Auth/LoginController.php
- src/app/Http/Controllers/Auth/RegisterController.php
- src/app/Http/Controllers/Auth/ResetPasswordController.php
- src/app/Http/Middleware/ByteNetAuthenticate.php
- src/app/Notifications/ResetPasswordNotification.php
- src/config/bytenet/{ => admin}/base.php
- src/public/bytenet.base.css
- src/resources/lang/en/base.php
- src/resources/lang/es/base.php
- src/resources/lang/fr/base.php
- src/resources/lang/it/base.php
- src/resources/lang/ro/base.php
- src/resources/lang/sr_Cyrl_RS/base.php
- src/resources/lang/sr_Latn_RS/base.php
- src/resources/views/auth/login.blade.php
- src/resources/views/auth/passwords/email.blade.php
- src/resources/views/auth/passwords/reset.blade.php
- src/resources/views/auth/register.blade.php
- src/resources/views/dashboard.blade.php
- src/resources/views/inc/alerts.blade.php
- src/resources/views/inc/menu.blade.php
- src/resources/views/inc/sidebar.blade.php
- src/resources/views/inc/sidebar_control.blade.php
- src/resources/views/layout.blade.php
- src/resources/views_errors/400.blade.php
- src/resources/views_errors/401.blade.php
- src/resources/views_errors/403.blade.php
- src/resources/views_errors/404.blade.php 
- src/resources/views_errors/405.blade.php 
- src/resources/views_errors/408.blade.php 
- src/resources/views_errors/429.blade.php 
- src/resources/views_errors/500.blade.php 
- src/resources/views_errors/503.blade.php
- src/routes/web.php
- tests/.env
- tests/app.php
- tests/database.php

## [0.2.0] - 2017-01-07
### Added
- src/public/bytenet.base.css
- src/resources/views_errors/400.blade.php
- src/resources/views_errors/401.blade.php
- src/resources/views_errors/403.blade.php
- src/resources/views_errors/404.blade.php
- src/resources/views_errors/405.blade.php
- src/resources/views_errors/408.blade.php
- src/resources/views_errors/429.blade.php
- src/resources/views_errors/500.blade.php
- src/resources/views_errors/503.blade.php

### Changed
- src/BaseServiceProvider.php
- src/config/bytenet/base.php
- src/resources/views/inc/sidebar.blade.php
- src/resources/views/layout.blade.php

## [0.1.11] - 2017-01-03
### Added
- src/database/seeds/UsersTableSeeder.php

### Changed
- src/BaseServiceProvider.php
- .travis.yml

## [0.1.10] - 2016-12-26
### Added
- .gitattributes file

### Changed
- .gitignore, CHANGELOG.md...
- some files makeup (Code Sniffer etc.)

## [0.1.9] - 2016-12-24
### Added
- Make proper migrate files

## [0.1.8] - 2016-12-24
### Added
- Make proper migrate files

## [0.1.7] - 2016-12-24
### Fixed
- AdminLTE bugfix 201612242120

## [0.1.6] - 2016-12-24
### Fixed
- AdminLTE bugfix 201612242110

## [0.1.5] - 2016-12-24
### Fixed
- AdminLTE bugfix 201612242100

## [0.1.4] - 2016-12-24
### Added
- AdminLTE support

## [0.1.3] - 2016-12-22
### Fixed
- Some cosmetic changes

## [0.1.2] - 2016-09-05
### Added
- Changed functionalities for Laravel 5.3

## [0.1.1] - 2016-08-30
### Added
- Laravel workbench for Travis CI

## [0.1.0] - 2016-08-19
### Added
- Changed password functionalities

## 0.0.1 - 2016-08-19
### Added
- Moved all test controllers, views, config file, lang file for Laravel authentication into the package. Loading the package will allow the user to make use of Backpack authentication, instead of Laravel's default.

[0.3.0]: https://github.com/ByteNet-Serbia/laravel-admin-base/compare/v0.2.0...v0.3.0
[0.2.0]: https://github.com/ByteNet-Serbia/laravel-admin-base/compare/v0.1.11...v0.2.0
[0.1.11]: https://github.com/ByteNet-Serbia/laravel-admin-base/compare/v0.1.10...v0.1.11
[0.1.10]: https://github.com/ByteNet-Serbia/laravel-admin-base/compare/v0.1.9...v0.1.10
[0.1.9]: https://github.com/ByteNet-Serbia/laravel-admin-base/compare/v0.1.8...v0.1.9
[0.1.8]: https://github.com/ByteNet-Serbia/laravel-admin-base/compare/v0.1.7...v0.1.8
[0.1.7]: https://github.com/ByteNet-Serbia/laravel-admin-base/compare/v0.1.6...v0.1.7
[0.1.6]: https://github.com/ByteNet-Serbia/laravel-admin-base/compare/v0.1.5...v0.1.6
[0.1.5]: https://github.com/ByteNet-Serbia/laravel-admin-base/compare/v0.1.4...v0.1.5
[0.1.4]: https://github.com/ByteNet-Serbia/laravel-admin-base/compare/v0.1.3...v0.1.4
[0.1.3]: https://github.com/ByteNet-Serbia/laravel-admin-base/compare/v0.1.2...v0.1.3
[0.1.2]: https://github.com/ByteNet-Serbia/laravel-admin-base/compare/v0.1.1...v0.1.2
[0.1.1]: https://github.com/ByteNet-Serbia/laravel-admin-base/compare/v0.1.0...v0.1.1
[0.1.0]: https://github.com/ByteNet-Serbia/laravel-admin-base/compare/v0.0.1...v0.1.0
