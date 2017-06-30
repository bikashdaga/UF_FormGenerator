<?php
/**
 * UF Form Generator
 *
 * @link      https://github.com/lcharette/UF_FormGenerator
 * @copyright Copyright (c) 2017 Louis Charette
 * @license   https://github.com/lcharette/UF_FormGenerator/blob/master/LICENSE (MIT License)
 */
namespace UserFrosting\Sprinkle\FormGenerator\Element;

use UserFrosting\Sprinkle\FormGenerator\Element\BaseInput;
use UserFrosting\Sprinkle\FormGenerator\Element\Text;

/**
 * InputInterface
 *
 * Interface for Form elements classes
 */
class Alert extends Text {

    protected function applyTransformations()
    {
        $this->element = array_merge([
            "class" => "alert-danger",
            "icon" => "fa-ban",
            "value" => $this->value,
            "name" => $this->name
        ], $this->element);
    }

    //data-placeholder="{{translate(value.placeholder)}}"
}