$(document).ready(function() {
    /*-------------------------------------
    | Timer JS
    -------------------------------------*/
	let countdown;
	const timerDisplay = document.querySelector('.display__time-left');
	const endTime = document.querySelector('.display__end-time');
	const buttons = document.querySelectorAll('[data-time]');

	function timer(seconds) {
	  // clear any existing timers
	  clearInterval(countdown);

	  const now = Date.now();
	  const then = now + seconds * 1000;
	  displayTimeLeft(seconds);
	  displayEndTime(then);

	  countdown = setInterval(() => {
	    const secondsLeft = Math.round((then - Date.now()) / 1000);
	    // check if we should stop it!
	    if(secondsLeft < 0) {
	      clearInterval(countdown);
	      return;
	    }
	    // display it
	    displayTimeLeft(secondsLeft);
	  }, 1000);
	}

	function displayTimeLeft(seconds) {
	  const minutes = Math.floor(seconds / 60);
	  const remainderSeconds = seconds % 60;
	  const display = `${minutes}:${remainderSeconds < 10 ? '0' : '' }${remainderSeconds}`;
	  document.title = display;
	  timerDisplay.textContent = display;
	}

	function displayEndTime(timestamp) {
	  const end = new Date(timestamp);
	  const hour = end.getHours();
	  const adjustedHour = hour > 12 ? hour - 12 : hour;
	  const minutes = end.getMinutes();
	  endTime.textContent = `Be Back At ${adjustedHour}:${minutes < 10 ? '0' : ''}${minutes}`;
	}

	function startTimer() {
	  const seconds = parseInt(this.dataset.time);
	  timer(seconds);
	}

	buttons.forEach(button => button.addEventListener('click', startTimer));
	document.customForm.addEventListener('submit', function(e) {
	  e.preventDefault();
	  const mins = this.minutes.value;
	  console.log(mins);
	  timer(mins * 60);
	  this.reset();
	});

//shows timer buttons on click
	$('a.timeButton').click(function() {
		// $(".miniNav").removeClass('miniNavTime');
		 $(".miniNav").toggleClass('miniNavTime');

		//  $(".miniNav").removeClass('miniNavTime');

		 $("div.timer").fadeToggle();


		//  if( $('div.display').is(':visible') ) {
		// 	    // $(".miniNav").removeClass('miniNavTime3');
		// 	    // $(".miniNav").removeClass('miniNavTime');
		// 		alert('display is visible');
		// 	}
		// 	else {
		// 	// $(".miniNav").addClass('miniNavTime');
		// 	// $('div.display').show();
		// 	alert('display not visible');
		// 	}
	});

	$('button.timer_button').click(function(){
		$(".miniNav").addClass('miniNavTime');
		$("div.display").show();
	});

/*-------------------------------------
| Accordion Recipe Viewer
-------------------------------------*/
// $(".collapse").collapse();
// $('#accordion').collapse({hide: true})
$('.panel-collapse.in')
   .collapse('hide');




});