<?php
//include_once $_SERVER["DOCUMENT_ROOT"].'/assets/php/global_configuration.php';
class Genfunc
{

    private $_tagType = array(
                            "js" =>'<script type="text/javascript" src="{script_path}{script_name}{script_ver}">{script_special}</script>',
                            "css" => '<link rel="stylesheet" type="text/css" href="{script_path}{script_name}{script_ver}">'
                        );

	/*
	 * $str - string | object | array
	 * checks a given string to see if what I define as null in most of my projects
	 * derived from an era where so many things could cause a false positive/negative
	 * for the most part still applicable for me.
	 * Provide an empty array/object, string and nullCheck = true. Otherwise false.
	 */
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
            $useRemoteFile = false;
            if(isset($arr['script_remote_path']) && $this->nullCheck($arr['script_remote_path']) == false)
            {
                $useRemoteFile = true;
                $arr['script_path'] = $arr['script_remote_path'];
            }
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

            $output = '';
            if(isset($arr['if_else']) && $this->nullCheck($arr['if_else']) == false)
            {
                $output .= '<!--[if '.$arr['if_else'].']>'."\n";
            }
            if($useRemoteFile == false)
            {
                if(file_exists($swapfor[0].$swapfor[1]) == true)
                {
                    //output if local file exists
                    $output .=  str_replace($swap,$swapfor,$this->_tagType[$tagType])."\n";
                }
                else
                {
                    //output if local file does not exist.
                   $output .= '<!-- '.$swapfor[0].$swapfor[1]. ' ~~~ false: invalid path/file name -->'."\n";
                }
            }
            else
            {
                //output if script_remote_path not null or otherwise empty
                //no validation of remote file checked, to many potential false positives.
                $output .=  str_replace($swap,$swapfor,$this->_tagType[$tagType])."\n";
            }
            if(isset($arr['if_else']) && $this->nullCheck($arr['if_else']) == false)
            {
                $output .= '<![endif]-->'."\n";
            }

            return $output;
        }
	}
    public function gen_meta($arr)
    {
        $meta = '';
        $meta .= '<meta charset="utf-8">'."\n";
        $meta .= '<title>'.$arr['site_meta']['title'].'</title>'."\n";
	    $meta .= '<meta http-equiv="X-UA-Compatible" content="IE=edge">'."\n";
	    $meta .= '<meta name="viewport" content="width=device-width, initial-scale=1">'."\n";
        $meta .= '<meta name="description" content="'.$arr['site_meta']['desc'].'">'."\n";
        $meta .= '<meta name="author" content="'.$arr['site_meta']['author'].'">'."\n";
		$meta .= '<link rel="shortcut icon" href="'.$arr['site_meta']['shortcut_icon'].'">'."\n";
		return $meta;
    }
    public function get_host($rmPort = true)
    {
        //based loosely on how Symfony framework attempts to get host.
        if ($host = $_SERVER['HTTP_X_FORWARDED_HOST'])
        {
            $elements = explode(',', $host);
            $host = trim(end($elements));
        }
        else
        {
            if (!$host = $_SERVER['HTTP_HOST'])
            {
                if (!$host = $_SERVER['SERVER_NAME'])
                {
                    $host = !empty($_SERVER['SERVER_ADDR']) ? $_SERVER['SERVER_ADDR'] : '';
                }
            }
        }
        // Remove port number from host
        if($rmPort == true)
        {
            $host = preg_replace('/:\d+$/', '', $host);
        }
        return trim($host);
    }
    public function serverMethod($requested)
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $request = explode("/", substr(@$_SERVER['PATH_INFO'], 1));
        switch ($method) {
          case 'PUT':
//            rest_put($request);
            break;
          case 'POST':
//            rest_post($request);
            break;
          case 'GET':
//            rest_get($request);
            break;
          case 'HEAD':
//            rest_head($request);
            break;
          case 'DELETE':
//            rest_delete($request);
            break;
          case 'OPTIONS':
//            rest_options($request);
            break;
          default:
//            rest_error($request);
            break;
        }
    }
}
?>