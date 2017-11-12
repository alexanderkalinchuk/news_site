function ReadTotalNow(){
	var reading = 0;
	var total = 0;

	setInterval(function(){
		var random = Math.round( Math.random() *  5 );
		$('#reading-now').html(random);

		total += random;
		$('#total-read').html(total);

	}, 3000)

};


ReadTotalNow();



