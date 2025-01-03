<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/postcode-info', function (Request $request) {
    $postcode = $request->query('postcode');

    if (!$postcode) {
        return response()->json(['error' => 'Postcode is required'], 400);
    }

    try {
        // Use Postcodes.io API to validate postcode
        $response = Http::get("https://api.postcodes.io/postcodes/{$postcode}");
        $data = $response->json();

        if ($response->successful() && $data['status'] === 200) {
            return response()->json([
                'valid' => true,
                'codes' => $data['result']['codes'],
                'city' => $data['result']['admin_ward'],
                'admin_district' => $data['result']['admin_district'], 
                'region' => $data['result']['region'], 
                'latitude' => $data['result']['latitude'],
                'longitude' => $data['result']['longitude'],
            ]);
        } else {
            return response()->json(['valid' => false, 'error' => 'Invalid postcode'], 404);
        }
    } catch (\Exception $e) {
        return response()->json(['valid' => false, 'error' => 'Postcode lookup failed'], 500);
    }
});
