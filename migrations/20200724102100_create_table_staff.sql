CREATE TABLE `humanresource`.`staff` ( 
    `staffId` BIGINT NOT NULL AUTO_INCREMENT , 
    `email` VARCHAR(50) NOT NULL , 
    `phone` VARCHAR(20) NOT NULL , 
    `password` VARCHAR(255) NOT NULL , 
    `position` VARCHAR(255) NOT NULL , 
    `created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , 
    `updated` TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
    PRIMARY KEY (`staffId`)
    ) ENGINE = InnoDB; 

    INSERT INTO `staff` (`staffId`, `email`, `phone`, `password`, `position`, `created`, `updated`) VALUES (NULL, 'administrator@gmail.com', '081234532346', '$2y$10$FNTTCtkYedIbXVcORX5jc.SWF0zayMjA3nefgUzjk6aIkZNd2Vnfi', 'Administrator', current_timestamp(), current_timestamp()) 