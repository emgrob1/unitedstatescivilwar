<?php

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Select;

$form = new Form();

$form->add(
    new Text(
        "theater_name"
    )
);

$form->add(
    new Text(
        "theater_region"
    )
);

