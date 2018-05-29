<?php namespace App\Controllers;

use CodeIgniter\Controller;
class Pages extends Controller {

    public function view($page = 'home')
    {
        if( empty($page) ){
            $page = 'home';
        }
        if ( ! file_exists(APPPATH.'/Views/pages/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }
        
        $data['title'] = ucfirst($page); // Capitalize the first letter
        if($page == 'home'){
            $data['title'] = 'Activity Control Panel';
        }

        echo view('templates/header', $data);
        echo view('pages/'.$page, $data);
        echo view('templates/footer', $data);
    }
}