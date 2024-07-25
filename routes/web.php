<?php

use App\Http\Controllers\BannerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Blade\UserController;
use App\Http\Controllers\Blade\RoleController;
use App\Http\Controllers\Blade\PermissionController;
use App\Http\Controllers\Blade\HomeController;
use App\Http\Controllers\Blade\ApiUserController;
use App\Http\Controllers\Blade\BlogController;
use App\Http\Controllers\Blade\SettingsController;
use App\Http\Controllers\Blade\RegionController;
use App\Http\Controllers\Blade\DistrictController;
use App\Http\Controllers\Blade\JobController;
use App\Http\Controllers\Blade\CategoryController;
use App\Http\Controllers\Blade\ProductController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProductModelController;
use App\Models\ProductModel;

/*
|--------------------------------------------------------------------------
| Blade (front-end) Routes
|--------------------------------------------------------------------------
|
| Here is we write all routes which are related to web pages
| like UserManagement interfaces, Diagrams and others
|
*/

// Default laravel auth routes
Auth::routes(['register' => false]);


// Welcome page
// Route::get('/', function () {
//     return view('welcome');
// });


// Web pages
Route::group(['middleware' => 'auth'],function (){

    // there should be graphics, diagrams about total conditions
    Route::get('/home', [HomeController::class,'index'])->name('home');

    // Settings
    Route::get('/setting/about',[SettingsController::class, 'aboutCompany'])->name('settingAbout');
    Route::get('/setting/about/edit',[SettingsController::class, 'editCompany'])->name('settingEdit');
    Route::post('/setting/about/update',[SettingsController::class, 'updateCompany'])->name('settingUpdate');

    Route::get('/setting/start/message',[SettingsController::class, 'startMessage'])->name('settingStartMessage');
    Route::get('/setting/start/message/add',[SettingsController::class, 'startMessageAdd'])->name('settingStartMessageAdd');
    Route::post('/setting/start/message/create',[SettingsController::class, 'startMessageCreate'])->name('settingStartMessageCreate');
    Route::get('/setting/start/message/{id}',[SettingsController::class, 'startMessageEdit'])->name('settingStartMessageEdit');
    Route::post('/setting/start/message/{id}/update',[SettingsController::class, 'startMessageUpdate'])->name('settingStartMessageUpdate');

    // Regions
    Route::get('/regions',[RegionController::class, 'index'])->name('regionIndex');
    Route::get('/region/add',[RegionController::class, 'add'])->name('regionAdd');
    Route::post('/region/create',[RegionController::class, 'create'])->name('regionCreate');
    Route::get('/region/edit/{id}',[RegionController::class, 'edit'])->name('regionEdit');
    Route::post('/region/update/{id}',[RegionController::class, 'update'])->name('regionUpdate');
    Route::delete('/region/delete/{id}',[RegionController::class,'destroy'])->name('regionDestroy');

    // Districts 
    Route::get('/districts',[DistrictController::class, 'index'])->name('districtIndex');
    Route::get('/district/add',[DistrictController::class, 'add'])->name('districtAdd');
    Route::post('/district/create',[DistrictController::class, 'create'])->name('districtCreate');
    Route::get('/district/edit/{id}',[DistrictController::class, 'edit'])->name('districtEdit');
    Route::post('/district/update/{id}',[DistrictController::class, 'update'])->name('districtUpdate');
    Route::delete('/district/delete/{id}',[DistrictController::class,'destroy'])->name('districtDestroy');

    // Jobs
    Route::get('/job-programs',[JobController::class, 'index'])->name('jobProgramIndex');
    Route::get('/job-program/add',[JobController::class, 'add'])->name('jobProgramAdd');
    Route::post('/job-program/create',[JobController::class, 'create'])->name('jobProgramCreate');
    Route::get('/job-program/edit/{id}',[JobController::class, 'edit'])->name('jobProgramEdit');
    Route::post('/job-program/update/{id}',[JobController::class, 'update'])->name('jobProgramUpdate');
    Route::delete('/job-program/delete/{id}',[JobController::class,'destroy'])->name('jobProgramDestroy');
    // Route::post('/job-program/toggle-status/{id}',[JobController::class,'toggleProductActivation'])->name('productActivation');

    // Products
    Route::get('/products',[ProductController::class, 'index'])->name('productIndex');
    Route::get('/product/add',[ProductController::class, 'add'])->name('productAdd');
    Route::post('/product/create',[ProductController::class, 'create'])->name('productCreate');
    Route::get('/product/edit/{id}',[ProductController::class, 'edit'])->name('productEdit');
    Route::post('/product/update/{id}',[ProductController::class, 'update'])->name('productUpdate');
    Route::delete('/product/delete/{id}',[ProductController::class,'destroy'])->name('productDestroy');
    Route::post('/product/toggle-status/{id}',[ProductController::class,'toggleProductActivation'])->name('productActivation');

    // Blogs
    Route::get('/blogs',[BlogController::class, 'index'])->name('blogIndex');
    Route::get('/blog/add',[BlogController::class, 'add'])->name('blogAdd');
    Route::post('/blog/create',[BlogController::class, 'create'])->name('blogCreate');
    Route::get('/blog/edit/{id}',[BlogController::class, 'edit'])->name('blogEdit');
    Route::post('/blog/update/{id}',[BlogController::class, 'update'])->name('blogUpdate');
    Route::delete('/blog/delete/{id}',[BlogController::class,'destroy'])->name('blogDestroy');
    Route::post('/blog/toggle-status/{id}',[BlogController::class,'toggleBlogActivation'])->name('blogActivation');

    // Categories
    Route::get('/categories',[CategoryController::class, 'index'])->name('categoryIndex');
    Route::get('/category/add',[CategoryController::class, 'add'])->name('categoryAdd');
    Route::post('/category/create',[CategoryController::class, 'create'])->name('categoryCreate');
    Route::get('/category/edit/{id}',[CategoryController::class, 'edit'])->name('categoryEdit');
    Route::post('/category/update/{id}',[CategoryController::class, 'update'])->name('categoryUpdate');
    Route::delete('/category/delete/{id}',[CategoryController::class,'destroy'])->name('categoryDestroy');

    // Users
    Route::get('/users',[UserController::class,'index'])->name('userIndex');
    Route::get('/user/add',[UserController::class,'add'])->name('userAdd');
    Route::post('/user/create',[UserController::class,'create'])->name('userCreate');
    Route::get('/user/{id}/edit',[UserController::class,'edit'])->name('userEdit');
    Route::post('/user/update/{id}',[UserController::class,'update'])->name('userUpdate');
    Route::delete('/user/delete/{id}',[UserController::class,'destroy'])->name('userDestroy');
    Route::get('/user/theme-set/{id}',[UserController::class,'setTheme'])->name('userSetTheme');
    Route::post('/save-fullscreen-state', [UserController::class, 'saveFullscreenState'])->name('save.fullscreen.state');


    // Permissions
    Route::get('/permissions',[PermissionController::class,'index'])->name('permissionIndex');
    Route::get('/permission/add',[PermissionController::class,'add'])->name('permissionAdd');
    Route::post('/permission/create',[PermissionController::class,'create'])->name('permissionCreate');
    Route::get('/permission/{id}/edit',[PermissionController::class,'edit'])->name('permissionEdit');
    Route::post('/permission/update/{id}',[PermissionController::class,'update'])->name('permissionUpdate');
    Route::delete('/permission/delete/{id}',[PermissionController::class,'destroy'])->name('permissionDestroy');

    // Roles
    Route::get('/roles',[RoleController::class,'index'])->name('roleIndex');
    Route::get('/role/add',[RoleController::class,'add'])->name('roleAdd');
    Route::post('/role/create',[RoleController::class,'create'])->name('roleCreate');
    Route::get('/role/{role_id}/edit',[RoleController::class,'edit'])->name('roleEdit');
    Route::post('/role/update/{role_id}',[RoleController::class,'update'])->name('roleUpdate');
    Route::delete('/role/delete/{id}',[RoleController::class,'destroy'])->name('roleDestroy');

    // ApiUsers
    Route::get('/api-users',[ApiUserController::class,'index'])->name('api-userIndex');
    Route::get('/api-user/add',[ApiUserController::class,'add'])->name('api-userAdd');
    Route::post('/api-user/create',[ApiUserController::class,'create'])->name('api-userCreate');
    Route::get('/api-user/show/{id}',[ApiUserController::class,'show'])->name('api-userShow');
    Route::get('/api-user/{id}/edit',[ApiUserController::class,'edit'])->name('api-userEdit');
    Route::post('/api-user/update/{id}',[ApiUserController::class,'update'])->name('api-userUpdate');
    Route::delete('/api-user/delete/{id}',[ApiUserController::class,'destroy'])->name('api-userDestroy');
    Route::delete('/api-user-token/delete/{id}',[ApiUserController::class,'destroyToken'])->name('api-tokenDestroy');

    // Banner
    Route::get('/banners',[BannerController::class, 'index'])->name('bannerIndex');
    Route::get('/banner/add',[BannerController::class, 'add'])->name('bannerAdd');
    Route::post('/banner/create',[BannerController::class, 'create'])->name('bannerCreate');
    Route::get('/banner/edit/{id}',[BannerController::class, 'edit'])->name('bannerEdit');
    Route::post('/banner/update/{id}',[BannerController::class, 'update'])->name('bannerUpdate');
    Route::delete('/banner/delete/{id}',[BannerController::class,'destroy'])->name('bannerDestroy');
    Route::post('/banner/toggle-status/{id}',[BannerController::class,'toggleBlogActivation'])->name('bannerActivation');

     // Banner
     Route::get('/brands',[BrandController::class, 'index'])->name('brandIndex');
     Route::get('/brand/add',[BrandController::class, 'add'])->name('brandAdd');
     Route::post('/brand/create',[BrandController::class, 'create'])->name('brandCreate');
     Route::get('/brand/edit/{id}',[BrandController::class, 'edit'])->name('brandEdit');
     Route::post('/brand/update/{id}',[BrandController::class, 'update'])->name('brandUpdate');
     Route::delete('/brand/delete/{id}',[BrandController::class,'destroy'])->name('brandDestroy');

    // Product Model
    Route::get('/auto_models',[ProductModelController::class, 'index'])->name('product_modelIndex');
    Route::get('/auto_model/add',[ProductModelController::class, 'add'])->name('product_modelAdd');
    Route::post('/auto_model/create',[ProductModelController::class, 'create'])->name('product_modelCreate');
    Route::get('/auto_model/edit/{id}',[ProductModelController::class, 'edit'])->name('product_modelEdit');
    Route::post('/auto_model/update/{id}',[ProductModelController::class, 'update'])->name('product_modelUpdate');
    Route::delete('/auto_model/delete/{id}',[ProductModelController::class,'destroy'])->name('product_modelDestroy');
    Route::get('/auto_model/{brand_id}', [ProductModelController::class, 'getProductModels'])->name('getProductModels');

});

// Change language session condition
Route::get('/language/{lang}',function ($lang){
    $lang = strtolower($lang);
    if ($lang == 'ru' || $lang == 'uz')
    {
        session([
            'locale' => $lang
        ]);
    }
    return redirect()->back();
})->name('changelang');

/*
|--------------------------------------------------------------------------
| This is the end of Blade (front-end) Routes
|-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\
*/

Route::get('/',[FrontendController::class, 'home'])->name('frontend.home');
Route::get('/about',[FrontendController::class, 'about'])->name('frontend.about');
Route::get('/investoram/premushastva',[FrontendController::class, 'investoram_premushastva'])->name('frontend.investoram_premushastva');
Route::get('/investoram/registratsiya/rezidentov',[FrontendController::class, 'investoram_registratsiya_rezidentov'])->name('frontend.investoram_registratsiya_rezidentov');
Route::get('/investoram/nalogovie/preferensi',[FrontendController::class, 'investoram_nalogovie_preferensi'])->name('frontend.investoram_nalogovie_preferensi');
Route::get('/investoram/podderjka/eksportov',[FrontendController::class, 'investoram_podderjka_eksportov'])->name('frontend.investoram_podderjka_eksportov');

