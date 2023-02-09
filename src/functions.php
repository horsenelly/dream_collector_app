<?php

function displayDreamDetails(array $dreams): string {
    $dreamOutput ='';
    $dreamsReversedChronologically = array_reverse($dreams);
    foreach($dreamsReversedChronologically as $dream) {

        if(array_key_exists('dream_title', $dream) 
        && array_key_exists('dream_or_nightmare', $dream) 
        && array_key_exists('dream_date', $dream) 
        && array_key_exists('dream_description', $dream)) {

            $dreamOutput .="<h3>" . $dream['dream_title'] . "</h3>"
            . "<p>" . $dream['dream_or_nightmare'] . "</p>"
            . "<p>" . $dream['dream_date'] . "</p>"
            . "<p>" . $dream['dream_description'] . "</p>";

        } else {
            throw new Exception('Invalid array keys');
        }
    }
    return $dreamOutput;    
}

function displayDreamsForDelete(array $dreams): string {
    $dreamOutput ='';
    $dreamsReversedChronologically = array_reverse($dreams);
    foreach($dreamsReversedChronologically as $dream) {

        if(array_key_exists('dream_title', $dream) 
        && array_key_exists('dream_or_nightmare', $dream) 
        && array_key_exists('dream_date', $dream) 
        && array_key_exists('dream_description', $dream)) {

            $dreamOutput .="<h3>" . $dream['dream_title'] . "</h3>"
            . "<p>" . $dream['dream_date'] . "</p>"
            . "<label for=\"" . $dream['id'] . ">Tick this box to delete this dream!</label>"
            . "<input type=\"checkbox\" id=\"" . $dream['id'] . "\">";

        } else {
            throw new Exception('Invalid array keys');
        }
    }
    return $dreamOutput;    
}
