<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use PHPUnit_Framework_Assert as PHPUnit;
/**
 * Defines application features from the specific context.
 */
class FeatureContext extends Behat\MinkExtension\Context\RawMinkContext implements Context, SnippetAcceptingContext
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {

    }
    /**
    * Opens homepage.
    *
    * @Given /^(?:|I )am on (?:|the )homepage$/
    * @When /^(?:|I )go to (?:|the )homepage$/
    */
    public function iAmOnHomepage()
    {
        $this->visitPath('/');
    }

}
