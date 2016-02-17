<?php

	require_once 'src/Palindrome.php';

	class PalindromeTest extends PHPUnit_Framework_TestCase
	{

		function test_isPalindrome_onewordLowerCase()
		{
		//Arrange
		$test_Palindrome = new Palindrome("wow");

		//Act
		$result = $test_Palindrome->isPalindrome($test_Palindrome->getInputString());

		//Assert
		$this->assertEquals('Yes', $result);
		}

		function test_isPalindrome_notAPalindrome()
		{
		//Arrange
		$test_Palindrome = new Palindrome("moo");

		//Act
		$result = $test_Palindrome->isPalindrome($test_Palindrome->getInputString());

		//Assert
		$this->assertEquals('No', $result);
		}
	}

?>
