<?php
use Behat\Behat\Tester\Exception\PendingException;
use Behat\MinkExtension\Context\MinkContext;
/**
 * Behat context class.
 */
class FeatureContext extends MinkContext
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context object.
     * You can also pass arbitrary arguments to the context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @When I press more
     */
    public function iPressMore()
    {
        $this->getSession()
            ->getPage()
            ->find('named', ['link', 'more'])
            ->click();
    }
}
