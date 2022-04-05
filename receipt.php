<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>order reciept</title>
<style>
body{
background-color: #bce3cc;
margin-left: 30px;
margin-right: 30px;
margin-top: 30px;
}

</style>
</head>
<body>
<h1> JADE DELIGHT ORDER RECIEPT </h1>

<?php
extract ($_POST);

echo $_POST["quan0"] . " Chicken Chop Suey = $" . $quan0 *

4.5 . "<br>";

echo $_POST["quan1"] . " Sweet and Sour Pork = $" . $quan1 *

6.25 . "<br>";

echo $_POST["quan2"] . " Shrimp Lo Mein = $" . $quan2 * 5.25

. "<br>";

echo $_POST["quan3"] . " Moo Shi Chicken = $" . $quan3 * 6.5

. "<br>";

echo $_POST["quan4"] . " Fried Rice = $" . $quan4 * 2.35 .

"<br>";

echo "Subtotal: $$subtotal <br>";
echo "Tax: $$tax <br>";
echo "Total: $$total <br>";
$method = $orderType;
date_default_timezone_set("America/New_York");
echo "You selected <strong> $method! </strong><br>";

if ($method == "delivery")
{
$selecTime = date("h:i:sa");
$del_time = strtotime("+30 minutes",

strtotime($selecTime));

echo "Your order will be delivered at " . date('h:ia',

$del_time) . ".";

}
else
{
$selecTime = date("h:i:sa");
$del_time = strtotime("+15 minutes",

strtotime($selecTime));

echo "Your order will be ready at " . date('h:ia',

$del_time) . ".";

}
/////// EMAIL//////////
echo "Thank you for your order. A confirmation email has been

sent to $email.";

$msg = "Thank you for your order. The total is $$total!
\nYour order method is $method and will be completed at " .
date('h:ia', $del_time) . "!";
$msg = wordwrap($msg,70);

mail("$email", "Your Order", $msg);
?>

</body>
</html>