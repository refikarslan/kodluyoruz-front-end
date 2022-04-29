<?php
//recursive function
/*function sayi($i){
    echo $i;
    if ($i < 5){
        $i++;
        sayi($i);
    }
}
sayi(1);
*/


$categories =[
    [
      'id' => 1,
      'parent' =>0,
      'name' => 'Back-End Teknolojileri'
    ],
    [
        'id' =>2,
        'parent' =>0,
        'name'=>'Front-End Teknolojileri'
    ],
    [
        'id' =>3,
        'parent' =>0,
        'name' =>'Mobil Uygulama'
    ],
    [
        'id' =>4,
        'parent' =>1,
        'name' =>'PHP'
    ],
    [
        'id' =>5,
        'parent' =>1,
        'name' =>'NodeJS'
    ],
    [
        'id' =>6,
        'parent' =>4,
        'name' =>'Laravel'
    ],
    [
        'id' =>7,
        'parent' =>4,
        'name' =>'Codeigniter'
    ],
    [
        'id' =>8,
        'parent' =>2,
        'name' =>'Javascript'
    ],
    [
        'id' =>9,
        'parent' =>8,
        'name' =>'VueJS'
    ],
    [
        'id' =>10,
        'parent' =>8,
        'name' =>'AngularJS'
    ],

];
function categoryList(array $categories,  $parent = 0)
{
    $html = '<ul>';
    foreach ($categories as $category)
        if($category['parent'] == $parent):
            $html .='<li>' .$category['name'];
            $html .= categoryList($categories, $category['id']);
            $html .= '</li>';
            endif;
    $html .='</ul>';
    return $html;
}
echo categoryList($categories);
*/



//global tanımı
/*$isim = 'Şahin';
function isim() {
    global $isim;
    return $isim;
}
echo deneme();



















