<?php

namespace App\Http\Controllers;

use App\Models\Url;
use Illuminate\Http\Request;

class UrlController extends Controller
{
    public function create()
    {
        return view("welcome");
    }

    public function store(Request $request)
    {

        $this->validate($request, ["url" => "url|required"]);

        $record = $this->getRecordForUrl($request->get("url"));

        return view('result')->with('shortened', $record->shortened);
    }

    public function show($shortened)
    {
        $url = Url::where("shortened", $shortened)->firstOrFail();

        //increment see_number and last_time_see
        $url->update(["see_number" => ++$url->see_number, "last_see_time" => now()]);

        return redirect($url->url);
    }

    private function getRecordForUrl($url)
    {
        return Url::firstOrCreate(
            ["url" => $url],
            ["shortened" => Url::generateCodeUnique()]
        );
    }
}
