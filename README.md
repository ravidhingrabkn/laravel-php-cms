# Laravel CMS using Vanilla PHP Views

This repository is a simple CMS using Laravel and W3.CSS. The code consists of a login, a dashboard, a place to view/add/edit/delete users, and a place to view/add/edit/delete projects.

<table>
    <tr>
        <th>Name</th>
        <th>Contribution</th>
    </tr>
    <tr>
        <td>Ravi Dhingra</td>
        <td>Social-Media, CRUD functionality</td>
     </tr>
     
 </table>


A few notes regarding the CMS:

The CMS uses the public storage driver, make sure to update your .env file to:

```php
FILESYSTEM_DRIVER=public
```

The database setup includes migrations and seeding. Run the following command to initialize the database:

```
php artisan migrate:refresh --seed
```

All user acocunts will have the default password of "password".

## Tutorial Requirements:

* [Visual Studio Code](https://code.visualstudio.com/) or [Brackets](http://brackets.io/) (or any code editor)
* [Laravel](https://laravel.com/)

Full tutorial URL: https://codeadam.ca/learning/php-cms-laravel.html

<a href="https://codeadam.ca">
<img src="https://codeadam.ca/images/code-block.png" width="100">
</a>
