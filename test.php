<?php
 
function write($file_name,$data,$mode='w'){
                     
    if(!in_array($mode,array('w','a','x')))
        return false;
 
    $dir = dirname($file_name);
 
    if(!is_dir($dir))
        $dir = mkdir($dir,0777);
         
    if(!$dir) return false;
 
    $file = fopen($file_name,$mode);
     
    if(!$file || !is_writable($file_name)) return false;
                 
    fwrite($file,$data);
    fclose($file);
     
    return true;
 
}
 
echo write('QQ.txt',json_encode($_POST));
?>