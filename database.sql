create database tugasproyek;

use tugasproyek;

create table `daftar`(
    `no` int (11) auto_increment,
    `nama` varchar (120),
    `nisn` char (4),
    `tgl_lahir` varchar (120),
    `email` varchar (120),
    `jurusan` varchar (120),
    `jenis_klmin`varchar (120),
    `gambar`varchar (120),
    PRIMARY KEY  (`no`)
);
    