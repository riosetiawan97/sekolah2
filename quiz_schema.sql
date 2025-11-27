
-- Menghapus data yang ada dari tbl_kelas
DELETE FROM tbl_kelas;

-- Hapus tabel jika sudah ada
DROP TABLE IF EXISTS `tbl_quiz_guru`;
DROP TABLE IF EXISTS `tbl_jawaban`;
DROP TABLE IF EXISTS `tbl_soal`;
DROP TABLE IF EXISTS `tbl_quiz`;

-- Membuat tabel kelas sementara
CREATE TABLE `tbl_kelas_temp` (
  `kelas_id` int(11) NOT NULL AUTO_INCREMENT,
  `kelas_nama` varchar(100) DEFAULT NULL,
  `id_guru` int(11) NOT NULL,
  PRIMARY KEY (`kelas_id`),
  KEY `id_guru` (`id_guru`),
  CONSTRAINT `tbl_kelas_temp_ibfk_1` FOREIGN KEY (`id_guru`) REFERENCES `tbl_guru` (`guru_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Salin data dari tbl_kelas lama ke tbl_kelas_temp
INSERT INTO `tbl_kelas_temp` (kelas_id, kelas_nama, id_guru) SELECT kelas_id, kelas_nama, 1 FROM `tbl_kelas`;

-- Hapus tabel kelas lama
DROP TABLE `tbl_kelas`;

-- Ganti nama tabel sementara
RENAME TABLE `tbl_kelas_temp` TO `tbl_kelas`;

-- Membuat tabel untuk kuis
CREATE TABLE `tbl_quiz` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `judul` VARCHAR(255) NOT NULL,
  `deskripsi` TEXT,
  `waktu_mulai` DATETIME NOT NULL,
  `waktu_selesai` DATETIME NOT NULL,
  `waktu_pengerjaan` INT(11) NOT NULL COMMENT 'dalam menit',
  `id_kelas` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`id_kelas`) REFERENCES `tbl_kelas`(`kelas_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Membuat tabel untuk soal
CREATE TABLE `tbl_soal` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `id_quiz` INT(11) NOT NULL,
  `soal` TEXT NOT NULL,
  `tipe_soal` ENUM('pilihan_ganda', 'essay') NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`id_quiz`) REFERENCES `tbl_quiz`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Membuat tabel untuk jawaban
CREATE TABLE `tbl_jawaban` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `id_soal` INT(11) NOT NULL,
  `jawaban` TEXT NOT NULL,
  `is_correct` TINYINT(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  FOREIGN KEY (`id_soal`) REFERENCES `tbl_soal`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Membuat tabel setup
CREATE TABLE `tbl_setup` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `judul_website` VARCHAR(255) NOT NULL,
  `logo` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tbl_setup` (`judul_website`, `logo`) VALUES ('My School', 'logo.png');
