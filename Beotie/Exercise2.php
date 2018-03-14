<?php
//Exercise 2: "We're going on a trip"

// 1- Create a function to convert an amount in euros to an amount in US dollars. This function will take two parameters:

function conversion($Amount, $Currency) {
    
// 2-If the second parameter is "USD", the result of the function will be, for example: 1 euro = 1.085965 US dollars
// 2.1 Create a function Currency inside the function conversion
    
    function currency ($dollar, $euro){
        if($euro === 1 && $dollar === 1.085965){
            return ($dollar = $euro);
            echo 'one'.$euro . 'costs one '. $dollar ;
            
// 2. 2 And  I store  the function currency result in the existing variable $Currency

        }return $Currency;
        
    }
    
    
// 3-  Amount (of type int or float) +  Currency of exit (only EUR or USD)
    if(is_float($Amount)||is_int($Amount) &&  ($Currency) ){
        return $Amount*$Currency;
    }
  
    
}


// 4 - The necessary checks must be made to validate the parameters.
