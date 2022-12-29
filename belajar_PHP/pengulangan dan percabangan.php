<?php
$data = array(
  array("Rizky", "123456", "TI", "rizky@gmail.com", 90),
  array("Rizky", "123456", "TI", "rizky@gmail.com", 80),
  array("Rizky", "123456", "TI", "rizky@gmail.com", 60),
);

for ($i = 0; $i < count($data); $i++) {
  list($nama, $nim, $jurusan, $email, $nilai) = $data[$i];

  echo "Nama: $nama\n";
  echo "NIM: $nim\n";
  echo "Jurusan: $jurusan\n";
  echo "Email: $email\n";
  echo "Nilai: $nilai (status: ";

  if ($nilai >= 70) {
    echo "Lulus)<br>";
  } else {
    echo "Tidak Lulus)<br>";
  }
}
?>