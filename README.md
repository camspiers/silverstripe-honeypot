# SilverStripe Honey Pot

A SilverStripe 4.x compatible version of camspiers/honeypot

## Installation (with composer)

	$ composer require heyday/silverstripe-honeypot

Set the default spam protector in *app/_config/spamprotection.yml*

	---
	name: spamprotection
	---
	SilverStripe\SpamProtection\Extension\FormSpamProtectionExtension:
	  default_spam_protector: Heyday\SilverStripe\HoneyPot\HoneyPotSpamProtector

Or, on a form by form basis

    use Heyday\SilverStripe\HoneyPot\HoneyPotField;
    use SilverStripe\Forms\Form;
    use SilverStripe\Control\Controller;
    use SilverStripe\Forms\FieldList;

    /**
     * Class SomeForm
     */
    class SomeForm extends Form
    {
        /**
         * @param Controller $controller
         */
        public function __construct(Controller $controller)
        {
            $fields = new FieldList();
            $fields->push(new HoneyPotField('Website')); // 'Website' here can be any old string
            ...
        }
    }