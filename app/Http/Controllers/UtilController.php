<?php

namespace App\Http\Controllers;

use App\Models\Util;
use App\Http\Requests\UtilStoreRequest;

class UtilController extends Controller
{
    public function index()
    {
        return view('utils.index', ['utils' => Util::all()]);
    }

    public function create()
    {
        return view('utils.create');
    }

    private function storeUtilFile($file)
    {
        $fileName = $file->getClientOriginalName();
        $fileUniqueName = date('YmdHis') . '_' . $fileName;

        $file->storeAs('public/uploads', $fileUniqueName);

        return 'storage/uploads/' . $fileUniqueName;
    }

    public function store(UtilStoreRequest $request)
    {
        $path = $this->storeUtilFile($request->file);

        Util::create([
            'name' => $request->name,
            'description' => $request->description,
            'url' => $request->url,
            'file' => $path
        ]);

        return to_route('utils.index');
    }

    public function show(Util $util)
    {
        return view('utils.show', compact('util'));
    }

    public function destroy(Util $util)
    {
        if (file_exists($util->file)) {
            unlink($util->file);
        }

        $util->delete();

        return to_route('utils.index');
    }
}
