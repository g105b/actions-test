<?php
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Mink\Session;
use Behat\MinkExtension\Context\MinkContext;

use PHPUnit\Framework\Assert;

class FeatureContext extends MinkContext {
	/** @Given I debug */
	public function iDebug() {
		var_dump($this->getSession()->getCurrentUrl());
		var_dump($this->getSession()->getPage()->getContent());die();
	}
}
