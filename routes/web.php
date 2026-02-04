<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return "Chào mừng đến với Laravel";
});
Route::get('/about', function () {
    return "Họ tên: Nguyễn Văn Anh Đức - Lớp: D18CNPM@ - MSSV: 23810310118";
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/tong/{a}/{b}', function ($a, $b) {
    $tong = $a + $b;
    return "Tổng của $a và $b là: $tong";
});
Route::get('/sinh-vien/{name}/{age?}', function ($name, $age = 20) {
    return "Tên: $name - Tuổi: $age";
});
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return "Chào mừng Admin";
    });

    Route::get('/users', function () {
        return "Danh sách người dùng";
    });
});
Route::get('/check-date/{day}/{month}/{year}', function ($day, $month, $year) {
    return "Ngày hợp lệ: $day/$month/$year";
})->where([
    'day' => '^(0?[1-9]|[12][0-9]|3[01])$',
    'month' => '^(0?[1-9]|1[0-2])$',
    'year' => '^[0-9]{4}$'
]);
