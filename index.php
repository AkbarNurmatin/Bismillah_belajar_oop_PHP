<?php

require('bus.php');

$mobil = new Car("Avanza");
echo "Merk Kendaraan : " . $mobil->merk . "<br>";
echo "Jumlah Roda Kendaraan : " . $mobil->roda . "<br>";
echo "Jumlah Spion : " . $mobil->spion . "<br>";
echo "Bahan Bakar Kendaraan : " . $mobil->bahanbakar . "<br>";

echo '<br>';

$bus = new Bus("Mini Bus");
echo "Merk Kendaraan : " . $bus->merk . "<br>";
echo "Jumlah Roda Kendaraan : " . $bus->roda . "<br>";
echo "Jumlah Spion : " . $bus->spion . "<br>";
echo "Bahan Bakar Kendaraan : " . $bus->bahanbakar . "<br>";

?>
