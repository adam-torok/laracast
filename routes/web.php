<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Teacher',
                'salary' => '50.000 Ft'
            ],
            [
                'id' => 2,
                'title' => 'Programmer',
                'salary' => '150.000 Ft'
            ],
            [
                'id' => 3,
                'title' => 'Carpenter',
                'salary' => '90.000 Ft'
            ]
        ]
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            'id' => 1,
            'title' => 'Teacher',
            'salary' => '50.000 Ft'
        ],
        [
            'id' => 2,
            'title' => 'Programmer',
            'salary' => '150.000 Ft'
        ],
        [
            'id' => 3,
            'title' => 'Carpenter',
            'salary' => '90.000 Ft'
        ]
    ];

    $job = Arr::first($jobs, fn ($job) => $job['id'] == $id);
    return view('job',['job' => $job]);
})->name('jobs.show');

Route::get('/contact', function () {
    return view('contact');
});
