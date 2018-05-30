<?php
namespace App\Models;

use CodeIgniter\Model;

class Menu_Model extends Model {
    //put your code here
    
    protected $table      = 'menu';
    protected $primaryKey = 'id';

    protected $allowedFields = ['name', 'link', 'label', 'order', 'situation_id', 'root'];

    protected $useTimestamps = false;

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function __construct() {
        parent::__construct();
        
        $db = \Config\Database::connect();
    }

}