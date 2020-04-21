<p align="center">   
    <a href="https://github.com/raditzfarhan/laravel-sortable"><img src="https://img.shields.io/badge/License-MIT-yellow.svg?style=flat-square" alt="License"></a>
    <a href="https://github.com/raditzfarhan/laravel-sortable"><img src="https://github.styleci.io/repos/7548986/shield?style=square" alt="styleci"></img></a>
</p>

# Laravel Sortable
Just a simple sortable behaviour for your Laravel and Lumen eloquent model.

## Installation

Via Composer

``` bash
$ composer require raditzfarhan/laravel-sortable:^1.0
```

## Usage

Add the `Sortable` trait to your model:

```php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use RaditzFarhan\LaravelSortable\Sortable;

class Post extends Model
{
    use Sortable;    

    // The ordering column in your table. Default to `sort_order`.
    // No need to set this if your ordering column name is `sort_order`.
    protected $sortable = 'ordering';
}

```

## Credits

- [Raditz Farhan](https://github.com/raditzfarhan)

## License

MIT. Please see the [license file](LICENSE) for more information.

