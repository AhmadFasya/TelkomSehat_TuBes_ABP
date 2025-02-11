<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Dokter;
use App\Models\Mahasiswa;
use App\Models\Paramedis;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AwalanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Faker = Faker::create();

        // —————————————————————————————————————————————————————————— //

        $mahasiswaID = Mahasiswa::create([
            'nim' => '1301204017',
            'username' => 'robithnaufal',
            'nomortelepon' => '6281246229522',
        ])->id;

        $userID = User::create([
            'name' => 'Robith Naufal Razzak',
            'email' => 'robithnaufal@student.telkomuniversity.ac.id',
            'password' => Hash::make("robithnaufal123"),
            'mahasiswaid' => $mahasiswaID,
        ])->id;

        Mahasiswa::find($mahasiswaID)->update(['userid' => $userID]);

        // —————————————————————————————————————————————————————————— //

        $mahasiswaID = Mahasiswa::create([
            'nim' => '1301204459',
            'username' => 'haidarx',
            'nomortelepon' => '6281238777306',
        ])->id;

        $userID = User::create([
            'name' => 'Haidaruddin Muhammad Ramdhan',
            'email' => 'haidarx@student.telkomuniversity.ac.id',
            'password' => Hash::make("haidarx123"),
            'mahasiswaid' => $mahasiswaID,
        ])->id;

        Mahasiswa::find($mahasiswaID)->update(['userid' => $userID]);

        // —————————————————————————————————————————————————————————— //

        $mahasiswaID = Mahasiswa::create([
            'nim' => '1301204112',
            'username' => 'dimasrfq',
            'nomortelepon' => '6285155106991',
        ])->id;

        $userID = User::create([
            'name' => 'Muhammad Dimas Rifki Irianto',
            'email' => 'dimasrfq@student.telkomuniversity.ac.id',
            'password' => Hash::make("dimas123"),
            'mahasiswaid' => $mahasiswaID,
        ])->id;

        Mahasiswa::find($mahasiswaID)->update(['userid' => $userID]);

        // —————————————————————————————————————————————————————————— //

        $mahasiswaID = Mahasiswa::create([
            'nim' => '1301204231',
            'username' => 'ahmadfasya',
            'nomortelepon' => '6285755347595',
        ])->id;

        $userID = User::create([
            'name' => 'Ahmad Fasya Adila',
            'email' => 'ahmadfasya@student.telkomuniversity.ac.id',
            'password' => Hash::make("fasya123"),
            'mahasiswaid' => $mahasiswaID,
        ])->id;

        Mahasiswa::find($mahasiswaID)->update(['userid' => $userID]);

        // —————————————————————————————————————————————————————————— //

        $mahasiswaID = Mahasiswa::create([
            'nim' => '1301204416',
            'username' => 'hiksal',
            'nomortelepon' => '628112104949',
        ])->id;

        $userID = User::create([
            'name' => 'Muhammad Hiksal',
            'email' => 'hiksal@student.telkomuniversity.ac.id',
            'password' => Hash::make("hiksal321"),
            'mahasiswaid' => $mahasiswaID,
        ])->id;

        Mahasiswa::find($mahasiswaID)->update(['userid' => $userID]);

        // —————————————————————————————————————————————————————————— //

        $dokterID = Dokter::create([
            'kodedokter' => 'FSV',
            'username' => 'fanie',
            'nomortelepon' => '627617891983',
            'spesialis' => 'Dokter Gigi',
        ])->id;

        $userID = User::create([
            'name' => 'Febriyanti Sthefanie',
            'email' => 'sthefanie@telkomuniversity.ac.id',
            'password' => Hash::make("fanie123"),
            'dokterid' => $dokterID,
        ])->id;

        Dokter::find($dokterID)->update(['userid' => $userID]);

        // —————————————————————————————————————————————————————————— //

        $dokterID = Dokter::create([
            'kodedokter' => 'SOL',
            'username' => 'solikin',
            'nomortelepon' => '622156959333',
            'spesialis' => 'Dokter Umum',
        ])->id;

        $userID = User::create([
            'name' => 'Solikin',
            'email' => 'solikin@telkomuniversity.ac.id',
            'password' => Hash::make("solikin123"),
            'dokterid' => $dokterID,
        ])->id;

        Dokter::find($dokterID)->update(['userid' => $userID]);

        // —————————————————————————————————————————————————————————— //

        $dokterID = Dokter::create([
            'kodedokter' => 'GAW',
            'username' => 'gedeagung',
            'nomortelepon' => '6284845123075',
            'spesialis' => 'Dokter Kulit',
        ])->id;

        $userID = User::create([
            'name' => 'Gede Agung Ary Wisudiawan',
            'email' => 'gedeagung@telkomuniversity.ac.id',
            'password' => Hash::make("gedeagung123"),
            'dokterid' => $dokterID,
        ])->id;

        Dokter::find($dokterID)->update(['userid' => $userID]);

        // —————————————————————————————————————————————————————————— //

        $dokterID = Dokter::create([
            'kodedokter' => 'COK',
            'username' => 'tjokor',
            'nomortelepon' => '6292760268633',
            'spesialis' => 'Psikiater',
        ])->id;

        $userID = User::create([
            'name' => 'Tjokorda Agung Budi Wirayuda',
            'email' => 'tjokor@telkomuniversity.ac.id',
            'password' => Hash::make("tjokor123"),
            'dokterid' => $dokterID,
        ])->id;

        Dokter::find($dokterID)->update(['userid' => $userID]);

        // —————————————————————————————————————————————————————————— //

        $dokterID = Dokter::create([
            'kodedokter' => 'ADR',
            'username' => 'drian',
            'nomortelepon' => '6210615006816',
            'spesialis' => 'Dokter THT',
        ])->id;

        $userID = User::create([
            'name' => 'Andrian Rakhmatsyah',
            'email' => 'drian@telkomuniversity.ac.id',
            'password' => Hash::make("drian123"),
            'dokterid' => $dokterID,
        ])->id;

        Dokter::find($dokterID)->update(['userid' => $userID]);

        // —————————————————————————————————————————————————————————— //

        $paramedisID = Paramedis::create([
            'kodeParamedis' => 'TPR',
            'username' => 'tapir',
            'nomortelepon' => '6281593942394',
        ])->id;

        $userID = User::create([
            'name' => 'Tim Tapir',
            'email' => 'tapir@telkomuniversity.ac.id',
            'password' => Hash::make("tapir123"),
            'paramedisid' => $paramedisID,
        ])->id;

        Paramedis::find($paramedisID)->update(['userid' => $userID]);

        // —————————————————————————————————————————————————————————— //

        $paramedisID = Paramedis::create([
            'kodeParamedis' => 'KSR',
            'username' => 'kasuari',
            'nomortelepon' => '6264372066006',
        ])->id;

        $userID = User::create([
            'name' => 'Tim Kasuari',
            'email' => 'kasuari@telkomuniversity.ac.id',
            'password' => Hash::make("kasuari123"),
            'paramedisid' => $paramedisID,
        ])->id;

        Paramedis::find($paramedisID)->update(['userid' => $userID]);

        // —————————————————————————————————————————————————————————— //

        $paramedisID = Paramedis::create([
            'kodeParamedis' => 'KMD',
            'username' => 'komodo',
            'nomortelepon' => '6278357391896',
        ])->id;

        $userID = User::create([
            'name' => 'Tim Komodo',
            'email' => 'komodo@telkomuniversity.ac.id',
            'password' => Hash::make("komodo123"),
            'paramedisid' => $paramedisID,
        ])->id;

        Paramedis::find($paramedisID)->update(['userid' => $userID]);
    }
}