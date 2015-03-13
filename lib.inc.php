<?php
    /**
     * @brief gnuboard4의 경로를 이용하여 DB정보를 얻어옴
     * @author zero@xpressengine.com
     **/
    function getDBInfo($path) {
        if(substr($path,-1)=='/') $path = substr($path, 0, strlen($path)-1);
        $config_file = sprintf('%s/_var/db.info.php',$path);

        if(!file_exists($config_file)) return;

        @include($config_file);

        $output->db_hostname = $DB['host'];
        $output->db_userid = $DB['user'];
        $output->db_password = $DB['pass'];
        $output->db_database = $DB['name'];
        $output->db_prefix = $DB['head'];
        return $output;
    } 
?>
