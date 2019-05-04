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
		// capture/process anything h
        include($_SERVER['DOCUMENT_ROOT']."/frontend/about.html");
    }
}
