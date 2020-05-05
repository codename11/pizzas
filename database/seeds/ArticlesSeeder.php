<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert(
            [
                'title' => "Italien pizza",
                'body' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis mi congue, imperdiet nulla non, egestas magna. Phasellus posuere mauris venenatis urna euismod malesuada. Duis pharetra diam eu egestas auctor. Donec efficitur et libero ac vehicula. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris magna nibh, pharetra vel tincidunt a, efficitur a eros. Donec posuere quam a tellus posuere ultricies. Aenean scelerisque, libero id mattis ornare, neque tortor congue magna, et tempus sapien ligula quis sem. Etiam metus justo, scelerisque quis lobortis sed, dignissim sit amet eros. Aliquam a odio et augue euismod interdum vitae nec enim. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque nec ipsum velit. Aliquam dignissim hendrerit massa et faucibus. Etiam et est vitae quam tempus mattis. Proin sed bibendum massa, non tristique orci. Mauris quis nibh dapibus, consequat mi id, placerat sem.",
                'thumbnail' => "pizza1.jpg",
                'type' => "pizza",
                'price' => "2.39",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => "Greek pizza",
                'body' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis mi congue, imperdiet nulla non, egestas magna. Phasellus posuere mauris venenatis urna euismod malesuada. Duis pharetra diam eu egestas auctor. Donec efficitur et libero ac vehicula. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris magna nibh, pharetra vel tincidunt a, efficitur a eros. Donec posuere quam a tellus posuere ultricies. Aenean scelerisque, libero id mattis ornare, neque tortor congue magna, et tempus sapien ligula quis sem. Etiam metus justo, scelerisque quis lobortis sed, dignissim sit amet eros. Aliquam a odio et augue euismod interdum vitae nec enim. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque nec ipsum velit. Aliquam dignissim hendrerit massa et faucibus. Etiam et est vitae quam tempus mattis. Proin sed bibendum massa, non tristique orci. Mauris quis nibh dapibus, consequat mi id, placerat sem.",
                'thumbnail' => "pizza2.jpg",
                'type' => "pizza",
                'price' => "2.39",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => "Spanish pizza",
                'body' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis mi congue, imperdiet nulla non, egestas magna. Phasellus posuere mauris venenatis urna euismod malesuada. Duis pharetra diam eu egestas auctor. Donec efficitur et libero ac vehicula. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris magna nibh, pharetra vel tincidunt a, efficitur a eros. Donec posuere quam a tellus posuere ultricies. Aenean scelerisque, libero id mattis ornare, neque tortor congue magna, et tempus sapien ligula quis sem. Etiam metus justo, scelerisque quis lobortis sed, dignissim sit amet eros. Aliquam a odio et augue euismod interdum vitae nec enim. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque nec ipsum velit. Aliquam dignissim hendrerit massa et faucibus. Etiam et est vitae quam tempus mattis. Proin sed bibendum massa, non tristique orci. Mauris quis nibh dapibus, consequat mi id, placerat sem.",
                'thumbnail' => "pizza3.jpg",
                'type' => "pizza",
                'price' => "2.39",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => "Serbian pizza",
                'body' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis mi congue, imperdiet nulla non, egestas magna. Phasellus posuere mauris venenatis urna euismod malesuada. Duis pharetra diam eu egestas auctor. Donec efficitur et libero ac vehicula. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris magna nibh, pharetra vel tincidunt a, efficitur a eros. Donec posuere quam a tellus posuere ultricies. Aenean scelerisque, libero id mattis ornare, neque tortor congue magna, et tempus sapien ligula quis sem. Etiam metus justo, scelerisque quis lobortis sed, dignissim sit amet eros. Aliquam a odio et augue euismod interdum vitae nec enim. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque nec ipsum velit. Aliquam dignissim hendrerit massa et faucibus. Etiam et est vitae quam tempus mattis. Proin sed bibendum massa, non tristique orci. Mauris quis nibh dapibus, consequat mi id, placerat sem.",
                'thumbnail' => "pizza4.jpg",
                'type' => "pizza",
                'price' => "2.39",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => "Margarita",
                'body' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis mi congue, imperdiet nulla non, egestas magna. Phasellus posuere mauris venenatis urna euismod malesuada. Duis pharetra diam eu egestas auctor. Donec efficitur et libero ac vehicula. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris magna nibh, pharetra vel tincidunt a, efficitur a eros. Donec posuere quam a tellus posuere ultricies. Aenean scelerisque, libero id mattis ornare, neque tortor congue magna, et tempus sapien ligula quis sem. Etiam metus justo, scelerisque quis lobortis sed, dignissim sit amet eros. Aliquam a odio et augue euismod interdum vitae nec enim. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque nec ipsum velit. Aliquam dignissim hendrerit massa et faucibus. Etiam et est vitae quam tempus mattis. Proin sed bibendum massa, non tristique orci. Mauris quis nibh dapibus, consequat mi id, placerat sem.",
                'thumbnail' => "pizza5.jpg",
                'type' => "pizza",
                'price' => "2.39",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => "Capricoza",
                'body' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis mi congue, imperdiet nulla non, egestas magna. Phasellus posuere mauris venenatis urna euismod malesuada. Duis pharetra diam eu egestas auctor. Donec efficitur et libero ac vehicula. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris magna nibh, pharetra vel tincidunt a, efficitur a eros. Donec posuere quam a tellus posuere ultricies. Aenean scelerisque, libero id mattis ornare, neque tortor congue magna, et tempus sapien ligula quis sem. Etiam metus justo, scelerisque quis lobortis sed, dignissim sit amet eros. Aliquam a odio et augue euismod interdum vitae nec enim. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque nec ipsum velit. Aliquam dignissim hendrerit massa et faucibus. Etiam et est vitae quam tempus mattis. Proin sed bibendum massa, non tristique orci. Mauris quis nibh dapibus, consequat mi id, placerat sem.",
                'thumbnail' => "pizza6.jpg",
                'type' => "pizza",
                'price' => "2.39",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => "Hawaian pizza",
                'body' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis mi congue, imperdiet nulla non, egestas magna. Phasellus posuere mauris venenatis urna euismod malesuada. Duis pharetra diam eu egestas auctor. Donec efficitur et libero ac vehicula. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris magna nibh, pharetra vel tincidunt a, efficitur a eros. Donec posuere quam a tellus posuere ultricies. Aenean scelerisque, libero id mattis ornare, neque tortor congue magna, et tempus sapien ligula quis sem. Etiam metus justo, scelerisque quis lobortis sed, dignissim sit amet eros. Aliquam a odio et augue euismod interdum vitae nec enim. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque nec ipsum velit. Aliquam dignissim hendrerit massa et faucibus. Etiam et est vitae quam tempus mattis. Proin sed bibendum massa, non tristique orci. Mauris quis nibh dapibus, consequat mi id, placerat sem.",
                'thumbnail' => "pizza7.jpg",
                'type' => "pizza",
                'price' => "2.39",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => "Sweet pizza",
                'body' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis mi congue, imperdiet nulla non, egestas magna. Phasellus posuere mauris venenatis urna euismod malesuada. Duis pharetra diam eu egestas auctor. Donec efficitur et libero ac vehicula. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris magna nibh, pharetra vel tincidunt a, efficitur a eros. Donec posuere quam a tellus posuere ultricies. Aenean scelerisque, libero id mattis ornare, neque tortor congue magna, et tempus sapien ligula quis sem. Etiam metus justo, scelerisque quis lobortis sed, dignissim sit amet eros. Aliquam a odio et augue euismod interdum vitae nec enim. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque nec ipsum velit. Aliquam dignissim hendrerit massa et faucibus. Etiam et est vitae quam tempus mattis. Proin sed bibendum massa, non tristique orci. Mauris quis nibh dapibus, consequat mi id, placerat sem.",
                'thumbnail' => "pizza8.jpg",
                'type' => "pizza",
                'price' => "2.39",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => "Beer1",
                'body' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis mi congue, imperdiet nulla non, egestas magna. Phasellus posuere mauris venenatis urna euismod malesuada. Duis pharetra diam eu egestas auctor. Donec efficitur et libero ac vehicula. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris magna nibh, pharetra vel tincidunt a, efficitur a eros. Donec posuere quam a tellus posuere ultricies. Aenean scelerisque, libero id mattis ornare, neque tortor congue magna, et tempus sapien ligula quis sem. Etiam metus justo, scelerisque quis lobortis sed, dignissim sit amet eros. Aliquam a odio et augue euismod interdum vitae nec enim. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque nec ipsum velit. Aliquam dignissim hendrerit massa et faucibus. Etiam et est vitae quam tempus mattis. Proin sed bibendum massa, non tristique orci. Mauris quis nibh dapibus, consequat mi id, placerat sem.",
                'thumbnail' => "beer1.jpg",
                'type' => "beer",
                'price' => "2.39",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => "Beer2",
                'body' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis mi congue, imperdiet nulla non, egestas magna. Phasellus posuere mauris venenatis urna euismod malesuada. Duis pharetra diam eu egestas auctor. Donec efficitur et libero ac vehicula. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris magna nibh, pharetra vel tincidunt a, efficitur a eros. Donec posuere quam a tellus posuere ultricies. Aenean scelerisque, libero id mattis ornare, neque tortor congue magna, et tempus sapien ligula quis sem. Etiam metus justo, scelerisque quis lobortis sed, dignissim sit amet eros. Aliquam a odio et augue euismod interdum vitae nec enim. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque nec ipsum velit. Aliquam dignissim hendrerit massa et faucibus. Etiam et est vitae quam tempus mattis. Proin sed bibendum massa, non tristique orci. Mauris quis nibh dapibus, consequat mi id, placerat sem.",
                'thumbnail' => "beer2.jpg",
                'type' => "beer",
                'price' => "2.39",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => "Burger1",
                'body' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis mi congue, imperdiet nulla non, egestas magna. Phasellus posuere mauris venenatis urna euismod malesuada. Duis pharetra diam eu egestas auctor. Donec efficitur et libero ac vehicula. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris magna nibh, pharetra vel tincidunt a, efficitur a eros. Donec posuere quam a tellus posuere ultricies. Aenean scelerisque, libero id mattis ornare, neque tortor congue magna, et tempus sapien ligula quis sem. Etiam metus justo, scelerisque quis lobortis sed, dignissim sit amet eros. Aliquam a odio et augue euismod interdum vitae nec enim. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque nec ipsum velit. Aliquam dignissim hendrerit massa et faucibus. Etiam et est vitae quam tempus mattis. Proin sed bibendum massa, non tristique orci. Mauris quis nibh dapibus, consequat mi id, placerat sem.",
                'thumbnail' => "burger1.jpg",
                'type' => "burger",
                'price' => "2.39",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => "Burger2",
                'body' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis mi congue, imperdiet nulla non, egestas magna. Phasellus posuere mauris venenatis urna euismod malesuada. Duis pharetra diam eu egestas auctor. Donec efficitur et libero ac vehicula. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris magna nibh, pharetra vel tincidunt a, efficitur a eros. Donec posuere quam a tellus posuere ultricies. Aenean scelerisque, libero id mattis ornare, neque tortor congue magna, et tempus sapien ligula quis sem. Etiam metus justo, scelerisque quis lobortis sed, dignissim sit amet eros. Aliquam a odio et augue euismod interdum vitae nec enim. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque nec ipsum velit. Aliquam dignissim hendrerit massa et faucibus. Etiam et est vitae quam tempus mattis. Proin sed bibendum massa, non tristique orci. Mauris quis nibh dapibus, consequat mi id, placerat sem.",
                'thumbnail' => "burger2.jpg",
                'type' => "burger",
                'price' => "2.39",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => "Pasta1",
                'body' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis mi congue, imperdiet nulla non, egestas magna. Phasellus posuere mauris venenatis urna euismod malesuada. Duis pharetra diam eu egestas auctor. Donec efficitur et libero ac vehicula. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris magna nibh, pharetra vel tincidunt a, efficitur a eros. Donec posuere quam a tellus posuere ultricies. Aenean scelerisque, libero id mattis ornare, neque tortor congue magna, et tempus sapien ligula quis sem. Etiam metus justo, scelerisque quis lobortis sed, dignissim sit amet eros. Aliquam a odio et augue euismod interdum vitae nec enim. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque nec ipsum velit. Aliquam dignissim hendrerit massa et faucibus. Etiam et est vitae quam tempus mattis. Proin sed bibendum massa, non tristique orci. Mauris quis nibh dapibus, consequat mi id, placerat sem.",
                'thumbnail' => "pasta1.jpg",
                'type' => "pasta",
                'price' => "2.39",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => "Pasta2",
                'body' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis mi congue, imperdiet nulla non, egestas magna. Phasellus posuere mauris venenatis urna euismod malesuada. Duis pharetra diam eu egestas auctor. Donec efficitur et libero ac vehicula. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris magna nibh, pharetra vel tincidunt a, efficitur a eros. Donec posuere quam a tellus posuere ultricies. Aenean scelerisque, libero id mattis ornare, neque tortor congue magna, et tempus sapien ligula quis sem. Etiam metus justo, scelerisque quis lobortis sed, dignissim sit amet eros. Aliquam a odio et augue euismod interdum vitae nec enim. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque nec ipsum velit. Aliquam dignissim hendrerit massa et faucibus. Etiam et est vitae quam tempus mattis. Proin sed bibendum massa, non tristique orci. Mauris quis nibh dapibus, consequat mi id, placerat sem.",
                'thumbnail' => "pasta2.jpg",
                'type' => "pasta",
                'price' => "2.39",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => "Pasta3",
                'body' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis mi congue, imperdiet nulla non, egestas magna. Phasellus posuere mauris venenatis urna euismod malesuada. Duis pharetra diam eu egestas auctor. Donec efficitur et libero ac vehicula. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris magna nibh, pharetra vel tincidunt a, efficitur a eros. Donec posuere quam a tellus posuere ultricies. Aenean scelerisque, libero id mattis ornare, neque tortor congue magna, et tempus sapien ligula quis sem. Etiam metus justo, scelerisque quis lobortis sed, dignissim sit amet eros. Aliquam a odio et augue euismod interdum vitae nec enim. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque nec ipsum velit. Aliquam dignissim hendrerit massa et faucibus. Etiam et est vitae quam tempus mattis. Proin sed bibendum massa, non tristique orci. Mauris quis nibh dapibus, consequat mi id, placerat sem.",
                'thumbnail' => "pasta3.jpg",
                'type' => "pasta",
                'price' => "2.39",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]

    );
    }
}
