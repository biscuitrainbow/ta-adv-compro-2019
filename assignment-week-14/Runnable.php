<?php
interface Runnable
{
	/**
	 * Get accumulated distance.
	 */
	function runningDistance();
	
	/**
	 * Run for $km kilometer(s).
	 */
	function runFor($km);
}
