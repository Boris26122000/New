<?php
return [
    'catalog' => 'catalog/index',
    'category/([0-9]+)' => 'catalog/category/$1',
    'category/([0-9]+)/([0-9]+)' => 'catalog/category/$1/$2',
    'product/([0-9]+)' => 'product/view/$1',
    'single' => 'single/view',
    'login' => 'login/checkUserForLogin',
    'registration/tryRegistration' => 'registration/tryRegistration/',
    'registration' => 'registration/view/',
    'basket' => 'basket/view/',
    '^$' => 'site/index'

   //'news/([0-9]+)' => 'news/view',
   // 'news' => 'news/index',
];