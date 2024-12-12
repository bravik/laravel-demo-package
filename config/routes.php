<?php

declare(strict_types=1);

if ((bool) config('my-package.enabled', true) === false) {
    return;
}

Route::get('/my-package', function (\Bravik\MyPackage\CoolStaff $coolStaff) {
    $hi = $coolStaff->sayHi('John', 'Doe');
    $backgroundColor = config('my-package.background-color');
    return \Illuminate\Support\Facades\View::make('my-package::demo', [
        'greetings' => $hi,
        'backgroundColor' => $backgroundColor,
    ]);
});
