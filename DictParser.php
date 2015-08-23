<?php
 function uncompress($path = null)
{
	ob_start();
	readgzfile($path);
	$result = ob_get_clean();
	return $result;
}

function getInfo($path,$offset,$length){
	$retult=uncompress($path);
	return substr($retult, $offset,$length);
	
}