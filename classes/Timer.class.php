<?php
class Timer
{
	// Create Timer object and start countdown
	function __construct() {
		// TODO: Form validation on number text box
		$minutes = $_POST['time']; // Grab number of minutes from input box named 'time'
		$seconds = 59; // Init seconds at 59
		countdown($minutes, $seconds); // Starts countdown
	};
	function countdown (&$minutes, &$seconds) {
		time_nanosleep(1, 0); // Sleep for one second
		count_sec($seconds); // Subtract one
		if ($seconds == 0) {
			// If out of seconds and minutes, return function
			if ($minutes == 0) {
				return
			};
			$seconds = 60;
			count_min($minutes); // Subtract one
		};
		countdown($minutes, $seconds);
	};
	function count_sec (&$seconds) {
		$seconds--;
		return $seconds;
	};
	function count_min (&$minutes) {
		$minutes--;
		return $minutes;
	};
};