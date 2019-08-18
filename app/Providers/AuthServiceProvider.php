<?php

namespace App\Providers;

use App\Permission;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
//        Gate::define('edit-note', function ($user,$note){
//            return $user->id  == $note->user_id;
//        });
        foreach ($this->getPermission() as $permission){    //use class permission
            Gate::define($permission->name ,function($user) use ($permission){
               return $user->hasRole($permission->roles);
            });
    }
}
    
protected function getPermission(){
    return Permission::with('roles')->get();
}

}