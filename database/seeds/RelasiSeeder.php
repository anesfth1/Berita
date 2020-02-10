<?php

use Illuminate\Database\Seeder;
use App\Dosen;
use App\Hobi;
use App\Mahasiswa;
use App\Wali;

class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('walis')->delete();
        DB::table('dosens')->delete();
        DB::table('mahasiswas')->delete();
        DB::table('hobis')->delete();
        DB::table('mahasiswa_hobi')->delete();

        // membuat data dosen
        $dosen = Dosen::create(array(
            'nipd' => '1234567890',
            'nama' => 'Abdul Mustafa'
        ));
        $this->command->info('Data Dosen Berhasil Di Isi');

        // membuat data mahasiswa
        $irysal = Mahasiswa::create(array(
             'nama' => 'Syahrul',
             'nim' => '1010101',
             'id_dosen' => $dosen->id
        ));
        $ntut = Mahasiswa::create(array(
             'nama' => 'Entut Marsinah',
             'nim' => '1010102',
             'id_dosen' => $dosen->id
        ));
        $icih = Mahasiswa::create(array(
             'nama' => 'Icih Bersin',
             'nim' => '1010103',
             'id_dosen' => $dosen->id
        ));
        $this->command->info('Data Mahasiswa Berhasil Di Isi');

        // membuat data wali
        $dadang = Wali::create(array(
             'nama' => 'Dadang Peloy',
             'id_mahasiswa' => $irysal->id
        ));
        $ucup = Wali::create(array(
             'nama' => 'Ucup Mambo',
             'id_mahasiswa' => $ntut->id
        ));
        $agus = Wali::create(array(
             'nama' => 'Agus Pepsoden',
             'id_mahasiswa' => $icih->id
        ));
        $this->command->info('Data Wali Berhasil Di Isi');

        // membuat data hobi
        $melukis_langit = Hobi::create(array('hobi' => 'Melukis Langit'));
        $mandi_hujan = Hobi::create(array('hobi' => 'Mandi Hujan'));
        $ambyar = Hobi::create(array('hobi' => 'Stalking Mantan'));

        // attach -> melampirkan data baru ke table pivot(bantuan)
        // sync -> mengupdate data di table pivot(bantuan)
        $irysal->hobi()->attach($melukis_langit->id);
        $irysal->hobi()->attach($ambyar->id);
        $ntut->hobi()->attach($mandi_hujan->id);
        $icih->hobi()->attach($ambyar->id);
        $this->command->info('Data Mahasiswa Berserta Hobi Berhasil Di Isi');
    }
}
