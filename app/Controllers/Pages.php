<?php

namespace App\Controllers;
use \App\Models\ModelsTodo;

class Pages extends BaseController
{
    protected $modelstodo;
    public $appName = "TODO";
    public $url = "http://localhost:8080";

    public function __construct()
    {
        $this->modelstodo = new ModelsTodo();
    }

    public function index()
    {
        $data = [
            'title' => $this->appName . ' | Home',
            'todo' => $this->modelstodo->getTodo(),
            'countTodo' => $this->modelstodo->countTodo(),
            'countComplete' => $this->modelstodo->countComplete(),
            'date_now' => $this->modelstodo->getDate()
        ];
        return view('index', $data);
    }

    public function add()
    {
        $data = [
            'title' => $this->appName . ' | Add',
            'countTodo' => $this->modelstodo->countTodo(),
            'countComplete' => $this->modelstodo->countComplete()
        ];
        return view('add', $data);
    }

    public function save()
    {
        $this->modelstodo->save([
            'title' => $this->request->getVar('title'),
            'desc' => $this->request->getVar('desc'),
            'time' => $this->request->getVar('date')
        ]);

        session()->setFlashdata('msg', 'Data berhasil ditambahkan');

        return redirect()->to($this->url.'/');
    }
    
    public function remove()
    {
        $data = [
            'title' => $this->appName . ' | Remove',
            'todo' => $this->modelstodo->getTodo(),
            'countTodo' => $this->modelstodo->countTodo(),
            'countComplete' => $this->modelstodo->countComplete(),
            'date_now' => $this->modelstodo->getDate()
        ];
        return view('remove', $data);
    }

    public function delete($id)
    {
        $this->modelstodo->delete($id);

        session()->setFlashdata('msg', 'Data berhasil dihapus');

        return redirect()->to($this->url.'/remove');
    }
}
