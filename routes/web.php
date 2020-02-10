<?php
use App\Mahasiswa;
use App\Dosen;
use App\Hobi;

Route::get('relasi-1', function(){
     # mencari mahasiswa dengan nim 1010101
     $mahasiswa = Mahasiswa::where('nim','=','1010101')->first();
     # mencari data wali berdasarkan mahasiswa tsb
     return $mahasiswa->wali->nama;
});

Route::get('relasi-2', function() {
     #mencari mahasiswa dengan nim 1010101
     $mahasiswa = Mahasiswa::where('nim','=','1010101')->first();
     #menampilkan nama dosen dari mahasiswa tsb
     return $mahasiswa->dosen->nama;
});

Route::get('relasi-3', function() {
     # mencari dosen yang bernama Abdul Mustafa
     $dosen = Dosen::where('nama','=','Abdul Mustafa')->first();
     # menampilkan seluruh data mahasiswa dati Dosen Abdul Mustafa
     foreach ($dosen->mahasiswa as $temp)
         echo '<li> Nama : '. $temp->nama.'<strong>' .$temp->nim . '</strong></li>';
});

Route::get('relasi-4', function() {
     # mencari data mahasiswa yang memiliki nama Syahrul
     $novay = Mahasiswa::where('nama','=','Syahrul')->first();
     # menampilkan seluruh data hobi mahasiswa yang bernama Syahrul
     foreach ($novay->hobi as $temp)
         echo '<li>' . $temp->hobi . '</li>';
});

Route::get('relasi-5', function() {
     # mencari data hobi Mandi_hujan
     $mandi_hujan = Hobi::where('Hobi','=','mandi_hujan')->first();
     # menampilkan semua mahasiswa yang mempunyai hobi mandi hujan
     foreach ($mandi_hujan->mahasiswa as $temp)
         echo '<li> Nama :' . $temp->nama . '<strong>'. $temp->nim . '</strong></li>';
});










Route::get('/', function () {
    return view('welcome');
});
Route::get('penulis', function() {
    $penulis = App\User::find(1);

    foreach ($penulis->artikel as $data) {
     echo "Judul : $data->judul<br>";
     echo "Deskripsi : $data->deskripsi<br>";
     echo "Slug : $data->slug";
     echo "<hr>";
    }
});

Route::resource('siswa','SiswaController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
