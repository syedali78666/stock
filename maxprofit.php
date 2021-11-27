<?php
// PHP program to find maximum
// possible profit with at most
// two transactions
 
// Returns maximum profit with
// two transactions on a given
// list of stock prices, price[0..n-1]
function maxProfit($price, $n)
{
    // Create profit array and
    // initialize it as 0
    $profit = array();
    for ($i = 0; $i < $n; $i++)
        $profit[$i] = 0;
 
    // Get the maximum profit with
    // only one transaction allowed.
    // After this loop, profit[i]
    // contains maximum profit from
    // price[i..n-1] using at most
    // one trans.
    $max_price = $price[$n - 1];
    for ($i = $n - 2; $i >= 0; $i--)
    {
        // max_price has maximum
        // of price[i..n-1]
        if ($price[$i] > $max_price)
            $max_price = $price[$i];
 
        // we can get profit[i] by
        // taking maximum of:
        // a) previous maximum,
        //    i.e., profit[i+1]
        // b) profit by buying at
        // price[i] and selling at
        // max_price
        if($profit[$i + 1] >
           $max_price-$price[$i])
        $profit[$i] = $profit[$i + 1];
        else
        $profit[$i] = $max_price -
                      $price[$i];
    }
 
    // Get the maximum profit with
    // two transactions allowed.
    // After this loop, profit[n-1]
    // contains the result
    $min_price = $price[0];
    for ($i = 1; $i < $n; $i++)
    {
        // min_price is minimum
        // price in price[0..i]
        if ($price[$i] < $min_price)
            $min_price = $price[$i];
 
        // Maximum profit is maximum of:
        // a) previous maximum,
        //    i.e., profit[i-1]
        // b) (Buy, Sell) at (min_price,
        //     price[i]) and add
        // profit of other trans.
        // stored in profit[i]
        $profit[$i] = max($profit[$i - 1],
                          $profit[$i] +
                         ($price[$i] - $min_price));
    }
    $result = $profit[$n - 1];
    return $result;
}
 
// Driver Code
$price = array(2, 30, 15, 10,
               8, 25, 80);
$n = sizeof($price);
echo "Maximum Profit = ".
      maxProfit($price, $n);
     
?>
