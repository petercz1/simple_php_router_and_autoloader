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
		// capture/process anything here, echo response here,
		// or send back another file like this:
        include($_SERVER['DOCUMENT_ROOT']."/frontend/thanks.php");
    }
}