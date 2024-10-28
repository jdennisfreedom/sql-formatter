<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SQLFormatterController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function format(Request $request)
    {
//        dd($request->all());

        $sql = $request->input('sql');
        $formattedSQL = self::formatSQL($sql);

        return view('index', [
            'formattedSQL' => $formattedSQL,
            'originalSQL' => $sql
        ]);
    }

    public static function formatSQL($sql)
    {
        // format sql using sql-formatter
        return \SqlFormatter::format($sql); // Placeholder: replace with actual formatted SQL
    }
}
