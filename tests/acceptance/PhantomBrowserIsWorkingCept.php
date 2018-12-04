<?php

$I = new AcceptanceTester($scenario);

$I->wantTo('See that the browser can launch and generalchicken.net is up and running');
$I->amOnUrl("https://generalchicken.net");
$I->see("WordPress");
$I->dontSee('We will never suceed!');
