<?php
 define('tela', ['login','home','ficha','tk']);
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
  function checkTela($a){
    if (isset($a)) {
      foreach (tela as $key) {
        if ($key == $a) {
          return $a;
        }
      }
    }
  }
  function clean(){
    unset($_SESSION);
  }
