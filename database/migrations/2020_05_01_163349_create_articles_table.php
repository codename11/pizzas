<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();

            $table->string("title");
            $table->mediumText("body");
            $table->string("thumbnail");
            $table->string("type");
            
            $table->timestamps();
        });

        $articles = [
            [
                "title" => "Italien pizza",
                "body" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis mi congue, imperdiet nulla non, egestas magna. Phasellus posuere mauris venenatis urna euismod malesuada. Duis pharetra diam eu egestas auctor. Donec efficitur et libero ac vehicula. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris magna nibh, pharetra vel tincidunt a, efficitur a eros. Donec posuere quam a tellus posuere ultricies. Aenean scelerisque, libero id mattis ornare, neque tortor congue magna, et tempus sapien ligula quis sem. Etiam metus justo, scelerisque quis lobortis sed, dignissim sit amet eros. Aliquam a odio et augue euismod interdum vitae nec enim. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque nec ipsum velit. Aliquam dignissim hendrerit massa et faucibus. Etiam et est vitae quam tempus mattis. Proin sed bibendum massa, non tristique orci. Mauris quis nibh dapibus, consequat mi id, placerat sem.",
                "thumbnail" => "pizza1.jpg",
                "type" => "pizza",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "title" => "Greek pizza",
                "body" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum arcu nisi, dictum at mattis eget, dapibus vitae dui. Nunc bibendum, turpis a ullamcorper laoreet, felis sapien ultricies dolor, vehicula malesuada ipsum nulla et mi. Fusce vitae elit tincidunt, sodales nunc sed, posuere ipsum. In tortor magna, sagittis dictum libero sed, vehicula ultrices orci. Praesent blandit nulla non nunc aliquet, eu eleifend ex mollis. Ut sed arcu nec est auctor elementum id ut purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris auctor lacus a leo eleifend, eget commodo neque ultrices. Suspendisse vitae feugiat ante. Proin porttitor dapibus turpis, et ornare urna maximus et. Morbi nec urna et tellus varius volutpat sed a est. Pellentesque condimentum tortor ac diam euismod, vel aliquet leo sodales.",
                "thumbnail" => "pizza2.jpg",
                "type" => "pizza",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "title" => "Spanish pizza",
                "body" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum gravida velit eget placerat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent at nunc porttitor, imperdiet nisl ut, convallis erat. Nullam id eros et est ultricies euismod. Nunc facilisis finibus lacus quis aliquam. Ut tempor ac erat a rhoncus. Nunc sed feugiat quam. Morbi fermentum odio sit amet leo blandit aliquam. Sed egestas ullamcorper quam nec blandit. Sed sodales ex nunc, ut lobortis orci mattis non. Vivamus libero lorem, pulvinar non odio in, varius scelerisque sem.",
                "thumbnail" => "pizza3.jpg",
                "type" => "pizza",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "title" => "Serbian pizza",
                "body" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum mauris mollis quam scelerisque, at suscipit massa euismod. Mauris sit amet nisl ac nunc faucibus volutpat in ac sapien. Aenean id magna eu purus fermentum malesuada. Integer pretium lorem lectus, a dignissim nulla ullamcorper at. Suspendisse in dolor orci. Etiam semper eget nulla at imperdiet. In euismod leo et lacus elementum, non dignissim velit consectetur. Donec dapibus varius mauris ac vestibulum. Integer at eros tortor. Morbi eleifend sit amet sem in efficitur.",
                "thumbnail" => "pizza4.jpg",
                "type" => "pizza",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "title" => "Margarita",
                "body" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce aliquet eros ac scelerisque tempus. Aenean mattis ac velit eu tempus. Phasellus egestas dui diam, quis iaculis ligula tempus in. In hac habitasse platea dictumst. Phasellus nec sapien in ligula luctus varius a a nulla. Mauris est mauris, bibendum nec ante non, luctus consequat felis. Nunc vel orci et lorem semper euismod. Suspendisse et arcu lacinia, suscipit eros in, euismod ex. Cras nunc tellus, aliquam sed iaculis sit amet, feugiat sed risus. Vivamus nec enim suscipit nulla mollis posuere. Pellentesque et dui ac tellus luctus facilisis sit amet et lacus.",
                "thumbnail" => "pizza5.jpg",
                "type" => "pizza",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "title" => "Capricoza",
                "body" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet ipsum ut ex mollis placerat id egestas mauris. Quisque pretium mauris id tincidunt tempus. Proin eget sem lectus. Cras magna velit, ornare vel mauris in, iaculis feugiat erat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam erat volutpat. Maecenas sagittis hendrerit dui, vel cursus mauris egestas aliquam. Nullam id nibh ut dui tempus hendrerit ut nec turpis. Sed maximus congue tristique. Cras et gravida sapien.",
                "thumbnail" => "pizza6.jpg",
                "type" => "pizza",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "title" => "Hawaian pizza",
                "body" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lobortis odio a vulputate elementum. Integer semper mattis eros sit amet scelerisque. Suspendisse scelerisque felis in mi imperdiet feugiat. Sed ipsum mauris, dictum in massa vitae, molestie facilisis leo. Pellentesque non justo maximus, pretium nisi at, placerat dui. Maecenas sagittis porta congue. Duis sed porttitor nisl. Donec cursus nisl id sodales consectetur. Aenean iaculis, nisl eu egestas blandit, arcu dui laoreet dolor, sit amet luctus leo nisi et arcu. In ultricies in erat ac vestibulum. Nullam elementum nunc nec finibus suscipit. In hac habitasse platea dictumst. Sed dapibus ligula sit amet orci vulputate, eget ultricies ante luctus. Nulla ultrices purus eu tellus posuere, in luctus felis bibendum.",
                "thumbnail" => "pizza7.jpg",
                "type" => "pizza",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "title" => "Sweet pizza",
                "body" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tempor pellentesque est, interdum lobortis diam dictum id. Maecenas aliquam ante ut eleifend egestas. Fusce varius ante et felis rhoncus laoreet. Praesent ut commodo leo. Sed et ante id magna hendrerit posuere id vel tortor. Proin non elit nec lorem hendrerit vulputate. Quisque mauris nibh, auctor a dapibus quis, pharetra non sapien. Phasellus ac magna et elit faucibus suscipit. Phasellus suscipit nibh a venenatis rhoncus. Integer vel euismod magna. Donec quis sem congue, pharetra lorem quis, pulvinar sem. Sed sed ultricies mauris, ullamcorper tempor sapien. Duis leo ante, rhoncus sed commodo sit amet, malesuada ac purus. Cras condimentum aliquam mauris, et ultricies odio rutrum ut. Donec non accumsan nunc, vel dapibus lacus. Proin efficitur sapien vel libero porttitor, et rutrum purus sodales.",
                "thumbnail" => "pizza8.jpg",
                "type" => "pizza",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "title" => "Beer1",
                "body" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non lorem a neque sodales imperdiet. Mauris porta, nunc iaculis imperdiet ornare, ante magna varius ex, non malesuada ante leo sed dui. Donec a nibh sit amet nunc tempor blandit ac sed magna. Integer ac erat est. Aenean arcu nulla, congue et neque nec, vehicula sagittis nisl. Fusce mattis, nisi sit amet pulvinar hendrerit, lorem augue vehicula dui, in bibendum augue risus at orci. Morbi ipsum dui, molestie at augue facilisis, consectetur finibus leo. Ut sed nunc mi. Donec eu mauris sagittis, venenatis dui eu, tincidunt ex. Nunc nisl orci, dapibus non sem quis, pharetra volutpat metus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin dui tortor, dapibus eget arcu facilisis, vehicula laoreet orci. Fusce ante orci, aliquam et aliquam ac, eleifend ut massa.",
                "thumbnail" => "beer1.jpg",
                "type" => "drink",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "title" => "Beer2",
                "body" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut volutpat, metus at finibus suscipit, massa sapien efficitur mi, ac congue metus ligula at nunc. Nulla molestie tortor non tortor pretium gravida. Etiam ipsum lorem, commodo sit amet vestibulum ac, blandit id augue. In aliquam orci a magna luctus feugiat. Nullam rhoncus, neque ut congue consectetur, lorem ex viverra turpis, nec facilisis augue mauris interdum ex. Donec a viverra lacus. Quisque metus lorem, convallis sed turpis quis, condimentum accumsan ante. Suspendisse pulvinar enim non volutpat vulputate. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Cras placerat tellus arcu, ut elementum turpis molestie id. Aenean odio ex, dapibus id augue ullamcorper, egestas finibus ex. Duis tristique sapien lorem, placerat bibendum turpis tempor sit amet. Mauris tincidunt laoreet orci sit amet ultrices. Morbi vitae vestibulum massa, vitae finibus metus.",
                "thumbnail" => "beer2.jpg",
                "type" => "drink",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "title" => "Burger1",
                "body" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eu mi enim. Morbi suscipit porttitor enim in molestie. Quisque dignissim nulla id nunc scelerisque interdum. Quisque imperdiet lobortis consectetur. Fusce arcu turpis, ultrices vitae fermentum at, porta faucibus ex. Etiam nec ipsum et neque vestibulum tristique. Morbi in convallis lectus, et fermentum sem.",
                "thumbnail" => "burger1.jpg",
                "type" => "burger",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "title" => "Burger2",
                "body" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur massa dui, vestibulum eget ex at, luctus faucibus orci. Donec eu consectetur justo. Aenean a nulla a nunc pharetra luctus. Suspendisse pharetra viverra felis sed pharetra. Sed tincidunt sem vel ultrices dictum. Nullam a commodo orci. Praesent faucibus odio a aliquam cursus. Sed dui ligula, fringilla quis lectus eget, dapibus pellentesque velit. Fusce ut metus vitae eros placerat fringilla ac quis elit.",
                "thumbnail" => "burger2.jpg",
                "type" => "burger",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "title" => "Pasta1",
                "body" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet tincidunt commodo. Mauris sit amet rutrum ipsum. In non commodo ante, vel dapibus nisi. Duis auctor, risus in molestie pretium, augue ante dapibus nisl, nec ultrices purus nisl rutrum felis. Vivamus blandit bibendum porttitor. Mauris cursus accumsan augue, id dictum sem sollicitudin et. Nullam maximus turpis lacus, et tincidunt elit pellentesque eu.",
                "thumbnail" => "pasta1.jpg",
                "type" => "pasta",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "title" => "Pasta2",
                "body" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ornare enim eu sapien pretium, vitae euismod ex gravida. Aenean id sem elementum, pharetra lectus eu, fermentum magna. Proin nec purus lacus. Praesent erat metus, sollicitudin quis quam eu, faucibus posuere lectus. Praesent at rutrum leo, non hendrerit orci. Donec non feugiat lorem, et vestibulum leo. Ut sollicitudin, libero et tempor blandit, dui diam dapibus velit, et venenatis justo urna vel nunc. Vivamus vestibulum commodo arcu. Cras vehicula laoreet felis, vel pretium orci euismod sed. Sed id hendrerit metus. Pellentesque dictum rutrum diam non auctor.",
                "thumbnail" => "pasta2.jpg",
                "type" => "pasta",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "title" => "Pasta3",
                "body" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas elementum, sem id efficitur lobortis, odio lorem facilisis nisl, vel maximus nibh mauris id ex. Maecenas sit amet libero luctus tortor congue posuere. In at augue pretium, iaculis metus sit amet, blandit risus. Duis porttitor magna vel mi mattis, id finibus justo feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis ligula urna. Proin aliquam semper malesuada. Praesent quis tempus nisi, non mattis mauris. Praesent nunc elit, varius eu sapien sit amet, convallis interdum augue. Donec posuere, arcu vel fermentum gravida, dui ante mattis magna, non feugiat lorem libero ac leo. Vivamus arcu arcu, fringilla ut dolor eget, sagittis sagittis mi. Aenean id aliquet est. Duis eget elit ut urna accumsan ornare sit amet in tellus.",
                "thumbnail" => "pasta3.jpg",
                "type" => "pasta",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ];
        DB::table('articles')->insert($articles);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
