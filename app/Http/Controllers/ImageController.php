<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image as ImageManager;


class ImageController extends Controller {

    public function store(Request $request) {
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');

            $original = $image->getClientOriginalName();
            $name = Str::uuid();
            $parts = explode('.', $original);
            $ext = $parts[ array_key_last($parts) ];
            $path = Storage::disk('images')->path($name . '.' . $ext);

            ImageManager::make($image)->save($path);

            return redirect()->back();
        }

        return abort(500, 'Invalid image.');
    }

    public function show($slug) {
        return response()->file(Storage::disk('images')->path($slug));
    }

}
