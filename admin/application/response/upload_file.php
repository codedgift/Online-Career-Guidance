<?php

/**
 * 
 * This controller is deprecated. 
 * The upload functionality has been re-written, please look at the API documentation referencing $ajax->upload()
 * for more info. For new location of the upload code see  cjax/core/file/iframe.php
 * 
 * 
 * @deprecated
 * @author cj
 *
 */
class controller_upload_file {

	function post($files)
	{
		$ajax = ajax();
	
		//files listed under 'files' array are files that were successfully uploaded
		if($files) {
			$ajax->wait(2, false);
			
		}
		//uncoment to see the response on the screen
		//$ajax->overlayContent($ajax->dialog("<pre>".print_r($_REQUEST,1)."</pre>","Controller Response: upload_file/post "));
	}
	
	/**
	 * 
	 * @deprecated
	 * @param unknown_type $file_names
	 */
	function send_file($file_names = null)
	{
		
	}
	
	
	function error()
	{
		
		$upload_max = $ajax->toMB(ini_get('upload_max_filesize'));
		$post_max = $ajax->toMB($pmax = ini_get('post_max_size'));// / 2;
		$max_size = ($upload_max < $post_max) ? $upload_max : $post_max;
		$cause = ($upload_max < $post_max) ? "upload_max_filesize " : "post_max_size ";
		
		echo "Could not upload file. This server limits max upload to {$max_size}MB ($cause in php.ini). ";
		
	}
	
}