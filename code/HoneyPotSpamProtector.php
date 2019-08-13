<?php

namespace Heyday\SilverStripe\HoneyPot;

use SilverStripe\SpamProtection\SpamProtector;

class HoneyPotSpamProtector implements SpamProtector {

    /**
     * Returns the {@link HoneyPotField} associated with this protector
     *
     * @param null $name
     * @param null $title
     * @param null $value
     * @return HoneyPotField
     */
	public function getFormField($name = null, $title = null, $value = null) {
		return new HoneyPotField($name, $title, $value);
	}

    /**
     * Not used by HoneyPotSpamProtector
     * @param $fieldMapping
     */
	public function setFieldMapping($fieldMapping) {}

}
