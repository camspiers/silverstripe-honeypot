<?php

namespace Heyday\SilverStripe\HoneyPot;

use SilverStripe\Forms\TextField;

/**
 * Class HoneyPotField
 * @package Heyday\SilverStripe\HoneyPot
 */
class HoneyPotField extends TextField
{

    /**
     * @param \SilverStripe\Forms\Validator $validator
     * @return bool
     */
    public function validate($validator)
    {
        if (!(is_null($this->value) || $this->value === '')) {
            $validator->validationError(
                $this->name,
                "This field should not be completed",
                "validation"
            );

            return false;
        }

        return true;
    }

    /**
     * @param array $properties
     * @return \SilverStripe\ORM\FieldType\DBHTMLText
     */
    public function FieldHolder($properties = array())
    {
        return $this->renderWith('HoneyPotField_holder');
    }

}