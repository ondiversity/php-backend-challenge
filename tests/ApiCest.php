<?php

BRL > USD       BTC > EUR
USD > BRL       EUR > BTC
BRL > EUR       BTC > USD
EUR > BRL       USD > BTC
class ApiCest
{
    public function tryApiWithoutValue(ApiTester $I)
    {
        $I->sendGET('/');
        $I->seeResponseCodeIs(400);
        $I->seeResponseIsJson();
    }

    public function tryApiWithoutFrom(ApiTester $I)
    {
        $I->sendGET('/10');
        $I->seeResponseCodeIs(400);
        $I->seeResponseIsJson();
    }

    public function tryApiWithoutTo(ApiTester $I)
    {
        $I->sendGET('/10/EUR');
        $I->seeResponseCodeIs(400);
        $I->seeResponseIsJson();
    }

    public function tryApiInvalidValue(ApiTester $I)
    {
        $I->sendGET('/a/EUR/USD');
        $I->seeResponseCodeIs(400);
        $I->seeResponseIsJson();
    }

    public function tryApiNegativeValue(ApiTester $I)
    {
        $I->sendGET('/-10/EUR/USD');
        $I->seeResponseCodeIs(400);
        $I->seeResponseIsJson();
    }

    public function tryApiInvalidFrom(ApiTester $I)
    {
        $I->sendGET('/10/eur/USD');
        $I->seeResponseCodeIs(400);
        $I->seeResponseIsJson();
    }

    public function tryApiInvalidTo(ApiTester $I)
    {
        $I->sendGET('/10/EUR/usd');
        $I->seeResponseCodeIs(400);
        $I->seeResponseIsJson();
    }

    public function tryApiBtcToEur(ApiTester $I)
    {
        $I->sendGET('/7.8/BTC/EUR');
        $I->seeResponseCodeIs(200);
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson([
            'exchangeValue' => '21.521,78',
            'exchangeSimbol' => '€',
        ]);
    }

    public function tryApiEurToBtc(ApiTester $I)
    {
        $I->sendGET('/7/EUR/BTC');
        $I->seeResponseCodeIs(200);
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson([
            'exchangeValue' => '0,000046',
            'exchangeSimbol' => '₿',
        ]);
    }

    public function tryApiBtcToUsd(ApiTester $I)
    {
        $I->sendGET('/7/BTC/USD');
        $I->seeResponseCodeIs(200);
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson([
            'exchangeValue' => '22.000,20',
            'exchangeSimbol' => '$',
        ]);
    }

    public function tryApiUsdToBtc(ApiTester $I)
    {
        $I->sendGET('/7/USD/BTC');
        $I->seeResponseCodeIs(200);
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson([
            'exchangeValue' => '0,000045',
            'exchangeSimbol' => '₿',
        ]);
    }
}