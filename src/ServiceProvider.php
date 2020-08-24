<?php

namespace Aldhix\Adminlte;

use Illuminate\Support\ServiceProvider as Service;
use Illuminate\Support\Facades\Blade;

class ServiceProvider extends Service
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/controllers' => app_path('/Http/Controllers'),
            __DIR__.'/views' => resource_path('/views'),
            __DIR__.'/public' => public_path('/'),
        ]);
        
        Blade::include('adminlte.layouts.navbar', 'adminlteNavbar');
        Blade::include('adminlte.layouts.sidebar', 'adminlteSidebar');
        Blade::include('adminlte.layouts.footer', 'adminlteFooter');
        Blade::include('adminlte.layouts.sidebar.brand', 'adminlteSidebarBrand');
        Blade::include('adminlte.layouts.sidebar.user', 'adminlteSidebarUser');
        Blade::include('adminlte.layouts.sidebar.menu', 'adminlteSidebarMenu');
        Blade::component('adminlte.components.sidebar.menu','lte-sidebar-menu');
        Blade::component('adminlte.components.sidebar.submenu','lte-sidebar-submenu');
        Blade::component('adminlte.components.action','lte-action');
        Blade::component('adminlte.components.alert','lte-alert');
        Blade::component('adminlte.components.button','lte-button');
        Blade::component('adminlte.components.form-card','lte-form-card');
        Blade::component('adminlte.components.input','lte-input');
        Blade::component('adminlte.components.select','lte-select');
        Blade::component('adminlte.components.table','lte-table');
        Blade::component('adminlte.components.tabs-card','lte-tabs-card');
        Blade::component('adminlte.components.textarea','lte-textarea');
    }
}