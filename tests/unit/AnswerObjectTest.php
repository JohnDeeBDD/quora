<?php

class AnswerObjectTest extends \Codeception\TestCase\WPTestCase{

    /**
     * @test
     * AnswerObject should have certain properties
     */
    public function itShouldHaveCertainProperties($scenario = NULL){
        $this->markTestSkipped("Test not compleate");
    }
    
    /**
     * @test
     * it should be instantiatable
     */
    public function itShouldBeInstantiatable(){
    	$AnswerObject = new Quora\AnswerObject();
    }
    
}