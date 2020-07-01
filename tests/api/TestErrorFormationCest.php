<?php

use Codeception\Util\HttpCode;

class TestErrorFormationCest
{
    public function _before(ApiTester $I)
    {
    }

    // tests
    public function testErrorApi(ApiTester $I)
    {
        $I->sendGET('/view/COLLEGE_3EE');
        $I->seeResponseCodeIs(HttpCode::OK);
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson([
            'Event' => 'api/view',
            'Error' => 'pvf',
            'Type' => '4'
        ]);

    }
}
