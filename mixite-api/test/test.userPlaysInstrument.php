<?php

require_once('../classes/class.Profile.php');
require_once('../classes/class.Instrument.php');
require_once('../classes/class.PlayedInstrument.php');

$user = new Profile (
    0,
    'Phil',
    0,
    '0b',
    'Bonjour, moi c\'est Phil !',
    '02.05.2021',
    'phil.varret',
    '',
    '',
    '',
    '',
    'philemon.varret@gmail.com',
    'passpass'
);

$instrument1 = new Instrument(
    1,
    'Clarinette',
    'Vent'
);

$instrument2 = new Instrument(
    2,
    'Guitare',
    'Cordes'
);

