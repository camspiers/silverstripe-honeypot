<?php

class HoneyPotField extends FormField
{

    public function validate($validator)
    {
        if (!is_null($this->value)) {
            $validator->validationError(
                $this->name, 
                "This field should not be completed",
                "validation", 
                false
            );

        }
        return true;
    }

}