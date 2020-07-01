<?php

use Codeception\Util\HttpCode;

class LoadFormationCest
{
    public function _before(ApiTester $I)
    {
    }

    // tests
    public function loadFormationInCache(ApiTester $I)
    {
        $I->sendGET('/load');
        $I->seeResponseCodeIs(HttpCode::OK);
        $I->seeResponseIsJson();
        $I->seeResponseMatchesJsonType([
            'nbWriteFile' => 'integer',
            'nbRepoForm' => 'integer'
        ]);
        $I->seeResponseContainsJson([
            'nbWriteFile' => '75',
            'nbRepoForm' => '7'
        ]);

    }
}
