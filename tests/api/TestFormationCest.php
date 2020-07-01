<?php

use Codeception\Util\HttpCode;

class TestFormationCest
{
    public function _before(ApiTester $I)
    {
    }

    // tests
    public function testFormationId(ApiTester $I)
    {

        $I->sendGET('/view/COLLEGE_3E');
        $I->seeResponseCodeIs(HttpCode::OK);
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson([
            'Titre' => 'COLLÈGE 3ÈME',
            'Image' => '/wp-content/uploads/college-3em.jpg'
        ]);

        $I->sendGET('/view/BAC_GESTION_ADMINISTRATION');
        $I->seeResponseCodeIs(HttpCode::OK);
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson([
            'Titre' => 'BAC PRO GESTION ADMINISTRATION',
            'Url' => '/nos-formations/metier-du-tertiaire/bac-pro-gestion-administration',
            'Stage' => '13 semaines'
        ]);

        $I->sendGET('/view/BTS_SIO');
        $I->seeResponseCodeIs(HttpCode::OK);
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson([
            'Titre' => 'BTS SIO (Services Informatiques aux Organisations)',
            'Image' => '/wp-content/uploads/BTS-SIO.jpg',
            'Level' => 'BAC+2'
        ]);

        $I->sendGET('/view/OPTICIEN_RREO');
        $I->seeResponseCodeIs(HttpCode::OK);
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson([
            'Titre' => 'RESPONSABLE EN RÉFRACTION ET ÉQUIPEMENT OPTIQUE',
            'Stage' => '3046 heures en entreprise',
            'Url' => '/nos-formations/metier-du-paramedical/responsable-en-refraction-et-equipement-optique'
        ]);

        $I->sendGET('/view/FPC_LANGAGE_PROG');
        $I->seeResponseCodeIs(HttpCode::OK);
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson([
            'Titre' => 'FORMATION PRO - LANGAGE DE PROGRAMMATION',
            'Level' => 'FORMATION',
            'Image' => '/wp-content/uploads/FCP_LANGAGE-DE-PROGRAMMATION.jpg'
        ]);

    }
}
