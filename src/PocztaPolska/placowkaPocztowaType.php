<?php

namespace PocztaPolska;

class placowkaPocztowaType
{
    /** @var \PocztaPolska\lokalizacjaGeograficznaType */
    public $lokalizacjaGeograficzna;
    /** @var int */
    public $id;
    /** @var string */
    public $prefixNazwy;
    /** @var string */
    public $nazwa;
    /** @var string */
    public $wojewodztwo;
    /** @var string */
    public $powiat;
    /** @var string */
    public $miejsce;
    /** @var \PocztaPolska\anonymous127 */
    public $kodPocztowy;
    /** @var \PocztaPolska\anonymous128 */
    public $miejscowosc;
    /** @var string */
    public $ulica;
    /** @var string */
    public $numerDomu;
    /** @var string */
    public $numerLokalu;
    /** @var string */
    public $nazwaWydruk;
    /** @var boolean */
    public $punktWydaniaEPrzesylki;
    /** @var boolean */
    public $powiadomienieSMS;
    /** @var boolean */
    public $punktWydaniaPrzesylkiBiznesowejPlus;
    /** @var boolean */
    public $punktWydaniaPrzesylkiBiznesowej;
    /** @var \PocztaPolska\siecPlacowekEnum */
    public $siecPlacowek;
    /** @var string */
    public $idZPO;
}
