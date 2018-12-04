<?php

$I = new AcceptanceTester($scenario);

$I->wantTo('see that there is a Quora settings page in the admin area.');

//global $siteUrl;
//$siteUrl = "http://ec2-34-204-77-50.compute-1.amazonaws.com";
//$I->amOnUrl($siteUrl);
$I->loginAsAdmin();
$I->amOnPage('/wp-admin/index.php');
$I->see('Howdy');
$I->click("Quora");
$I->see("Quora Rules!");