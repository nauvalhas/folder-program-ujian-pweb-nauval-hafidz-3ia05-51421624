/*UJIAN PWEB NAUVAL HAFIDZ ATHAULLAH S 51421624 3IA05
tambahkan query ini jika belum membuat database simple_crud :
CREATE DATABASE simple_crud;*/
use simple_crud;
CREATE TABLE `resep` (
    `id` int (11) NOT NULL auto_increment,
    `nmpmbt` varchar(255) ,
    `nmrsp` varchar(255),
    `bahan` varchar(255),
    `cara` varchar(255),
    PRIMARY KEY (`id`)
);