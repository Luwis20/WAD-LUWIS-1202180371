<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            [
                'name' => 'Snacker',
                'price' => '100000',
                'description' => 'Sepatu Sneakers adalah sepatu yang dirancang untuk olahraga atau bentuk latihan fisik lainnya. Tetapi saat ini juga banyak digunakan untuk kegiatan sehari-hari.',
                'stock' => '5',
                'img_path' => 'uploads/uTdZlGjO8NMPgOdzdPqMtnmyhbTLhUrViSdFyrAH.jpg'
            ],

            [
                'name' => 'Tas',
                'price' => '200000',
                'description' => 'Tas adalah wadah tertutup yang dapat dibawa bepergian. Materi untuk membuat tas antara lain adalah kertas, plastik, kulit, kain, dan lain-lain',
                'stock' => '5',
                'img_path' => 'uploads/dBIrFOqjalm7rd5q9YiHjecmbDMqSG7eZ9xDnwSV.jpg'
            ],

            [
                'name' => 'Baju',
                'price' => '900000',
                'description' => 'Pakaian adalah bahan tekstil dan serat yang digunakan sebagai penutup tubuh. Pakaian adalah kebutuhan pokok manusia selain makanan dan tempat berteduh/tempat tinggal (rumah)',
                'stock' => '5',
                'img_path' => 'uploads/VWKdN0REfiwQvdGcF3CGZ6UzKnf4SAJDYaDNAkk5.jpg'
            ],

            [
                'name' => 'sandal',
                'price' => '300000',
                'description' => 'Sandal atau sendal adalah salah satu model alas kaki yang terbuka pada bagian jari kaki atau tumit pemakainya. Bagian alas (sol) dihubungkan dengan tali atau sabuk',
                'stock' => '5',
                'img_path' => 'uploads/mgprQbWcRiYazAtemZ43v4zCtBtElCaH60xms9TU.jpg'
            ],

            [
                'name' => 'sepatu tracking',
                'price' => '200000',
                'description' => 'septau yang di design khusu untuk track',
                'stock' => '5',
                'img_path' => 'uploads/u6b8llMJZQyKtiUSaRidRFVeuY9DIEJUouXliOWk.jpg'
            ],

            [
                'name' => 'sepatu',
                'price' => '500000',
                'description' => 'Sepatu Converse adalah merk sepatu populer yang masih menjadi sepatu favorit banyak orang di dunia',
                'stock' => '5',
                'img_path' => 'uploads/hq5W2xmMcwm1zs8NNJ2tXW9ZDzkFdKbHHLVPXjTL.jpg'
            ],

            [
                'name' => 'baju gamis',
                'price' => '200000',
                'description' => 'Baju untuk wanita',
                'stock' => '5',
                'img_path' => 'uploads/mgprQbWcRiYazAtemZ43v4zCtBtElCaH60xms9TU.jpg'
            ],

            [
                'name' => 'sepatu casual',
                'price' => '240000',
                'description' => 'Sepatu kekiniean',
                'stock' => '5',
                'img_path' => 'uploads/77ZTX4W8p8Btn8hgqvCy7unK95Q0y8RxhLl6X3bw.jpg'
            ],
        ];

        Product::insert($datas);
    }
}
