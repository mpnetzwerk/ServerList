<?php
/**
 * Check a directory if the are subdirs or server data
 * 
 * @param string $dirName
 */
function checkDirectory(string $dirName): void {
    global $serversArray;

    foreach(scandir($dirName) as $dirContent) {
        if(is_dir($dirName . "/" . $dirContent)) {
            if($dirContent !== "." AND $dirContent !== "..") {
                if(is_file($dirName . "/" . $dirContent . "/name.txt")) {
                    $serverData = array(
                        "name" => explode("\n", file_get_contents($dirName . "/" . $dirContent . "/name.txt"))[0]
                    );
    
                    if(is_file($dirName . "/" . $dirContent . "/description.txt")) {
                        $serverData["description"] = explode("\n", file_get_contents($dirName . "/" . $dirContent . "/description.txt"))[0];
                    }

                    $dirNameParts = explode("/", $dirName);

                    $serverIp = "";

                    for($i = (count($dirNameParts) - 1); $i > 0; $i--) {
                        $serverIp .= $dirNameParts[$i];

                        if($i > 1) {
                            $serverIp .= ".";
                        }
                    }

                    $serverData["ip"] = $serverIp;
                    $serverData["port"] = (int) $dirContent;
    
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
