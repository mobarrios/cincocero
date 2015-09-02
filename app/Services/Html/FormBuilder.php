<?php

namespace App\Services\Html;

class FormBuilder extends \Collective\Html\FormBuilder {

    public $inputClass   = ['class'=>'form-control'];
    public $contentClass = 'form-group';


    public function textCustom($name = null, $label = null)
    {
        $input = parent::text($name,null, $this->inputClass);

        return $this->buildDiv($label, $input);
    }


    public function selectCustom($name = null , $label = null, $entity = null)
    {
        $input = parent::select($name,['0'=>'Seleccionar'] + $entity ,null,$this->inputClass);

        return $this->buildDiv( $label, $input);
    }



    public function buildDiv( $label = null, $input = null)
    {
        return
        '<div class="'.$this->contentClass.'">
            <label>'.$label.'</label>

            '.$input.'

        </div>';
    }

    public function imageCustom()
    {
        $images = parent::getValueAttribute('images');

        $td['column'] = null;

        foreach($images as $image)
        {
               $td['column'] = '<td style="padding-left: 5px;">
                            <a href="'.route('deleteImage',$image->id).'">
                                <span class="glyphicon glyphicon-remove"></span>
                            </a>
                            <img class="thumbnail" src="'.$image->image.'" width="150px">
                    </td>';
           // echo $image->image;
        }
        return $td['column'];
    }


    /*
    public function textfield($name, $label, $errors, $labelOptions = array(), $inputOptions = array())
    {
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
    }

    public function submit($value = null, $options = [])
    {
        $options['class'] = 'btn btn-cons btn-success' . (isset($options['class']) ? ' ' . $options['class'] : '');

        return parent::submit($value, $options);
    }
    */
}