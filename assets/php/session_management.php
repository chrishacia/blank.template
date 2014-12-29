<?php
class Session_management
{
    public $_func;

    public function __construct()
    {
        $this->_func = new Genfunc();
    }

	private function startSession()
	{
		session_start();
	}
	private function killSession()
	{
		session_destroy();
	}
	private function sessionOutput($obj)
	{
		return json_encode($obj);
	}
	public function item($action = null, $property = null, $value = null)
	{
        if($action == null){return false;}
        if($property == null){return false;}
	}
	public function sessionDetails()
	{
		$this->startSession();
		if(isset($_SESSION) && $this->_func->nullCheck($_SESSION) == false)
		{
			return $this->sessionOutput($_SESSION);
		}
		return null;
	}
}
?>