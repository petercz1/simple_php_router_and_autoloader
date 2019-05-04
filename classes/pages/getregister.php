<?php
namespace your\project;

/**
 * returns home page
 */
class getRegister
{
	/**
	 * returns homepage
	 *
	 * @return void
	 */
    public function init():void
    {
        include($_SERVER['DOCUMENT_ROOT']."/frontend/register.php");
    }
}
