<?php

namespace App\Services\Html;

class FormBuilder extends \Collective\Html\FormBuilder {

    public $inputClass      = ['class'=>'form-control'];
    public $inputClassDisabled      = ['class'=>'form-control','disabled'=>'disabled'];
    public $contentClass    = 'form-group';
    public $dateClass       = ['class'=>'form-control datepicker'];
    public $textAreaClass   = ['class'=>'form-control mytextarea'];
    public $colorPicker     = ['class'=>'form-control demo'];




    public function colorPicker($name = null, $label = null)
    {
        $input = parent::text($name,null, $this->colorPicker);

        return $this->buildDiv($label, $input);
    }

    public function textAreaCustom($name = null,$label = null)
    {
        $input = parent::textarea($name,null, $this->textAreaClass);

        return $this->buildDiv($label, $input);
    }

    public function dateCustom($name = null, $label = null)
    {
        $input = parent::date($name,null, $this->dateClass);

        return $this->buildDiv($label, $input);
    }

    public function textCustom($name = null, $label = null)
    {
        $input = parent::text($name,null, $this->inputClass);

        return $this->buildDiv($label, $input);
    }

    public function textCustomEdit($name = null, $val, $label = null)
    {
        $input = parent::text($name,$val, $this->inputClassDisabled);

        return $this->buildDiv($label, $input);
    }

    public function selectCustom($name = null , $label = null, $entity = null)
    {
        $input = parent::select($name,['0'=>'Seleccionar'] + $entity ,null,$this->inputClass);

        return $this->buildDiv( $label, $input);
    }


    public function selectCustomEdit($name = null , $label = null, $entity = null, $selected)
    {
        $input = parent::select($name,['0'=>'Seleccionar'] + $entity ,$selected,$this->inputClass);

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

    public function imageCustom($name , $label)
    {
        $images = parent::getValueAttribute('images');

        $td['column'] = null;

        if(!is_null($images)) {

            foreach ($images as $image) {
                $td['column'] .= '<td style="padding-left: 5px;">
                                    <a  class="delete" href="' . route('deleteImage', $image->id) . '">
                                         <span class="fa fa-remove"></span>
                                    </a>
                                    <img class="thumbnail" src="' . $image->image . '" width="150px">
                                  </td>';
                }
        }

        return '<div class="'.$this->contentClass.'">

        <label>'.$label.'</label>
        <table>
            '.$td['column'].'
        </table>
            '.parent::file($name).'
        </div>';
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