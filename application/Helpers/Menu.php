<?php namespace App\Helpers;

use App\Models\Menu_Model;

class Menu {
    private $menu_items = [];
    private $Menu_Model;

    public function __construct(){
        $this->Menu_Model = new Menu_Model();
    }
    public function getMenu($page=''){
        $menu_items = $this->Menu_Model->orderBy('order', 'asc')->findWhere([
            'situation_id'  => 1,
            'root' => 0
        ]);

        foreach($menu_items as $key=> $value){
            $data['link'] = base_url() . $value['link'];
            $data['name'] = $value['label'];
            $data['active'] = '';
            if($page == $value['name']){
                $data['active'] = 'active';
            }
            
            array_push($this->menu_items,view('templates/menu_item',$data));
        }

        $_data['menu_items'] = $this->getItems();
        return view('templates/menu',$_data);
    }
    private function getItems(){
        $separator = '';
        //$separator = view('templates/menu_separator');
        return join($separator,$this->menu_items);
    }
}