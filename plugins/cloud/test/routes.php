<?php

use Cloud\Test\Jobs\CreateTick;
use Cloud\Test\Models\Tick;
use Illuminate\Support\Facades\Route;

Route::get('queue-ticks', function () {
    for ($i = 0; $i < 10; $i++) {
        CreateTick::dispatch();
    }

    return redirect('/ticks');
});

Route::get('ticks', function () {
    return response()->json([
        'total' => Tick::count(),
        'data' => Tick::all(),
    ], 200, [], JSON_PRETTY_PRINT);
});
