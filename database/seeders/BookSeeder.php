<?php

namespace Database\Seeders;
use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Book::create([
        'judul' => 'Laravel untuk Pemula',
        'penulis' => 'Andi',
        'tahun_terbit' => 2023,
        'stok' => 10
    ]);
    // tambah data lainnya
    }
}
