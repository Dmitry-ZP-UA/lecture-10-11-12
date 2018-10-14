<?php

namespace App\Shop\Products;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $guarded = ['id', 'slug'];

    /**
     * @param string $name
     */
    public function setNameAttribute(string $name)
    {
        $this->attributes['name'] = strtolower($name);
        $this->attributes['slug'] = str_replace(' ', '-', trim(strtolower($this->name)));
    }

    /**
     * @return string
     */
    public function getFormattedNameAttribute()
    {
        return ucfirst($this->name);
    }

    /**
     * @param string $price
     */
    public function setPriceAttribute(string $price)
    {
        $this->attributes['price'] = bcmul($price, 100);
    }

    /**
     * @return string
     */
    public function getFormattedPriceAttribute()
    {
        return '$ ' . number_format(($this->price / 100), 2, ',', ' ');
    }

    /**
     * @param string $description
     */
    public function setDescriptionAttribute(string $description)
    {
        $this->attributes['description'] = trim($description);
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopeAvailable($query)
    {
        return $this->where('status', true);
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopeUnAvailable($query)
    {
        return $this->where('status', false);
    }
}
