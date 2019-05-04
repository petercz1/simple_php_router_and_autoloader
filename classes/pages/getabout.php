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
        include($_SERVER['DOCUMENT_ROOT']."/frontend/about.html");
    }
}
