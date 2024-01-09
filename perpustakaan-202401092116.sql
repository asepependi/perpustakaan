-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: perpustakaan
-- ------------------------------------------------------
-- Server version	5.7.33

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `anggota_perpus`
--

DROP TABLE IF EXISTS `anggota_perpus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `anggota_perpus` (
  `id_anggota` char(10) NOT NULL,
  `nama_anggota` varchar(100) DEFAULT NULL,
  `username_anggota` varchar(100) DEFAULT NULL,
  `pass_anggota` varchar(100) DEFAULT NULL,
  `jenis_kelamin_anggota` varchar(100) DEFAULT NULL,
  `foto_anggota` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `anggota_perpus`
--

LOCK TABLES `anggota_perpus` WRITE;
/*!40000 ALTER TABLE `anggota_perpus` DISABLE KEYS */;
INSERT INTO `anggota_perpus` VALUES ('001','Testing','asepependi','124','laki-laki','asda'),('002','Anggota 2','anggota2','121212','perempuan','');
/*!40000 ALTER TABLE `anggota_perpus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `buku`
--

DROP TABLE IF EXISTS `buku`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `buku` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kd_buku` varchar(5) DEFAULT NULL,
  `judul_buku` varchar(50) DEFAULT NULL,
  `penulis` varchar(50) DEFAULT NULL,
  `penerbit` varchar(30) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `buku_kd_buku_IDX` (`kd_buku`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `buku`
--

LOCK TABLES `buku` WRITE;
/*!40000 ALTER TABLE `buku` DISABLE KEYS */;
INSERT INTO `buku` VALUES (1,'B0001','Komputer Dasar','Hudzaifah','Erlangga',31),(2,'B0002','Pemrograman','Penulis 1','Penerbit 1',2),(3,'B0003','Jaringan','Penulis 2','Penerbit 2',10),(4,'B0004','Testing Buku ','Testing Penulis','Testing Penerbit',30),(5,'B0005','Testing Buku 2','Testing Penulis 2','Testing Penerbit 2',10),(6,'B0006','Testing Buku 3','Testing Penulis 3','Testing Penerbit 3',10),(7,'B0007','Testing Buku 4','Testing Penulis 5','Testing Penerbit 4',1),(8,'B0008','Testing Buku 5','Testing Penulis 6','Testing Penerbit 5',4),(9,'B0011','Testing Buku ','Testing Penulis','Testing Penerbit',12);
/*!40000 ALTER TABLE `buku` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detail_peminjaman`
--

DROP TABLE IF EXISTS `detail_peminjaman`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `detail_peminjaman` (
  `id_detail_peminjaman` int(5) NOT NULL AUTO_INCREMENT,
  `id_peminjaman` int(5) NOT NULL,
  `id_buku` int(10) NOT NULL,
  PRIMARY KEY (`id_detail_peminjaman`) USING BTREE,
  KEY `fk_buku_dp` (`id_buku`),
  KEY `fk_idpeminjaman_dp` (`id_peminjaman`),
  CONSTRAINT `fk_buku_dp` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_idpeminjaman_dp` FOREIGN KEY (`id_peminjaman`) REFERENCES `peminjaman` (`id_peminjaman`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detail_peminjaman`
--

LOCK TABLES `detail_peminjaman` WRITE;
/*!40000 ALTER TABLE `detail_peminjaman` DISABLE KEYS */;
INSERT INTO `detail_peminjaman` VALUES (1,3,4),(2,3,3),(3,1,3),(4,1,2);
/*!40000 ALTER TABLE `detail_peminjaman` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detail_pengembalian`
--

DROP TABLE IF EXISTS `detail_pengembalian`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `detail_pengembalian` (
  `id_detail_pengembalian` int(5) NOT NULL,
  `id_pengembalian` int(5) NOT NULL,
  `id_buku` int(5) NOT NULL,
  PRIMARY KEY (`id_detail_pengembalian`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detail_pengembalian`
--

LOCK TABLES `detail_pengembalian` WRITE;
/*!40000 ALTER TABLE `detail_pengembalian` DISABLE KEYS */;
/*!40000 ALTER TABLE `detail_pengembalian` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `peminjaman`
--

DROP TABLE IF EXISTS `peminjaman`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `peminjaman` (
  `id_peminjaman` int(5) NOT NULL AUTO_INCREMENT,
  `id_anggota` int(5) NOT NULL,
  `id_staff` int(5) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  PRIMARY KEY (`id_peminjaman`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `peminjaman`
--

LOCK TABLES `peminjaman` WRITE;
/*!40000 ALTER TABLE `peminjaman` DISABLE KEYS */;
INSERT INTO `peminjaman` VALUES (1,2,1,'2023-11-11','20:00:00'),(3,3,3,'2023-11-01','22:21:00');
/*!40000 ALTER TABLE `peminjaman` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pengembalian`
--

DROP TABLE IF EXISTS `pengembalian`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pengembalian` (
  `id_pengembalian` int(5) NOT NULL AUTO_INCREMENT,
  `id_anggota` int(5) NOT NULL,
  `id_staff` int(5) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  PRIMARY KEY (`id_pengembalian`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pengembalian`
--

LOCK TABLES `pengembalian` WRITE;
/*!40000 ALTER TABLE `pengembalian` DISABLE KEYS */;
/*!40000 ALTER TABLE `pengembalian` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `staff_perpus`
--

DROP TABLE IF EXISTS `staff_perpus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `staff_perpus` (
  `id_staff` char(10) NOT NULL,
  `nama_staff` varchar(100) DEFAULT NULL,
  `username_staff` varchar(10) DEFAULT NULL,
  `password_staff` varchar(200) DEFAULT NULL,
  `jenis_kelamin_staff` varchar(10) DEFAULT NULL,
  `foto_staff` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `staff_perpus`
--

LOCK TABLES `staff_perpus` WRITE;
/*!40000 ALTER TABLE `staff_perpus` DISABLE KEYS */;
INSERT INTO `staff_perpus` VALUES ('001','ASEP EPENDI','asepependi','12345','laki-laki','ada'),('002','Testings','penghuni','1234a','laki-laki','asda'),('003','Staff 3','staff3','121212','laki-laki','');
/*!40000 ALTER TABLE `staff_perpus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'perpustakaan'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-01-09 21:16:02
