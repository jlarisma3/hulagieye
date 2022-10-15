<?php
namespace App\Services\Traits;

use Illuminate\Support\Str;

trait Attribute
{
    /**
     * @param array $attr
     * @param callable $fn
     *
     * @return void
     */
    protected function init(array $attr, callable $fn)
    {
        foreach ($attr as $prop => $value) {
            $this->{Str::camel($prop)} = $value;


            if($fn) $fn($this);
        }
    }

    /**
     * @param array $attributes
     *
     * @return array|mixed
     */
    public function get(array $attributes = [])
    {
        $pub = [];

        if(count($attributes) == 0) {
            $props = (new \ReflectionClass($this))->getProperties();
            foreach ($props as $prop) {
                $pName = $prop->getName();
                $pub[$pName] = $this->{$pName};
            }

            return $pub;
        }

        foreach ($attributes as $prop) {
            $pub[$prop] = $this->{$prop};
        }

        return $pub;
    }
}