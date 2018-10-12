# SilverStripe honeypot

For a SilverStripe `2.4` compatible version use the branch `1.0`

## Requirements
* SilverStripe Framework 4.2.1+

## Installation (with composer)

	$ composer require camspiers/honeypot

Set the default spam protector in *mysite/_config/spamprotection.yml*

	---
	name: spamprotection
	---
	SilverStripe\SpamProtection\Extension\FormSpamProtectionExtension:
 		default_spam_protector: Camspiers\SilverStripeHoneyPot\HoneyPotSpamProtector