<?php namespace App\Helpers;

use App\Helpers\Menu;

class Layout {
    public function get_layout($page = 'home'){
        $header = [];
        $footer = [];
        $_data = [];
        $data = [];

        $header['title'] = ucfirst($page); // Capitalize the first letter
        if($page == 'home'){
            $header['title'] = 'Activity Control Panel';
        }
        $data = $header;

        $menu = new Menu();
        $header['menu'] = $menu->getMenu($page);
        $header['style'] = '';
        if ( file_exists(ROOTPATH.'public/assets/css/'.$page.'.css')){
            $_data['style'] = $page.'.css';
            $header['style'] = view('templates/style',$_data);
        }
        
        
        $footer['script'] = '';
        if ( file_exists(ROOTPATH.'public/assets/js/'.$page.'.js')){
            $_data['script'] = $page.'.js';
            $footer['script'] = view('templates/script',$_data);
        }


        echo view('templates/header', $header);
        echo view('pages/'.$page, $data);
        echo view('templates/footer', $footer);
    }
}