<?php
/**
 * @author Sixuan Liu (April, 2014)
 * Example of http://developers.delivery.com/authentication/#User_Account_Creation
 */

//Client Id
$clientId = "YzllOWJiMzE1MTNkOWNlOTExYTI0NWU0YjVlYmNmZTZj";
$secret = "gGgCVOjAPB8ntkiMnfkuc2JfOQcH1BF8ZV2wZ4ET";
// Simulated input received from the webpage's POST request

/*$input_array = array(
    'client_id' => $clientId,
    'client_secret' => $secret,
    'email' => 'demo@delivery.com',
    'first_name'    => 'demo',
    'grand_type'    => 'password',
    'last_name'     => 'delivery',
    'password'      => '123456aaa',
    'scope'         => 'global',
);*/

// Initialize cURL
$ch = curl_init();

// Configure the cURL command
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_URL, "https://sandbox.delivery.com/api/customer/account");
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($input_array));

// Output comes back as a JSON string.
$json_output = curl_exec($ch);

// Show results
echo "<pre>";
print_r(json_decode($json_output));
echo "</pre>";


?>