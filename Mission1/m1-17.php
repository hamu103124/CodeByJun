<?php
    $num = 16;
    if ( $num % 3 == 0 && $num % 5 == 0) {
        echo "FizzBuzz";
    } elseif ( $num % 3 == 0) {
        echo "Fizz";
    } elseif ( $num % 5 == 0) {
        echo "Buzz";
    } else {
        echo $num;
    }
?>

<?php
    $num = 5;
    if ( $num % 3 == 0 ) {
        if ( $num % 5 == 0 ) {
            echo "FizzBuzz";
        } 
        if ( $num % 5 != 0) {
            echo "Fizz";
        } 
    }elseif ( $num % 5 == 0) {
            echo "Buzz";
        }
?>