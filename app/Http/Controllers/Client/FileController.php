<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Client\Client;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function getWord($id,$num)
    {
        
        $client = Client::find($id);

        return view('admin.client.files.document' . $num,compact('client'));

    

    }
}
