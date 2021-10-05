<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @php
$data=1000;
$nama="Alvin Hardinata";
$kelas="XII RPL 2";
$alamat="Jl Rancamanyar Regency 2 Kp Bojong Sayang Rt06 Rw04";
$hobi="motoran";
$status = 1;
$bil=1;
@endphp
<h1>{{$data}}<br> {{$nama}}<br> {{$kelas}}<br> {{$alamat}}<br> {{$hobi}}</h1>

@if($status == 1)
Status Kamu Lulus
@else
Status Kamu Tidak Lulus
@endif
<br><br>
@for ($angka = 1; $angka <= 10; $angka++)
@if ($angka % 2)
    Angka {{ $angka }} adalah Ganjil<br>
    @else
    Angka {{ $angka }} adalah Genap<br>
@endif
@endfor
</body>
</html>
