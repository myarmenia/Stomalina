<?php
namespace App\Services;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class FileUploadService
{
    public static function upload(array|object $data, string $folder_path)
    {
        $filename = md5(microtime()). '.' .$data->getClientOriginalExtension();
        $path = Storage::disk('local')->putFileAs(
          'public/' . $folder_path,
          $data,
          $filename
        );

        return $path;

    }

    public static function get_file(Request $request)
    {
        $path = $request['path'] ?? 'public/null.png';
        return response()->file(Storage::path($path));
    }
}