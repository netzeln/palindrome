<?php
	 class Palindrome
		{
		private $inputString;

		function __construct($string)
		{
			$this->inputString = $string;
		}

		 function getInputString(){
			return $this->inputString;
			}

		function setInputString(){
			$this->inputString = $inputString;
		}

		function isPalindrome()
		{
			if (strrev(strtolower($this->inputString)) == strtolower($this->inputString)){
				return 'Yes';
			} else {
				return 'No';
			}
			
		}

	}
 ?>
