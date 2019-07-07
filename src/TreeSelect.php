<?php

namespace NiekBr\NovaTreeSelect;

use Laravel\Nova\Fields\Field;
use Illuminate\Facades\Storage;

class TreeSelect extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'nova-tree-select';
    public $disk;

    public function options($value)
    {
        return $this->withMeta([
           'options' => $value
        ]);
    }

    public function multiple($value)
    {
        return $this->withMeta([
            'multiple' => $value
        ]);
    }
}
