<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class CarFilter extends AbstractFilter
{
    public const MAKE = 'make';
    public const MODEL = 'model';
    public const YEAR = 'year';
    public const COLOR = 'color';

    protected function getCallbacks(): array
    {
        return [
            self::MAKE => [$this, 'make'],
            self::MODEL => [$this, 'model'],
            self::YEAR => [$this, 'year'],
            self::COLOR => [$this, 'color']
        ];
    }

    public function make(Builder $builder, $value)
    {
        $builder->where('make', 'like', "%{$value}%");
    }

    public function model(Builder $builder, $value)
    {
        $builder->where('model', 'like', "%{$value}%");
    }

    public function year(Builder $builder, $value)
    {
        $builder->where('year', 'like', "%{$value}%");
    }

    public function color(Builder $builder, $value)
    {
        $builder->where('color', 'like', "%{$value}%");
    }
}