<?php

namespace App\Http\Controllers;

use App\Models\Category;

class SimilarPosts extends Controller
{
    public function similar($categoryId) {
        /** @var Category $category */
        $category = Category::find($categoryId);
        $similarPosts = $category->posts;

        return view('/similar', [
            "similarPosts" => $similarPosts,
            "category" => $category
        ]);


    }
}
