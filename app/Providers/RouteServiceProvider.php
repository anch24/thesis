<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        $this->mapAdminRoutes();

        $this->mapStaffRoutes();

        $this->mapInstructorRoutes();

        $this->mapChairpersonRoutes();

        $this->mapStudentRoutes();

        //
    }    
    
    /**
     * Define the "student" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapStudentRoutes()
    {
        Route::prefix('student')
             ->middleware(['web'])
             ->namespace($this->namespace)
             ->group(base_path('routes/student.php'));
    }    
    
    /**
     * Define the "chairperson" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapChairpersonRoutes()
    {
        Route::prefix('chairperson')
             ->middleware(['web'])
             ->namespace($this->namespace)
             ->group(base_path('routes/chairperson.php'));
    }    
    
    /**
     * Define the "instructor" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapInstructorRoutes()
    {
        Route::prefix('instructor')
             ->middleware(['web'])
             ->namespace($this->namespace)
             ->group(base_path('routes/instructor.php'));
    }    
    
    /**
     * Define the "staff" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapStaffRoutes()
    {
        Route::prefix('staff')
             ->middleware(['web'])
             ->namespace($this->namespace)
             ->group(base_path('routes/staff.php'));
    }    
    
    /**
     * Define the "admin" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapAdminRoutes()
    {
        Route::prefix('admin')
             ->middleware(['web'])
             ->namespace($this->namespace)
             ->group(base_path('routes/admin.php'));
    }











    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }
}
