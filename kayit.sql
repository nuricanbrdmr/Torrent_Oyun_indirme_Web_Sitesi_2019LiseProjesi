-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 02 May 2020, 10:53:21
-- Sunucu sürümü: 10.4.11-MariaDB
-- PHP Sürümü: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `kayit`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `konular`
--

CREATE TABLE `konular` (
  `konu_id` int(11) NOT NULL,
  `konu_baslık` varchar(300) COLLATE utf8mb4_turkish_ci NOT NULL,
  `konu_resim` varchar(300) COLLATE utf8mb4_turkish_ci NOT NULL,
  `konu_metni1` varchar(3000) COLLATE utf8mb4_turkish_ci NOT NULL,
  `konu_metni2` varchar(3000) COLLATE utf8mb4_turkish_ci NOT NULL,
  `konu_metni3` varchar(3000) COLLATE utf8mb4_turkish_ci NOT NULL,
  `konu_tarih` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `konular`
--

INSERT INTO `konular` (`konu_id`, `konu_baslık`, `konu_resim`, `konu_metni1`, `konu_metni2`, `konu_metni3`, `konu_tarih`) VALUES
(1, 'Zula İndir', 'zula-icon.png', 'Zula Çıkış Tarihi: 22 Şubat 2015 Platform: Bilgisayar İşletim Sistemi: Windows 7 / 8 / 10 Oyunlar Tür:', 'Fps Oyunları Dili: Türkçe Geliştiricisi: Lokum Games Yayımcı: Zula Kurulum Türü: Otomatik', 'Dosya Türü: Exe Dosya Boyutu: 3 GB İndirme', '2020-05-02 08:48:13'),
(2, 'Internet Download Manager İndir', 'Internet-Download-Manager-İcon.png', 'Internet Download Manager Full İndir Program’a Hızlı Bakış', ' Program: Internet Download Manager (IDM) Platform: Bilgisayar  İşletim Sistemi: Windows XP / 7 / 8 / 10 Lisans: Ücretsiz Tür: Full Program indir Dil:Türkçe', '', '2020-05-02 08:48:23'),
(3, 'WinRAR İndir', 'WinRAR-İcon.png', ' WinRAR Full İndir Program’a Hızlı Bakış Program: Winrar Platform: Bilgisayar', ' İşletim Sistemi: Microsoft Windows XP/7/8/10 Lisans: Full Sürüm Tür: Dosya Sıkıştırma Dil: Türkçe Sürüm: v5.80 Beta 3', '  Geliştirici: RarSoft Yayımcı: RarSoft', '2020-05-02 08:48:42'),
(4, 'Battlefield 5 İndir', 'Battlefield-5-icon.png', 'Battlefield 5 Full İndir Oyun Adı : Battlefield V Oyun Türü: Savaş Oyunları Çıkış Tarihi: 20 Kasım', '2018 Geliştirici: EA ve Dice – Frostbite Yayımcı: Electronic Arts Platform : Bilgisayar Dosya Boyutu: 41.93 GB', 'Oyun Dili : İngilizce Crack : Var', '2020-05-02 08:48:57'),
(5, 'Microsoft Office İndir ', 'mcf.png', ' Microsoft Office İndir Ad: Microsoft Office 2019 Yayımlanma Tarihi: 12 Haziran 2019 Platform:', ' Bilgisayar Dil: Türkçe Sürüm: 2019 Lisans: Preview Tür: Ofis Programı Geliştirici: Microsoft Yayımcı: Microsoft', ' Boyutu: 5 MB', '2020-05-02 08:49:12'),
(6, '', '', '', '', '', '2020-05-02 08:07:27');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tblkayit`
--

CREATE TABLE `tblkayit` (
  `İd` int(50) NOT NULL,
  `Kadi` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `Sifre` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `Sifre_tekrar` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `İs` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `Tel` varchar(12) COLLATE utf8mb4_turkish_ci NOT NULL,
  `uye_kod` mediumtext COLLATE utf8mb4_turkish_ci NOT NULL,
  `uye_onay` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `tblkayit`
--

INSERT INTO `tblkayit` (`İd`, `Kadi`, `email`, `Sifre`, `Sifre_tekrar`, `İs`, `Tel`, `uye_kod`, `uye_onay`) VALUES
(42, 'nurican12', 'nuricanb6@gmail.com', '123', '123', 'Yazılım Mühendisi', '05469425471', 'b9d3dd4e116c31d05385e92be7bb17ed', 1),
(43, 'nurican12', 'nuricanb6@gmail.com', '123', '123', 'Yazılım Mühendisi', '05469425471', '0c46e691757057e32d5693aa06d9eac3', 0),
(44, 'nurican12', 'nuricanb6@gmail.com', '123', '123', 'Yazılım Mühendisi', '05469425471', '2972f589b2a426b2b8b4f70c06371136', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE `yorumlar` (
  `yorum_id` int(11) NOT NULL,
  `yorum_isim` varchar(3000) COLLATE utf8mb4_turkish_ci NOT NULL,
  `yorum_mesaj` varchar(3000) COLLATE utf8mb4_turkish_ci NOT NULL,
  `yorum_konuid` varchar(3000) COLLATE utf8mb4_turkish_ci NOT NULL,
  `yorum_tarih` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `yorum_onay` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `yorumlar`
--

INSERT INTO `yorumlar` (`yorum_id`, `yorum_isim`, `yorum_mesaj`, `yorum_konuid`, `yorum_tarih`, `yorum_onay`) VALUES
(4, 'nuri', 'deneme', '6', '2020-05-02 08:28:50', 0);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `konular`
--
ALTER TABLE `konular`
  ADD PRIMARY KEY (`konu_id`);

--
-- Tablo için indeksler `tblkayit`
--
ALTER TABLE `tblkayit`
  ADD PRIMARY KEY (`İd`);

--
-- Tablo için indeksler `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`yorum_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `konular`
--
ALTER TABLE `konular`
  MODIFY `konu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `tblkayit`
--
ALTER TABLE `tblkayit`
  MODIFY `İd` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Tablo için AUTO_INCREMENT değeri `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `yorum_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
