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
		// or send back a static file 
        include($_SERVER['DOCUMENT_ROOT']."/frontend/about.html");
    }
}
