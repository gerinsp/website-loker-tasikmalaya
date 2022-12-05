<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Study;
use App\Models\Company;
use App\Models\Payment;
use App\Models\Category;
use App\Models\Comunity;
use App\Models\Location;
use App\Models\Comentary;
use App\Models\ComunityPost;
use App\Models\ComunityUser;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Gerin Sena Pratama',
            'username' => 'gerinsp',
            'email' => 'denapratama7@gmail.com',
            'password' => bcrypt('123'),
            'is_admin' => 1,
            'akun_status' => 'Pro Plus'
        ]);

        // User::create([
        //     'name' => 'Sena',
        //     'email' => 'sena@gmail.com',
        //     'password' => bcrypt('123')
        // ]);
        User::factory(2)->create();

        Company::factory(3)->create();

        Study::create([
            'study' => 'SD'
        ]);

        Study::create([
            'study' => 'SMP'
        ]);

        Study::create([
            'study' => 'SMA'
        ]);

        Study::create([
            'study' => 'S1'
        ]);

        Comunity::create([
            'name' => 'Tasikmalaya',
            'deskripsi' => 'Komunitas Khusus warga Tasikmalaya'
        ]);

        Comunity::create([
            'name' => 'Bandung',
            'deskripsi' => 'Komunitas Khusus warga Bandung'
        ]);

        Comunity::create([
            'name' => 'Ciamis',
            'deskripsi' => 'Komunitas Khusus warga Ciamis'
        ]);

        ComunityUser::factory(5)->create();

        ComunityPost::create([
            'title' => 'Postingan Pertama',
            'slug' => 'postingan-pertama',
            'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt doloremque nisi officiis cupiditate magnam. Quisquam iusto molestiae odit sit, esse reiciendis itaque totam, blanditiis ex autem eius, atque dicta ut ea. Quas perspiciatis deleniti nesciunt earum quod, dignissimos sit voluptatibus id modi.</p>',
            'user_id' => mt_rand(1,3),
            'comunity_id' => mt_rand(1,3)
        ]);

        ComunityPost::create([
            'title' => 'Postingan Kedua',
            'slug' => 'postingan-kedua',
            'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt doloremque nisi officiis cupiditate magnam. Quisquam iusto molestiae odit sit, esse reiciendis itaque totam, blanditiis ex autem eius, atque dicta ut ea. Quas perspiciatis deleniti nesciunt earum quod, dignissimos sit voluptatibus id modi.</p>',
            'user_id' => mt_rand(1,3),
            'comunity_id' => mt_rand(1,3)
        ]);

        ComunityPost::create([
            'title' => 'Postingan Ketiga',
            'slug' => 'postingan-ketiga',
            'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt doloremque nisi officiis cupiditate magnam. Quisquam iusto molestiae odit sit, esse reiciendis itaque totam, blanditiis ex autem eius, atque dicta ut ea. Quas perspiciatis deleniti nesciunt earum quod, dignissimos sit voluptatibus id modi.</p>',
            'user_id' => mt_rand(1,3),
            'comunity_id' => mt_rand(1,3)
        ]);

        Location::factory(4)->create();

        Comentary::factory(5)->create();

        Category::create([
            'name' => 'IT',
            'slug' => 'it'
        ]);

        Category::create([
            'name' => 'Administrasi',
            'slug' => 'administrasi'
        ]);

        Category::create([
            'name' => 'Sales dan Marketing',
            'slug' => 'sales-dan-marketing'
        ]);

        Post::factory(10)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt doloremque nisi officiis cupiditate magnam. Quisquam iusto molestiae odit sit, esse reiciendis itaque totam,',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt doloremque nisi officiis cupiditate magnam. Quisquam iusto molestiae odit sit, esse reiciendis itaque totam, blanditiis ex autem eius, atque dicta ut ea. Quas perspiciatis deleniti nesciunt earum quod, dignissimos sit voluptatibus id modi.</p><p>Iusto velit ducimus consectetur ex earum repellat architecto beatae nostrum perferendis, consequatur voluptas voluptatem, obcaecati enim dolore asperiores repellendus quos aliquid libero delectus atque porro temporibus molestias eveniet dolorem. Recusandae, architecto? Magni, expedita.</p><p> Impedit sed ducimus, doloribus aspernatur unde eveniet, velit vitae laborum, maiores assumenda corporis illo ratione! Alias magni, aut tempore non repellendus voluptate nobis earum fugit sapiente dolorem repudiandae velit obcaecati maxime, temporibus in odio veritatis. Quos maiores placeat tenetur accusamus, fugit sapiente repudiandae ab. Illum iure molestiae in blanditiis rem consequatur, ratione inventore sint molestias quos velit beatae dolor deleniti labore error. Mollitia, excepturi qui iste consectetur enim, molestias eligendi ipsum aliquam nobis facilis eveniet.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt doloremque nisi officiis cupiditate magnam. Quisquam iusto molestiae odit sit, esse reiciendis itaque totam,',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt doloremque nisi officiis cupiditate magnam. Quisquam iusto molestiae odit sit, esse reiciendis itaque totam, blanditiis ex autem eius, atque dicta ut ea. Quas perspiciatis deleniti nesciunt earum quod, dignissimos sit voluptatibus id modi.</p><p>Iusto velit ducimus consectetur ex earum repellat architecto beatae nostrum perferendis, consequatur voluptas voluptatem, obcaecati enim dolore asperiores repellendus quos aliquid libero delectus atque porro temporibus molestias eveniet dolorem. Recusandae, architecto? Magni, expedita.</p><p> Impedit sed ducimus, doloribus aspernatur unde eveniet, velit vitae laborum, maiores assumenda corporis illo ratione! Alias magni, aut tempore non repellendus voluptate nobis earum fugit sapiente dolorem repudiandae velit obcaecati maxime, temporibus in odio veritatis. Quos maiores placeat tenetur accusamus, fugit sapiente repudiandae ab. Illum iure molestiae in blanditiis rem consequatur, ratione inventore sint molestias quos velit beatae dolor deleniti labore error. Mollitia, excepturi qui iste consectetur enim, molestias eligendi ipsum aliquam nobis facilis eveniet.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt doloremque nisi officiis cupiditate magnam. Quisquam iusto molestiae odit sit, esse reiciendis itaque totam,',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt doloremque nisi officiis cupiditate magnam. Quisquam iusto molestiae odit sit, esse reiciendis itaque totam, blanditiis ex autem eius, atque dicta ut ea. Quas perspiciatis deleniti nesciunt earum quod, dignissimos sit voluptatibus id modi.</p><p>Iusto velit ducimus consectetur ex earum repellat architecto beatae nostrum perferendis, consequatur voluptas voluptatem, obcaecati enim dolore asperiores repellendus quos aliquid libero delectus atque porro temporibus molestias eveniet dolorem. Recusandae, architecto? Magni, expedita.</p><p> Impedit sed ducimus, doloribus aspernatur unde eveniet, velit vitae laborum, maiores assumenda corporis illo ratione! Alias magni, aut tempore non repellendus voluptate nobis earum fugit sapiente dolorem repudiandae velit obcaecati maxime, temporibus in odio veritatis. Quos maiores placeat tenetur accusamus, fugit sapiente repudiandae ab. Illum iure molestiae in blanditiis rem consequatur, ratione inventore sint molestias quos velit beatae dolor deleniti labore error. Mollitia, excepturi qui iste consectetur enim, molestias eligendi ipsum aliquam nobis facilis eveniet.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt doloremque nisi officiis cupiditate magnam. Quisquam iusto molestiae odit sit, esse reiciendis itaque totam,',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt doloremque nisi officiis cupiditate magnam. Quisquam iusto molestiae odit sit, esse reiciendis itaque totam, blanditiis ex autem eius, atque dicta ut ea. Quas perspiciatis deleniti nesciunt earum quod, dignissimos sit voluptatibus id modi.</p><p>Iusto velit ducimus consectetur ex earum repellat architecto beatae nostrum perferendis, consequatur voluptas voluptatem, obcaecati enim dolore asperiores repellendus quos aliquid libero delectus atque porro temporibus molestias eveniet dolorem. Recusandae, architecto? Magni, expedita.</p><p> Impedit sed ducimus, doloribus aspernatur unde eveniet, velit vitae laborum, maiores assumenda corporis illo ratione! Alias magni, aut tempore non repellendus voluptate nobis earum fugit sapiente dolorem repudiandae velit obcaecati maxime, temporibus in odio veritatis. Quos maiores placeat tenetur accusamus, fugit sapiente repudiandae ab. Illum iure molestiae in blanditiis rem consequatur, ratione inventore sint molestias quos velit beatae dolor deleniti labore error. Mollitia, excepturi qui iste consectetur enim, molestias eligendi ipsum aliquam nobis facilis eveniet.</p>'
        // ]);
    }
}
