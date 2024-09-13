<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Models\Role;
use Illuminate\Database\Eloquent\Model;

class BreadcrumbServiceProvider extends ServiceProvider
{
    public function boot()
    {
        View::composer('*', function ($view) {
            $routeName = Route::currentRouteName();

            $breadcrumbs = $this->generateBreadcrumbs($routeName);

            $view->with('breadcrumbs', $breadcrumbs);
        });
    }

    protected function generateBreadcrumbs($routeName)
    {
        $breadcrumbs = [];

        // Aquí defines la lógica para los breadcrumbs basados en las rutas.
        // Puedes añadir más rutas y nombres según sea necesario.
        switch ($routeName) {
            case 'home':
                $breadcrumbs[] = ['name' => 'Inicio', 'url' => route('home')];
                break;
            //Breadcrumb para index y crear roles
            case 'roles.index':
                $breadcrumbs[] = ['name' => 'Inicio', 'url' => route('home')];
                $breadcrumbs[] = ['name' => 'Roles', 'url' => route('roles.index')];
                break;

            case 'roles.create':
                $breadcrumbs[] = ['name' => 'Inicio', 'url' => route('home')];
                $breadcrumbs[] = ['name' => 'Roles', 'url' => route('roles.index')];
                $breadcrumbs[] = ['name' => 'Crear Rol', 'url' => route('roles.create')];
                break;
            // case 'roles.edit':
            //         $role = \App\Models\Role::findOrFail(request()->route('role')); // Obtén el rol actual por ID
            //         $breadcrumbs[] = ['name' => 'Inicio', 'url' => route('home')];
            //         $breadcrumbs[] = ['name' => 'Roles', 'url' => route('roles.index')];
            //         $breadcrumbs[] = ['name' => $role->name, 'url' => route('roles.show', $role->id)];
            //         $breadcrumbs[] = ['name' => 'Editar', 'url' => route('roles.edit', $role->id)];
            //         break;

                //Breadcrumb para index y crear roles
            case 'usuarios.index':
                $breadcrumbs[] = ['name' => 'Inicio', 'url' => route('home')];
                $breadcrumbs[] = ['name' => 'Usuarios', 'url' => route('usuarios.index')];
                break;

            case 'usuarios.create':
                $breadcrumbs[] = ['name' => 'Inicio', 'url' => route('home')];
                $breadcrumbs[] = ['name' => 'Usuarios', 'url' => route('usuarios.index')];
                $breadcrumbs[] = ['name' => 'Crear Usuario', 'url' => route('usuarios.create')];
                break;
            case 'inscripcion.index':
                $breadcrumbs[] = ['name' => 'Inicio', 'url' => route('home')];
                $breadcrumbs[] = ['name' => 'Inscripción', 'url' => route('inscripcion.index')];
                break;
            // Agrega más casos aquí según tus rutas.
            default:
                $breadcrumbs[] = ['name' => 'Inicio', 'url' => route('home')];
                break;
        }

        return $breadcrumbs;
    }
}
