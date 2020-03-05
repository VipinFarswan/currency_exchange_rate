<!DOCTYPE html>
<html>
<head>
	<title>Currency Rate</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<style type="text/css">
		#result { font-size: 20px; } 
	</style>
</head>
<body>
<div class="container">
	<div class="text-success mt-5" id="result"></div>
	<form id="getCurrency">
	    <div class="form-group">
		    <label for="Currency_a"></label>
		    <select class="form-control" id="Currency_a" name="currency_a">
		    	<option value="AUD" >AUD - Australian dollar</option>
				<option value="BGN" >BGN - Bulgarian lev</option>
				<option value="BRL" >BRL - Brazilian real</option>
				<option value="CAD" >CAD - Canadian</option>
				<option value="CHF" >CHF - Swiss franc</option>
				<option value="CNY" >CNY - Chinese yuan renminbi</option>
				<option value="CZK" >CZK - Czech koruna</option>
				<option value="DKK" >DKK - Danish krone</option>
				<option value="EUR" >EUR - Euro</option>
				<option value="GBP" >GBP - Pound sterling</option>
				<option value="HKD" >HKD - Hong Kong dollar</option>
				<option value="HRK" >HRK - Croatian kuna</option>
				<option value="HUF" >HUF - Hungarian forint</option>
				<option value="IDR" >IDR - Indonesian rupiah</option>
				<option value="ILS" >ILS - Israeli shekel</option>
				<option value="INR" >INR - Indian rupee</option>
				<option value="ISK" >ISK - Icelandic krone</option>
				<option value="JPY" >JPY - Japanese yen</option>
				<option value="KRW" >KRW - South Korean won</option>
				<option value="MXN" >MXN - Mexican peso</option>
				<option value="MYR" >MYR - Malaysian ringgit</option>
				<option value="NOK" >NOK - Norwegian krone</option>
				<option value="NZD" >NZD - New Zealand dollar</option>
				<option value="PHP" >PHP - Philippine peso</option>
				<option value="PLN" >PLN - Polish zloty</option>
				<option value="RON" >RON - Romanian leu</option>
				<option value="RUB" >RUB - Russian rouble</option>
				<option value="SEK" >SEK - Swedish krona</option>
				<option value="SGD" >SGD - Singapore dollar</option>
				<option value="THB" >THB - Thai baht</option>
				<option value="TRY" >TRY - Turkish lira</option>
				<option value="USD" selected>USD - US dollar</option>
				<option value="ZAR" >ZAR - South African rand</option>
		    </select>
	  	</div>
	  	<div class="form-group">
		    <label for="Currency_b"></label>
		    <select class="form-control" id="Currency_b" name="currency_b">
		    	<option value="AUD" >AUD - Australian dollar</option>
				<option value="BGN" >BGN - Bulgarian lev</option>
				<option value="BRL" >BRL - Brazilian real</option>
				<option value="CAD" >CAD - Canadian</option>
				<option value="CHF" >CHF - Swiss franc</option>
				<option value="CNY" >CNY - Chinese yuan renminbi</option>
				<option value="CZK" >CZK - Czech koruna</option>
				<option value="DKK" >DKK - Danish krone</option>
				<option value="EUR" >EUR - Euro</option>
				<option value="GBP" >GBP - Pound sterling</option>
				<option value="HKD" >HKD - Hong Kong dollar</option>
				<option value="HRK" >HRK - Croatian kuna</option>
				<option value="HUF" >HUF - Hungarian forint</option>
				<option value="IDR" >IDR - Indonesian rupiah</option>
				<option value="ILS" >ILS - Israeli shekel</option>
				<option value="INR" selected>INR - Indian rupee</option>
				<option value="ISK" >ISK - Icelandic krone</option>
				<option value="JPY" >JPY - Japanese yen</option>
				<option value="KRW" >KRW - South Korean won</option>
				<option value="MXN" >MXN - Mexican peso</option>
				<option value="MYR" >MYR - Malaysian ringgit</option>
				<option value="NOK" >NOK - Norwegian krone</option>
				<option value="NZD" >NZD - New Zealand dollar</option>
				<option value="PHP" >PHP - Philippine peso</option>
				<option value="PLN" >PLN - Polish zloty</option>
				<option value="RON" >RON - Romanian leu</option>
				<option value="RUB" >RUB - Russian rouble</option>
				<option value="SEK" >SEK - Swedish krona</option>
				<option value="SGD" >SGD - Singapore dollar</option>
				<option value="THB" >THB - Thai baht</option>
				<option value="TRY" >TRY - Turkish lira</option>
				<option value="USD" >USD - US dollar</option>
				<option value="ZAR" >ZAR - South African rand</option>
		    </select>
	  	</div>
	    <button type="button" class="btn btn-primary" onclick="getCurrency()">Submit</button>
	</form>
</div>
<script type="text/javascript" src="app.js"></script>
</body>
</html>