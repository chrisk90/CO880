<?php

    //replace with relevant params
    //name of database
    $name ="devtaxicloudv7";

    if( $_SERVER['SERVER_ADDR'] == "127.0.0.1" ){
        define('DB_TYPE', 'mysql');
        define('DB_HOST', 'localhost');
        define('DB_USER', 'root');
        define('DB_PASS', '');
    } else {
        define('DB_TYPE', 'mysql');
        define('DB_HOST', 'ip-172-31-14-80');
        define('DB_USER', 'root');
        define('DB_PASS', 'password');
    }

        $database = new PDO(DB_TYPE.':host='.DB_HOST.';dbname='.$name, DB_USER, DB_PASS);

        $v = 'SELECT `version` FROM `version` LIMIT 1 ';
        $query2 = $database->prepare($v);
        $query2->execute();
        $return = $query2->fetch( PDO::FETCH_ASSOC );
        $version =  $return['version'];

    $statement ='';
    $versions = $version;

    ///////////////////////////////////////
    ////copy if, add sql to $statement/////
    ///////////////////////////////////////
    if( $version < 2 ){
        $statement .= "CREATE TABLE IF NOT EXISTS `api_key` (
                          `id` int(11) NOT NULL AUTO_INCREMENT,
                          `bundle` varchar(300) NOT NULL,
                          PRIMARY KEY (`id`)
                        ) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;";
        ++$versions;
    }
    ///////////////////////////////////////
    ////copy if statement and update //////
    ///////////////////////////////////////
    if( $versions < 3 ){
        $statement .= "INSERT INTO `devtaxicloud`.`api_key` (`id`, `bundle`) VALUES (NULL, 'com.univeristyofkent.TaxiCloud');";
        ++$versions;
    }
    if( $versions < 4 ){
        $statement .= "ALTER TABLE `cost` ADD `paid` INT NOT NULL DEFAULT '0' AFTER `cost_pence` ;";
        ++$versions;
    }
    if( $versions < 5 ){
        $statement .= "ALTER TABLE `holiday` ADD `comment` VARCHAR( 300 ) NULL AFTER `driver_id` ;
        ALTER TABLE `driver` ADD `holiday_id` VARCHAR( 255 ) NOT NULL AFTER `calendar_id` ;";
        ++$versions;
    }
    if( $versions < 6 ){
        $statement .= "ALTER TABLE `holiday` ADD `cal_event_id` VARCHAR( 255 ) NULL AFTER `comment` ;";
        ++$versions;
    }
    if( $versions < 7 ){
        $statement .= "ALTER TABLE `booking` ADD `dropoff` DATETIME NOT NULL AFTER `pickup` ;";
        ++$versions;
    }

    if( $version != $versions){
        $statement .= 'UPDATE `version` SET `version`='.$versions .' WHERE 1;';
    }

    $querys = $database->prepare($statement);
    $querys->execute();


        $query2->execute();
        $return = $query2->fetch( PDO::FETCH_ASSOC );
        echo  $return['version'];



?>