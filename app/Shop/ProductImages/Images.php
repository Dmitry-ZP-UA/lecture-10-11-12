<?php

namespace App\Shop\ProductImages;

use App\Exceptions\NotImplementedException;
use App\Models\Model;
use App\Shop\Products\Product;
use App\Shop\Products\Repositories\ProductRepository;

class Images extends Model
{
    protected $table = 'images';

    protected $fillable = [
        'product_id',
        'src'
    ];

    public $timestamps = false;

    protected $productImageRepo;

    /**
     * ProductImage constructor.
     */
    public function __construct()
    {
        $this->productImageRepo = new ProductImageRepository($this);
    }

    /**
     * @return Product
     * @throws \App\Shop\Products\Exceptions\ProductNotFoundException
     */
    public function product()
    {
        return $this->productImageRepo->findProduct();
        // return $this->belongsTo(Product::class);
    }
}
