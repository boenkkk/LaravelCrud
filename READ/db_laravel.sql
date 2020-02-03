CREATE TABLE `pegawai` (
  `pegawai_id` int(11) NOT NULL AUTO_INCREMENT,
  `pegawai_nama` varchar(50) DEFAULT NULL,
  `pegawai_jabatan` varchar(20) DEFAULT NULL,
  `pegawai_umur` int(11) DEFAULT NULL,
  `pegawai_alamat` text,
  PRIMARY KEY (`pegawai_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;


insert into `pegawai`(`pegawai_id`,`pegawai_nama`,`pegawai_jabatan`,`pegawai_umur`,`pegawai_alamat`) values (1,'Budi','Komisaris',26,'Tangerang');
insert into `pegawai`(`pegawai_id`,`pegawai_nama`,`pegawai_jabatan`,`pegawai_umur`,`pegawai_alamat`) values (2,'Zaki','Manager',35,'Bandung');
insert into `pegawai`(`pegawai_id`,`pegawai_nama`,`pegawai_jabatan`,`pegawai_umur`,`pegawai_alamat`) values (3,'Toni','Supervisor',34,'Bandung');
insert into `pegawai`(`pegawai_id`,`pegawai_nama`,`pegawai_jabatan`,`pegawai_umur`,`pegawai_alamat`) values (4,'Marisa','Direksi',31,'Tangerang');