<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Models\CoveredAreas;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/404', function () {
    return Inertia::render('Error', ['status' => 404]);
});
Route::get('/403', function () {
    return Inertia::render('Error', ['status' => 403]);
});
Route::get('/500', function () {
    return Inertia::render('Error', ['status' => 500]);
});
Route::get('/503', function () {
    return Inertia::render('Error', ['status' => 503]);
});


Route::get('/', function () {
    return Inertia::render('Index');
});

Route::get('/mobile-tyre-fitting', function () {
    return Inertia::render('MobileTyreFitting');
});
Route::get('/mobile-tyre-repair', function () {
    return Inertia::render('MobileTyreRepair');
});
Route::get('/van-mobile-tyre-fitting', function () {
    return Inertia::render('VanMobileTyreFitting');
});
Route::get('/breakdown-recovery', function () {
    return Inertia::render('BreakdownRecovery');
});
Route::get('/privacy-policy', function () {
    return Inertia::render('PrivacyPolicy');
});
Route::get('/our-terms-and-conditions', function () {
    return Inertia::render('TermsAndConditions');
});
Route::get('/sitemap', function () {
    $areas = CoveredAreas::orderBy('slug', 'asc')->get()->groupBy(function($area) {
        return strtoupper(substr($area['slug'], 0, 1));
    })->toArray();

    ksort($areas); // Sort the groups alphabetically by key (A-Z)

    return Inertia::render('Sitemap', [
        'areas' => $areas,
    ]);
});

Route::get('/locations/{area:slug}', function (CoveredAreas $area = null) {
    if (!$area) {
        abort(404); // Return a proper 404 response if the location is missing
    }

    return Inertia::render('Location', [
        'location' => ucwords($area->area),
        'slug' => $area->slug,
    ]);
})->where('area', '[A-Za-z0-9-]+');

Route::get('/contact-us', [ContactController::class, 'index']);
Route::post('/contact-us', [ContactController::class, 'store']);



Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/{slug}', [BlogController::class, 'show']);
