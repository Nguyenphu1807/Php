<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
//    return 'Welcome to laravel by Nguyen Trieu Phu';
});

Route::get('home','HomeController@showWelcome');
Route::get('about','AboutController@showdetail');
Route::get('product', 'ProductController@showProduct');

//Route::get('about',function (){
//    return 'About Content';
//});

Route::get('about/{theSubject}', 'AboutController@showSubject');

Route::get('about/directions',array('as' => 'directions', function (){
    $theURL = URL::route('directions');
    return "Directions go to this URL: $theURL";
}));
Route::any('submit-form',function (){
   return 'Process Form';
});

//Route::get('about/{theSubject}',function ($theSubject){
//    return $theSubject. ' content goes here ';
//});

Route::get('about/classes{theSubject}',function ($theSubject){
    return 'Content on $theSubject';
});

Route::get('about/classes{theArt}/{thePrice}',function ($theArt, $thePrice){
    return "The product in: $theArt and $thePrice";
});

//Route::get('/insert',function (){
//   DB::insert('insert into post(title,body) values(?,?)',['PHP with Laravel','Laravel is the best framework !']);
//    return 'DONE';
//});

Route::get('where',function (){
   return Redirect::route('directions');
});




// bài thi ở đây nha cô : ))

   Route::get('/read',function (){
      // 1. Danh sách sản phẩm: tên, giá, hình ảnh
       $result = DB::select('select * from test where id = ?',[1]);
//      return $result;
       foreach ($result as $post){
           return $post->name;
//           return $post->price;
//           return $post->img;
       }
   });



Route::get('/insert',function (){
   // 2. Thêm sản phẩm: tên, giá, đường dẫn hình ảnh
    DB::insert('insert into test(id,name,price,img) values(?,?,?,?)',['1','Mac book','23.000.000','https://uscom.vn/macbook-air-13-inch-256gb-silver-mwtk2-2020?gclid=EAIaIQobChMIs7XtkbvM6gIVkraWCh0NJQysEAQYAiABEgJkrPD_BwE']);
    DB::insert('insert into test(id,name,price,img) values(?,?,?,?)',['2','Mac book pro','51.000.000','https://uscom.vn/macbook-pro-16-inch-512gb-space-gray-mvvj2-2019?gclid=EAIaIQobChMI24aBtbvM6gIVzG4qCh0Jew6BEAQYBSABEgLNd_D_BwE']);
    DB::insert('insert into test(id,name,price,img) values(?,?,?,?)',['3','Dell pro','53.000.000','https://compumax.com.vn/laptop/dell-xps-13-7390-i5-10210u-8gb-256ss-13.3fhd-w10-finger-silver.html?gclid=EAIaIQobChMIuLDst8zM6gIV-NVMAh1cTgPbEAQYAiABEgLGEPD_BwE']);
    return 'DONE';
});




Route::get('/update',function (){
    // 3. Chỉnh sửa sản phẩm: tên, giá, đường dẫn hình ảnh
    $update=DB::update ('update test set name = "Dell", price="21.000.000",img = "https://compumax.com.vn/laptop/dell-xps-13-7390-i5-10210u-8gb-256ss-13.3fhd-w10-finger-silver.html?gclid=EAIaIQobChMIuLDst8zM6gIV-NVMAh1cTgPbEAQYAiABEgLGEPD_BwE" where id = 1');
    $update=DB::update ('update test set name = "HP", price="17.000.000",img = "https://gianguyenstore.vn/hp-envy-13-like-new?gclid=EAIaIQobChMIvqqJ_s_M6gIVzdeWCh3EQgg5EAYYCSABEgJdFfD_BwE" where id = 2');
    return 'DONE';
});


Route::get('/search',function (){
    // 4. Tìm sản phẩm: theo id
    $result = DB::select('select * from test where id LIKE 2' );
      return $result;
});
Route::get('/search',function (){
    // 4. Tìm sản phẩm: theo tên
    $result = DB::select('select * from test where name LIKE '%Dell%'');
    return $result;
});


Route::get('/delete',function (){
    // 5 . xóa sản phẩm theo id sản phẩm
    $delete = DB::delete('delete from test where id = ?',[3]);
    return $delete;
});
