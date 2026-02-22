CREATE DATABASE IF NOT EXISTS pmi;
USE pmi;

CREATE TABLE IF NOT EXISTS pendonor (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(255),
  kelamin VARCHAR(50),
  alamat TEXT,
  nomor VARCHAR(50),
  rtrw VARCHAR(50),
  kelurahan VARCHAR(100),
  kecamatan VARCHAR(100),
  wilayah VARCHAR(100),
  telepon VARCHAR(50),
  pekerjaan VARCHAR(100),
  tgl_lahir DATE,
  no_donor VARCHAR(50),
  penghargaan VARCHAR(100),
  donor_puasa VARCHAR(50),
  donor_terakhir DATE,
  donor_ke INT
);

INSERT INTO pendonor (nama, tgl_lahir, alamat, telepon) VALUES ('Budi', '1990-01-01', 'Jl. Sudirman', '081234567890');
