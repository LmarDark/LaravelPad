<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PadNameController extends Controller
{
    public static function verifyIfExistsPadName($name) {
        $nameDB = \App\Models\PadNameModel::where("name", "/$name")->first();

        if($nameDB) {
            $nameDB    = "/" . $name;
            $contentDB = \App\Models\PadNameModel::where('name', "/$name")->value('content');

            return view('index', [
                'content' => $contentDB
            ]);
        }

        if(empty($nameDB)) {
            return view('index');
        }
    }

    public static function saveContentInDB(Request $request) {
        $name    = $request->name;
        $content = $request->content;

        if($name && empty($content)) {
            \App\Models\PadNameModel::where('name', $name)->delete();

            return response()->json();
        }

        \App\Models\PadNameModel::updateOrCreate(
            ['name' => $name],
            ['content' => $content]
        );
        
        return response()->json();
    }
}
