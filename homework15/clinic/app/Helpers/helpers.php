<?php

if (!function_exists('uploadImage')) {
    function uploadImage($image, $folder): string
    {
        $extension = $image->getClientOriginalExtension();
        $newImageName = uniqid() . '-' . $folder . '.' . $extension;
        $image->move(public_path('front/images/' . $folder), $newImageName);
        // dd($newImageName);
        return $newImageName;
    }
}

if (!function_exists('getBreadcrumbs')) {
    function getBreadcrumbs(): array
    {
        $routeName = Route::currentRouteName();

        return match ($routeName) {
            'admin.dashboard' => ['Dashboard'],
            'admin.doctor.index' => ['Doctors'],
            'admin.doctor.create' => ['Doctors' => route('admin.doctor.index'), 'Create'],
            'admin.doctor.edit' => ['Doctors' => route('admin.doctor.index'), 'Edit'],
            'admin.major.index' => ['Majors'],
            'admin.major.create' => ['Majors' => route('admin.major.index'), 'Create'],
            'admin.major.edit' => ['Majors' => route('admin.major.index'), 'Edit'],
            default => []
        };
    }
}

