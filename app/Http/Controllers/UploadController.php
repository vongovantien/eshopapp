<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
      protected $upload;

    public function __construct(UploadService $upload)
    {
        $this->upload = $upload;
    }

    public function store(Request $request)
    {
            if ($request->hasFile('file')) {
            try {
                 $uploadedFileUrl = Cloudinary::upload($request->file('file')->getRealPath(), [
                    'folder' => 'test'
                ])->getSecurePath();

                return '/storage/' . $pathFull . '/' . $name;
            } catch (\Exception $error) {
                return false;
            }
        }
    }
}
