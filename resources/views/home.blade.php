<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Nama : Luk Luul Latifah</h1>
    <h1> No   : 18, {{$nama}}, {{$kelas}} </h1>

    @if($nama=='admin')
    <a href =""> ke Halaman Admin</a>
    @elseif($nama=='user')
    <a href ="">Ke Halaman USER</a>
    @else
    <h2> Anda Bukan ADMIN dan USER</h2>
    @endif 

    @switch($buah)
    @case(1)
    First case...
    @break

    @case(2)
    Second case... 
    @break

    @default
     
    @endswitch
 <br>
    @foreach ($buah as $nama)
    {{ $nama }}</br>
    @endforeach


</body>
</html>