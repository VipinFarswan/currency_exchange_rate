function getCurrency() {
	$.ajax({
	    type: 'post',
	    url: 'get_exchange_rate.php',
	    data: $("#getCurrency").serialize(),
	    success: function (status) {
	      $("#result").html("Current Currency Rate > "+status);
	    }
	});
}