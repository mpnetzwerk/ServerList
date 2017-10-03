<?php
/**
 * Check a directory if the are subdirs or server data
 * 
 * @param string $dirName
 */
function checkDirectory(string $dirName) {
    global $serversArray;

    foreach(scandir($dirName) as $dirContent) {
        if(is_dir($dirName . "/" . $dirContent)) {
            if($dirContent !== "." AND $dirContent !== "..") {
                if(is_file($dirName . "/" . $dirContent . "/name.txt")) {
                    $serverData = array(
                        "name" => file_get_contents($dirName . "/" . $dirContent . "/name.txt")
                    );
    
                    if(is_file($dirName . "/" . $dirContent . "/description.txt")) {
                        $serverData["description"] = file_get_contents($dirName . "/" . $dirContent . "/description.txt");
                    }
    
                    $serversArray[] = $serverData;
                } else {
                    checkDirectory($dirName . "/" . $dirContent);
                }
            }
        }
    }
}

$serversArray = array();

checkDirectory("servers");

file_put_contents("servers.json", json_encode($serversArray));