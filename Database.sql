-- Membuat database (jika belum ada)
CREATE DATABASE IF NOT EXISTS db_camping;

-- Menggunakan database db_camping
USE db_camping;

-- Membuat tabel untuk produk
CREATE TABLE products (
  id int(11) NOT NULL AUTO_INCREMENT,
  nama varchar(255) NOT NULL,
  deskripsi text NOT NULL,
  harga int(11) NOT NULL,
  gambar varchar(255) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Memasukkan data awal (contoh dari file index.php Anda)
INSERT INTO `products` (`id`, `nama`, `deskripsi`, `harga`, `gambar`) VALUES
(1, 'Tenda Dome', 'Tenda untuk 4 orang, tahan air, dan mudah dipasang.', 50000, 'Assets/dome_bagus.png'),
(2, 'Sleeping Bag', 'Hangat dan nyaman untuk malam yang dingin di pegunungan.', 20000, 'Assets/sleepingBag.png'),
(3, 'Kompor Portabel', 'Ringan dan efisien untuk memasak di alam bebas.', 15000, 'Assets/komporPortabel.png'),
(4, 'Headlamp', 'Penerangan tambahan saat malam hari atau di tempat yang gelap.', 10000, 'Assets/Headlamp.png'),
(5, 'Matras Angin', 'Alas Sleeping bag, jika dirasa sleeping bag masih kurang nyaman.', 15000, 'Assets/MatrasAngin.png'),
(6, 'Tas Ransel 60L', 'Tas ransel 60L dengan bahan anti air siap dibawa ke manapun.', 10000, 'Assets/TasRansel.png'),
(7, 'Flysheet/Terpal', 'Flysheet untuk segala keperluan luar tenda anda.', 12000, 'Assets/Flysheet.png'),
(8, 'Nesting/Cooking Set', 'Satu set alat masak yang hemat tempat di ransel anda.', 15000, 'Assets/Nesting.png');