<?php

namespace App\Http\Controllers;

use App\Models\Digest;
use Illuminate\Http\Request;


class PagesController extends Controller
{
    public function newinfo() {
        $newsPosts = Digest:: all();

        return view('/all', [
            "newsPosts" => $newsPosts
        ]);
    }

    public function favorites() {
        $favorites = Digest:: where('status', 1)->get();

        return view('/home', [
            "favorites" => $favorites
        ]);
    }

    public function postPage($id) {
        /** @var Digest $post */
        $post = Digest::find($id);

        return view('/post', [
            "post" => $post,
        ]);
    }

    public function search(Request $request) {

        $search = $request->searchNews;
        $searchPost = Digest::where('title', 'LIKE', "%{$search}%")->orWhere('body', 'LIKE', "%{$search}%")->get();

        return view('/search', [
            "searchPost" => $searchPost
        ]);
    }
}
