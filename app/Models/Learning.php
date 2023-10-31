<?php

namespace App\Models;

use CodeIgniter\Model;

class Learning extends Model
{
    protected $table            = 'learning';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $allowedFields    = ['learning_topic', 'topic_category', 'learning_category', 'organizer', 'schedule', 'location'];
    protected $useTimestamps    = true;

    public function getData()
    {
        return $this->findAll();
    }

    public function getDataById($id)
    {
        return $this->where(['id' => $id])->first();
    }

    public function insertData($data)
    {
        return $this->save($data);
    }

    public function updateData($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deleteData($id)
    {
        $learning = $this->find($id);
        return $this->delete($id);
    }
}
