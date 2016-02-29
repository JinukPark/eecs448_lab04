<?php
	echo "<br>Welcome!</br>";
	$password = $_POST["password"];
	$apple = $_POST["apple"];
	$banana = $_POST["banana"];
	$orange = $_POST["orange"];
	$pA = 2 * $apple;
	$pB = 3 * $banana;
	$pO = 5 * $orange;
	$shipping = $_POST["shipping"];
	$shipping2 = "";
	$totalCost = $pA + $pB + $pO + $shipping;
	
	if($shipping == "Free") {
		$shipping2 = "7 day";
	}

	elseif($shipping == "$50.00") {
		$shipping2 = "Over night";
	} else {
		$shipping2 = "Three days";
	}

	echo "<br>Your password is " . $password . "</br><br></br>";
	echo "<table bgcolor=yellow border=1>
<tr>
<td></td>
<td>Quantity</td>
<td>Cost Per Item</td>
<td>Sub Total</td>
</tr>

<tr>
<td>Apple</td>
<td>$apple</td>
<td>$2.00</td>
<td>$$pA</td>
</tr>

<tr>
<td>Banana</td>
<td>$banana</td>
<td>$3.00</td>
<td>$$pB</td>
</tr>

<tr>
<td>orange</td>
<td>$orange</td>
<td>$5.00</td>
<td>$$pO</td>
</tr>

<tr>
<td>Shipping</td>
<td colspan=2>$shipping2</td>
<td>$$shipping</td>
</tr>

<tr>
<td align=center colspan=3>Total Cost</td>
<td >$$totalCost</td>
</tr>

</table>";
	?>