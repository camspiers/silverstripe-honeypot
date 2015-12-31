<?php

class HoneyPotField extends TextField
{

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

    public function FieldHolder($properties = array())
    {
        return $this->renderWith('HoneyPotField_holder');
    }
}
