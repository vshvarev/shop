<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class ProductFilter extends AbstractFilter
{
    public const TITLE = 'title';
    public const PRICE = 'price';
    public const CATEGORY_ID = 'category_id';
    public const IN_TRADE = 'in_trade';


    protected function getCallbacks(): array
    {
        return [
            self::TITLE => [$this, 'title'],
            self::PRICE => [$this, 'price'],
            self::CATEGORY_ID => [$this, 'categoryId'],
            self::IN_TRADE => [$this, 'in_trade'],
        ];
    }

    public function title(Builder $builder, $value)
    {
        $builder->where('title', 'like', "%{$value}%");
    }

    public function price(Builder $builder, $value)
    {
        $builder->where('price', 'like', "%{$value}%");
    }

    public function categoryId(Builder $builder, $value)
    {
        $builder->where('category_id', $value);
    }

    public function in_trade(Builder $builder, $value)
    {
        $builder->where('in_trade', $value);
    }
}
