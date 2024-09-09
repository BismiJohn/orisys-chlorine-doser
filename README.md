# orisys-chlorine-doser
1. cd /path/to/your/laravel-project/packages
2. Create the Package Directory:
       mkdir Orisys/ChlorineDoser/src
3. Create Package Files:
       {
    "name": "orisys/chlorine-doser",
    "description": "Chlorine Dosing System Package",
    "type": "library",
    "autoload": {
        "psr-4": {
            "Orisys\\ChlorineDoser\\": "src/"
        }
    },
    "require": {},
    "extra": {
        "laravel": {
            "providers": [
                "Orisys\\ChlorineDoser\\ChlorineDoserServiceProvider"
            ]
        }
    }
}

4. Create Directories for configuration, controllers, migrations, etc.

Service Provider (src/ChlorineDoserServiceProvider.php):

namespace Orisys\ChlorineDoser;

use Illuminate\Support\ServiceProvider;

class ChlorineDoserServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/chlorine-doser.php' => config_path('chlorine-doser.php'),
        ], 'config');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'chlorine-doser');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }

    public function register()
    {
        //
    }
}

5. Controllers: Copy your existing controllers into src/Http/Controllers.

6. Migrations: Copy migration files to src/database/migrations.

7. Helpers: Include any helper files in src/Helpers.

8. Add Service Provider to Laravel: 

'providers' => [
    // Other Service Providers
    Orisys\ChlorineDoser\ChlorineDoserServiceProvider::class,
],

10. Add Package Repository:

"repositories": [
    {
        "type": "path",
        "url": "./packages/Orisys/ChlorineDoser"
    }
]
11. Require the Package: Run the following command to add the package:
  composer require orisys/chlorine-doser
12. Initialize Git in the Package Directory:
  cd /path/to/your/laravel-project/packages/Orisys/ChlorineDoser
  git init

13. Installing the Package in a New Laravel Project

"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/BismiJohn/orisys-chlorine-doser.git"
    }
]

13. Require the Package: Add the package to your new Laravel project:

14. composer require orisys/chlorine-doser
15. Publish Configuration, Views, and Migrations: After requiring the package, you can publish its resources:
16. php artisan vendor:publish --provider="Orisys\ChlorineDoser\ChlorineDoserServiceProvider"
