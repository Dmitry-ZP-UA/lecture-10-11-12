<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Shop\Categories\Category;
use App\Shop\Categories\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Shop\Products\Product;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * @var CategoryRepositoryInterface
     */
    private $category;
    private $product;

    /**
     * HomeController constructor.
     * @param Category $category
     */
    public function __construct(Category $category, Product $product)
    {
        $this->category = $category;
        $this->product = $product;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $category = $this->category->where('slug', 'be')->delete();
        /*        $product = [
                    'name' => 'HOHOHO',
                    'category_id' => '1',
                    'slug' => 'HOHOHO',
                    'description' => 'HOHOHO',
                    'price' => '102546',
                    'status' => '1',
                    'quantity' => '2',
                ];
                $this->product->create($product);*/

        $product = $this->product->available()->get();
        dd($product);
        /*        $cat1 = $this->categoryRepo->findCategoryById(1);
                $cat2 = $this->categoryRepo->findCategoryById(2);

                return view('front.index', compact('cat1', 'cat2'));*/
    }

}
