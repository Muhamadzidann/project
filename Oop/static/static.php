<?php
// class web {
//     public static $title = "my page";

//     public function changeTitle ()  {
//         self :: $title = 'my page2';
//         return self::$title;
//     }
//          public function changeTitle2() {
//          return self::$title  ;
//     }
// }

// class yourWeb extends Web {
//     public function changeTitle(){
//      self::$title = 'your page';
//      return self::$title;

//     }
// }

// echo web::$title . "<br>";
// $myweb = new Web;
// echo $myweb->changeTitle() . "<br>" .
// $myweb->changeTitle2();
//  echo "<br>";
// $yourweb = new Yourweb;
// echo $yourweb->changeTitle() . "<br>" .
// $myweb -> changeTitle2();

// class web {
//     public static $title = "frist page";

//     public static function getTitlePage() {
//         return "nama halaman ini adalah '" . self::$title .
//         "'";}
//     }

// echo web::$title;
// echo "<br>";
// echo web::getTitlePage();
// 
// class Web {
//     protected static $title = "First Page";
//     public static function getTitlePage() {
//     echo "Nama Halaman ini adalah '" . self::$title . 
//     "'";}
//     }
//     class OtherWeb extends web {
//     public function __construct() {
//     Web::getTitlePage();
//     }
//     public function getTitle() {
//     return Web::$title;
//     }
//     }
//     $otherweb = new OtherWeb;
//     echo "<br>";
//     echo $otherweb->getTitle();
// class Web {
//     protected static $title = "First Page";

//     protected static function getTitlePage() {
//         echo "Nama Halaman '" . self::$title . "'";
//     }
// }

// class OtherWeb2 extends Web {
//     public function __construct(){
//         Web::getTitlePage();
//     }
// }

// new OtherWeb2();

// abstract class AlatElektronik {
//     abstract public function lihat_spec();
//     public static function hidupkan_komputer(){
//         echo "hidupkan komputer";
//     }
// }

// class Laptop extends AlatElektronik{
//     public function lihat_spec(){
//         return "Lihat Spec Laptop...";
//     }
//     public function beli_laptop(){
//         return "beli laptop...";
//     }
// }
// class Handphone extends AlatElektronik{
//     public function lihat_spec(){
//         return "lihat spec hp...";
//     }
// }

// $laptop_baru= new Laptop();
// echo $laptop_baru->lihat_spec();
// echo "<br/>";
// echo $laptop_baru->beli_laptop();
// echo "<br>";   
