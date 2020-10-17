### passport
install passport 
`> composer require laravel/passport`

migrate
`> php artisan migrate`

crate enctyption key:
`> php artisan passport:install`

models/User.php add 
```
use Laravel\Passport\HasApiTokens;
```

and change
```
use HasFactory, Notifiable;
```
with:
```
    use HasApiTokens, HasFactory, Notifiable;
```

example:
```
class User extends Authenticatable
{
    #use HasFactory, Notifiable;

    use HasApiTokens, HasFactory, Notifiable;
}
```

go in app/Providers/AuthServiceProvider.php

and add: `use Laravel\Passport\Passport;`  and `Passport::routes();`

```
namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Laravel\Passport\Passport;


class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Passport::routes();
    }
}

```

go to `config/auth.php` and set the driver option of the api authentication guard to passport.
