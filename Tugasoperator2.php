<?php
$saldoawal = 1000000;
$bungan = 0.03;
$bulan = 11;
$saldoakhir = $saldoawal - $saldoawal * $bungan * $bulan;

echo "saldo akhir setelah " . $bulan . "bulan adalah : Rp. ". $saldoakhir.",-";