<?php

// check if stock is already owned
function bought($stock) {
  $portfolio = getStocks(); // get portfolio positions
  $results = array(false,"0"); // initialize empty array
  foreach ($portfolio as $position) { // iterate through the stock positions
    if(strpos($position,$stock) !== false) { // if there is a record
        list($name, $quantity, $time) = explode(",", $position, 3); //split it using explode function
        $results = array(true,$quantity); // point $results to new array
    }
  }
  return $results; //return number of shares
}


function getStocks() {
    $file="stockPortfolio.csv";
    return file($file);
}

// Get the stock in question and return the price   
function getValue($stock) {
    // set up the address to check
    $addr = "http://finance.yahoo.com/d/quotes.csv?s=" . $stock . "&f=sl1d1t1c1ohgv&e=.csv";
    // load csv file from Yahoo
    $info = file_get_contents($addr);
    // split contents into list of 3 variables
    list($name, $price, $rest) = explode(",", $info, 3);
    return $price;
}

// returns the integer of shares owned of $stock
function getShares($stock) {
    $portfolio = getStocks();
    $pattern = "/^" . $stock . "/"; //regex 
    $numShares = 0;
    foreach($portfolio as $position) { 
        if (preg_match($pattern,$position)) { // if the portfolio entry matches
            list($name, $numShares, $time) = explode(",", $position, 3); // split by comma, return number of shares
        }
    }
    return $numShares;
}
function valid($stock) {
        $valid = false;
        if (floatval(getValue($stock)) > 0) {
                $valid = true;
                }
        return $valid;
}


