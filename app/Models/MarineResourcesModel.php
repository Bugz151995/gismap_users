<?php 

namespace App\Models;

use CodeIgniter\Model;

class MarineResourcesModel extends Model {
    protected $table      = 'marine_resources_tbl';
    protected $primaryKey = 'marine_resources_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        'location_name', 'scientific_name', 'local_name', 'location_id'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function getMarines($slug = false)
    {
        if($slug !== false)
            return $this->join('location_tbl', 'location_tbl.location_id = marine_resources_tbl.location_id', 'left')->find($slug);

        return $this->join('location_tbl', 'location_tbl.location_id = marine_resources_tbl.location_id', 'left')->findAll();
    }
}