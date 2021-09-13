<?php
	function checkEqual($a,$b){
		if (isset($a)&&$a==$b) {
			return true;
		}
	}
  function checkSet($a){
    if (isset($a)) {
      return $a;
    }
  }
