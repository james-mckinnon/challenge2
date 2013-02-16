<?php

function greeting(){
	if(date("H") < 12){
		return "Morning";
	}elseif(date("H") > 11 && date("H") < 18){
		return "Afternoon";
	}elseif(date("H") > 17){
		return "Evening";
	};
}
?>