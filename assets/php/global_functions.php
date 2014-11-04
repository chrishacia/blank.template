<?php
class Genfunc
{
	/*
	 * $str - string | object | array
	 * checks a given string to see if what I define as null in most of my projects
	 * derived from an era where so many things could cause a false positive/negative
	 * for the most part still applicable for me.
	 * Provide an empty array/object, string and nullCheck = true. Otherwise false.
	 */
	 
    private $_tagType = array(
                            "js" =>'<script type="text/javascript" src="{script_path}{script_name}{script_ver}">{script_special}</script>',
                            "css" => '<link rel="stylesheet" type="text/css" href="{script_path}{script_name}{script_ver}">'
                        );
    
	public function nullCheck($str = null)
	{
		//the number 0 will give a false negative.
		//if working with numbers try nullNumCheck();
		if((is_array($str))||(is_object($str)))
		{
			$str = array_values(array_filter($str));
			if(count($str) <= 0)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		else
		{
			if((empty($str))||(trim($str)=='')||($str == null))
			{
				return true;
			}
			else
			{
				return false;
			}
		}
	}
	public function nullNumCheck($str = null)
	{
		if((!empty($str))||(trim($str)!=='')||($str !== null))
		{
			if(is_numeric($str))
			{
				return true;
			}
		}
		return false;
	}
	public function gen_tags($tagType = "js", $arr)
	{
    	if(isset($this->_tagType[$tagType]))
        {
            $swap    = array('{script_path}','{script_name}','{script_ver}','{script_special}');
            $swapfor = array('','','','');
            if(isset($arr['script_path']) && $this->nullCheck($arr['script_path']) == false)
            {
                $swapfor[0] = $arr['script_path'];
            }
            if(isset($arr['script_name']) && $this->nullCheck($arr['script_name']) == false)
            {
                $swapfor[1] = $arr['script_name'];
            }
            if(isset($arr['script_ver']) && $this->nullCheck($arr['script_ver']) == false)
            {
                $swapfor[2] = '?ver='.$arr['script_ver'];
            }
            if(isset($arr['script_special']) && $this->nullCheck($arr['script_special']) == false)
            {
                $swapfor[3] = $arr['script_special'];
            }
            return str_replace($swap,$swapfor,$this->_tagType[$tagType]);            
        }
	}
	
}
?>