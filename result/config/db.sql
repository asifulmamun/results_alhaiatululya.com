-- Create Table
CREATE TABLE IF NOT EXISTS `takmil2021`.`takmil` (
    `sl` varchar(50),
    `roll` varchar(50),
    `name` longtext,
    `bukhari_1` varchar(250),
    `bukhari_2` varchar(250),
    `muslim_1` varchar(250),
    `muslim_2` varchar(250),
    `tirmizi_1` varchar(250),
    `tirmizi_2` varchar(250),
    `abu_daud` varchar(250),
    `nasaie_ebn_maza` varchar(250),
    `shorhu_manzil_asar` varchar(250),
    `mutta_an` varchar(250),
    `total` varchar(250),
    `result` longtext,
    `merit_list` longtext,
    `kirayat` varchar(250),
    `remarks` longtext
    ) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;


-- check duplicate
/* SELECT
    roll, COUNT(roll)
FROM 
    takmil
GROUP BY
    roll
HAVING 
    COUNT(roll) > 1; */
