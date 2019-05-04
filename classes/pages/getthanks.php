<?php
namespace your\project;

/**
 * returns home page
 */
class getThanks
{
	/**
	 * returns homepage
	 *
	 * @return void
	 */
    public function init():void
    {
        include($_SERVER['DOCUMENT_ROOT']."/frontend/thanks.php");
    }
}