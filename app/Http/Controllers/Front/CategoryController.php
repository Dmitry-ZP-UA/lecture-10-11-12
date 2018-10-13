<?php

namespace App\Http\Controllers\Front;

use App\Shop\Categories\Category;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * @var Category
     */
    private $category;

    /**
     * CategoryController constructor.
     * @param Category $category
     */
    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    /**
     * Find the category via the slug
     *
     * @param string $slug
     * @return \App\Shop\Categories\Category2
     */
    public function getCategory(string $slug)
    {
        $category = $this->category->where('slug', $slug);

        $products = $category->products()->where('status', 1)->all();

        return view('front.categories.category', [
            'category' => $category,
            'products' => $products //$repo->paginateArrayResults($products, 20)
        ]);
    }
}
