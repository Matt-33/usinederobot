<?php

function generateRobotDetails($name, $familiarity) {
    $robotDetails = [];

    $robotDetails['name'] = $name;
    $robotDetails['date'] = generateDate();
    $robotDetails['choice'] = generateChoice();
    $robotDetails['random_number'] = generateRandomNumber();
    $robotDetails['number_type'] = checkNumberType($robotDetails['random_number']);
    $robotDetails['reverse_name'] = reverseString($name);
    $robotDetails['fibonacci_sequence'] = generateFibonacciSequence();
    
    if ($familiarity === 'familiar') {
      
        $robotDetails['familiar_status'] = 'Familier';
       
    } elseif ($familiarity === 'unfamiliar') {
        
        $robotDetails['familiar_status'] = 'Non familier';
        
    } else {
       
        $robotDetails['familiar_status'] = 'Aléatoire';
        
    }
    return $robotDetails;
}
?>