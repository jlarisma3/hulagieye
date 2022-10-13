<?php
namespace App\Services\Traits;

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
            $this->{$prop} = $value;


            if($fn) $fn($this);
        }
    }

    /**
     * @param array $attributes
     *
     * @return array|mixed
     */
    public function get(array $attributes)
    {
        $pub = [];
        foreach ($attributes as $prop) {
            $pub[$prop] = $this->{$prop};
        }

        return $pub;
    }
}