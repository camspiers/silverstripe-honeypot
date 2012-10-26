<?php

class HoneyPotField extends TextField
{

    public function validate($validator)
    {
        if ($this->value !== '') {
            $validator->validationError(
                $this->name, 
                "This field should not be completed",
                "validation", 
                false
            );

        }
        return true;
    }

    public function FieldHolder()
    {
        return $this->renderWith('HoneyPotField_holder');
    }

}