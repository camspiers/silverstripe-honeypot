<?php

namespace Camspiers\SilverStripeHoneyPot;

use SilverStripe\SpamProtection\SpamProtector;

class HoneyPotSpamProtector implements SpamProtector {

	/**
	 * Returns the {@link HoneyPotField} associated with this protector
	 *
	 * @return HoneyPotField
	 */
	public function getFormField($name = null, $title = null, $value = null) {
		return new HoneyPotField($name, $title, $value);
	}

	/**
	 * Not used by HoneyPotSpamProtector
	 */
	public function setFieldMapping($fieldMapping) {}

}
