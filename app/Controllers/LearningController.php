<?php

namespace App\Controllers;

use App\Models\Learning;
use App\Controllers\BaseController;

class LearningController extends BaseController
{

    protected $learningModel;

    public function __construct()
    {
        $this->learningModel = new Learning();
    }


    public function index()
    {
        $data = [
            'title' => 'Learning',
            'data' => $this->learningModel->getData()
        ];
        return view('learning/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Add Data',
        ];
        return view('learning/create', $data);
    }

    public function store()
    {
        $data = [
            'learning_topic' => $this->request->getPost('learning_topic'),
            'topic_category' => $this->request->getPost('topic_category'),
            'learning_category' => $this->request->getPost('learning_category'),
            'organizer' => $this->request->getPost('organizer'),
            'schedule' => $this->request->getPost('schedule'),
            'location' => $this->request->getPost('location'),
        ];

        $this->learningModel->insertData($data);
        session()->setFlashdata('status', 'Data successfully added');
        return redirect()->to('learning');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Data',
            'data' => $this->learningModel->getDataById($id)
        ];
        return view('learning/edit', $data);
    }

    public function update($id)
    {

        $data = [
            'learning_topic' => $this->request->getPost('learning_topic'),
            'topic_category' => $this->request->getPost('topic_category'),
            'learning_category' => $this->request->getPost('learning_category'),
            'organizer' => $this->request->getPost('organizer'),
            'schedule' => $this->request->getPost('schedule'),
            'location' => $this->request->getPost('location'),
        ];

        $this->learningModel->updateData($id, $data);
        session()->setFlashdata('status', 'Data successfully updated');
        return redirect()->to('learning');
    }

    public function delete($id)
    {
        $this->learningModel->deleteData($id);
        session()->setFlashdata('status', 'Data successfully deleted');
        return redirect()->to('learning');
    }
}
