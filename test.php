<?php
// while(true){
// 	echo "�����뵥�ʣ�";
// 	fscanf(STDIN,"%s",$word);
// 	if("q!"==$word)
// 		break;
// 	echo $word."\n";
// }

// function getFileList($directory) {
// 	$files = array();
// 	if(is_dir($directory)) {
// 		if($files = scandir($directory)) {
// 			print_r($files);
// 			$files = array_slice($files,2);
// 		}
// 	}
// 	return $files;
// }
// $dic=getFileList("./dict");
// print_r($dic);
// $dir=dir("./dict/stardict-oald-cn-2.4.2/");
// while (($file = $dir->read()) !== false)

// 	{

// 		echo "�ļ���: " . $file . "\n";

// 	}

// $dir->close();

//echo substr("./dict/stardict-oald-cn-2.4.2/oald_cn.idx",0,-4);
// $fp=fopen("./dict/stardict-oald-cn-2.4.2/oald_cn.idx", "rb");
// $content=fread($fp, 1000);
// echo $content;

// function getFile($dir) {
// 	$idxFile="";
// 	if (false != ($handle = opendir ( $dir ))) {
// 		$i=0;
// 		while ( false !== ($file = readdir ( $handle )) ) {
// 			if ($file != "." && $file != ".."&&strpos($file,".idx")) {
// 				echo $file."\n";
// 				$idxFile=$file;
// 			}
// 		}
// 		//�رվ��
// 		closedir ( $handle );
// 	}
// 	return $idxFile;
// }

// print_r(getFile("./dict/stardict-oald-cn-2.4.2/"));

$DIC_DIR=dirname(__FILE__);
echo $DIC_DIR;