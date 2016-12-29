<?php
    //User tried to access without loggin in.
    $username = $_SESSION['username'];
    if($username == "")
    {
        header("Location:index.php?error=Please login first.");
    }
        $portfolio = getStocks();
        $totValue = 0;//not used yet.  May be used to determine net value of fund
       
?>
   <table>
        <tr>
            <th>Stock Symbol</th>
            <th>Shares</th>
            <th>Price</th>
            <th>Transaction Date</th>
            <th>Position Value</th>
        </tr>
    <?php foreach($portfolio as $position) {
                list($name, $shareNum, $lastDate) = explode(",",$position);
        $stockValue = getValue($name);//stock price
                $posValue = floatval($shareNum * $stockValue);//position value
                $totValue += $posValue;//not used yet.  See above
                $stockValue = number_format($stockValue,2); //share price to two decimals
                $posValue = number_format($posValue,2);     //position value to two decimals
                $shareNum = number_format($shareNum,0);     //number of whole shares
                if (floatval($shareNum) > 0) {
                        echo "<tr><td>" . $name . "</td><td>" . $shareNum . "</td><td>$" . $stockValue . "</td><td>" . $lastDate . " ". $lastTime . "</td><td>$" . $posValue . "</td></tr>";
                } else {
                        
                }
                }
                echo "</table>";

