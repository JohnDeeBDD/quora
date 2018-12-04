<?php

$I = new AcceptanceTester($scenario);

$I->wantTo('see that there is a Quora settings page in the admin area.');
$I->loginAsAdmin();
$I->amOnPage('/wp-admin/index.php');
$I->click("Quora");

$I->see("Quora Rules!");