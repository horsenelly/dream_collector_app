<?php
require 'src/functions.php';

use PHPunit\Framework\TestCase;

class functions extends TestCase
{
    public function testDisplayDreamDetails ()
    {
        $array = 
        [
            [
                'dream_title'=>'Finding nemo',
                'dream_or_nightmare'=>'Nightmare',
                'dream_description'=>'I was nemo, and no-one could find me!',
                'dream_date'=>'2023-01-01'
            ],
            [
                'dream_title'=>'Forrest Gump',
                'dream_or_nightmare'=>'Dream',
                'dream_description'=>'I just kept on running...',
                'dream_date'=>'1990-01-01'
            ]
        ];
        $expecteOutput = "<h3>Finding nemo</h3>
        <h4>Nightmare</h4>
        <h4>2023-01-01</h4>
        <p>I was nemo, and no-one could find me!</p>".
        "<h3>Forrest Gump</h3>
        <h4>Dream</h4>
        <h4>1990-01-01</h4>
        <p>I just kept on running...</p>";
        $actualOutput = displayDreamDetails($array);
        $this->assertEquals($expecteOutput,$actualOutput);
    }
}