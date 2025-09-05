<?php

if (!function_exists('uploadImage')) {
    function uploadImage($image, $folder): string
    {
        $extension = $image->getClientOriginalExtension();
        $newImageName = uniqid() . '-' . $folder . '.' . $extension;
        $image->move(public_path('/' . $folder), $newImageName);
        // dd($newImageName);
        return $newImageName;
    }
}
