<?php

namespace App\Services\Html;

use App\Entities\stock\Categories;

class FormBuilder extends \Collective\Html\FormBuilder {

    public function selectCategories()
    {
        $categories = Categories::lists('name','id');

        $input = Form::select('a',$categories);

        return $input;
    }

    public function textfield()
    {
       /*
        $labelOptions['class']          = 'form-label';
        $inputOptions['class']          = 'form-control';
        $inputOptions['placeholder']    = $label;


        return sprintf(
            '<div class="form-group">%s<div%s>%s%s</div></div><!-- end form-group -->',
            parent::label($name, $label, $labelOptions),
            $errors->has($name) ? ' class="error-control"' : '',
            parent::text($name, null, $inputOptions),
            $errors->has($name) ? '<span class="error"><label class="error" for="' . $name . '">' . $errors->first($name) . '</label></span>' : ''
        );
       */
        return "ds";
    }

    public function submit($value = null, $options = [])
    {
        $options['class'] = 'btn btn-cons btn-success' . (isset($options['class']) ? ' ' . $options['class'] : '');

        return parent::submit($value, $options);
    }

}