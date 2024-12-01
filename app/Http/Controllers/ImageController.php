<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{

    public function create()
    {
        return view('image.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $image = $request->file('image');
        $imageName = time().'.'.$image->extension();
        $image->storeAs('images', $imageName, 'public');

        Image::create([
            'image_name' => $imageName,
            'image_path' => 'storage/images/'.$imageName,
        ]);

        return redirect()->route('images.index');
    }


    public function index()
    {
        $images = Image::all();
        return view('image.index', compact('images'));
    }
}
