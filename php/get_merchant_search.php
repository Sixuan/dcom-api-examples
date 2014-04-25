<?php
/**
 * @author Sixuan Liu (April, 2014)
 * Example of http://developers.delivery.com/merchant-search/
 */

//Client Id
$clientId = "MDlkMzY3Nzg3MjU1ZjRkNmY4OWZjNDA0NjBjMTI0MWZl";

/**
 * Input address string, please note that some addresses may return hundreds or restaurant
 */
$address = urlencode("801 BRICKELL BAY DR, MIAMI, FL, 33131");

// Production url
//$req = "https://api.delivery.com/merchant/search/delivery?client_id={$clientId}&address=199 Water St 10038";

// Development url
$req = "https://sandbox.delivery.com/api/merchant/search/delivery?address={$address}&client_id={$clientId}";

// GET request and turn into associative array
$result = json_decode(file_get_contents($req),true);

echo "<pre>";
print_r($result);
echo "</pre>";

?>