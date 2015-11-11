"use strict";

    $(function () {
        $('#datetimepicker').datetimepicker({
            inline: true,
            sideBySide: true
        });
    });

	function timer(){
		var future = new Date($('#datetimepicker').data("DateTimePicker").date().toDate());
		$('#remaining').html(calculate(future));
	}

	setInterval(timer, 50);

	function calculate(f){
		
		// Variables for calculating the date format:
		var msSec = 1000;
		var msMin = 60 * msSec;
		var msHour = 60 * msMin;
		var msDay = 24 * msHour;
		/////////////////////////////////////////////

		var today = new Date();
		var ms = f.getTime() - today.getTime();
		var days = Math.floor(ms/msDay);
		ms = ms%msDay;
		var hours = Math.floor(ms/msHour);
		ms = ms%msHour;
		var minutes = Math.floor(ms/msMin);
		ms = ms%msMin;
		var seconds = Math.floor(ms/msSec);
		ms = ms%msSec;


					function pad(milliseconds) {

						var y = milliseconds.toString().length;
							// console.log(y);

									if (y > 2){
										return milliseconds;
									}
										else if(y === 2){
											return "0" + milliseconds;
										}
											else {
												return "00" + milliseconds;
											}
										}

		if(ms <= 0){
			console.log(ms >= 0);
			return "Select a date in the future.";
		} else {
			console.log(ms >= 0);
			return days + " : " + hours + " : " + minutes + " : " + seconds + " : " + pad(ms) ;
		}
		

	}

