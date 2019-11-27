<?php namespace frontend\tests;

use frontend\models\ContactForm;

class FirstTest extends \Codeception\Test\Unit
{
    /**
     * @var \frontend\tests\UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testSomeFeature()
    {
        $test = 55512;
        $this->assertEquals(55512, $test, 'AssertEquals Crashed!!!');
        $this->assertTrue($test == '55512', 'AssertEquals crashed!!! It`s no true');
        $this->assertLessThan(55513, $test, 'assertLessThen crashed! Actual > Expected ');

        $form = new ContactForm();
       // $form->name = 'Tester';
        $form -> attributes = [
            'name' => 'Tester',
            'email' => 'tester@example.com',
            'subject' => 'very important letter subject',
            'body' => 'body of current message',
        ];
        $this->assertAttributeEquals($form->name, 'name', $form,
            'form->name not equals');
        $this->assertAttributeEquals($form->email, 'email', $form,
            'form->email not equals');
        $this->assertAttributeEquals($form->subject, 'subject', $form,
            'form->subject not equals');
        $this->assertAttributeEquals($form->body, 'body', $form,
            'form->body not equals');
    }
}