<?php
namespace your\project;

/**
 * returns home page
 */
class getAbout
{
	/**
	 * returns homepage
	 *
	 * @return void
	 */
    public function init():void
    {
		// capture/process anything here, echo response here,
		// or send back a static file like this:
        include($_SERVER['DOCUMENT_ROOT']."/frontend/about.html");
    }
}
