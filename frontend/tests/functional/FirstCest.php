<?php namespace frontend\tests\functional;
use frontend\tests\FunctionalTester;

class FirstCest
{
    public function _before(FunctionalTester $I)
    {
    }
    /**
     * @dataProvider pageProvider
     */
    // tests
    public function tryToTest(FunctionalTester $I, \Codeception\Example $data)
    {
        $I->amOnPage($data['url']);
        $I->see($data['a'], 'a');
        $I->click($data['a']);
        $I->see($data['a'], 'h1');
    }

    protected function pageProvider() // alternatively, if you want the function to be public, be sure to prefix it with `_`
    {
        return [
            ['url'=>"site/about", 'a'=>"About"],
            ['url'=>"site/contact", 'a'=>"Contact"],
            ['url'=>"site/signup", 'a'=>"Signup"],
            ['url'=>"site/login", 'a'=>"Login"]
        ];
    }
}
