<?php

namespace App\Controllers;

class bhaskara extends BaseController
{
    public function ler()
    {
        $bhaskaraModel = new \App\Models\BhaskaraModel();
 
        $todos = $bhaskaraModel->findAll();
 
        foreach ($todos as $key => $linha) {
            $todos[$key]['delete'] = '<a href="delete/' . $linha['id'] . '"> DELETAR </a>' ;
            $todos[$key]['update'] = '<a href="formupdate/' . $linha['id'] . '"> ATUALIZAR </a>' ;
        }

        $data['tabela'] = $todos;
        echo view('formList', $data);
    }

    public function delta()
    {
        $this->delta = $this->b * $this->b - (4 * $this->a * $this->c);
    }

    public function x1()
    {
        $this->x1 = (-$this->b + sqrt($this->delta)) / (2 * $this->a);
    }

    public function x2()
    {
        $this->x2 = (-$this->b - sqrt($this->delta)) / (2 * $this->a);
    }
 
    public function insert()
    {
        if(isset($this->request->getPost()['id'])) {
            $id = $this->request->getPost()['id'];
        } else {
            $id = FALSE;
        }

        $bhaskaraModel = new \App\Models\bhaskaraModel();

        $this->a = $this->request->getPost()['a'];
        $this->b = $this->request->getPost()['b'];
        $this->c = $this->request->getPost()['c'];
        $this->delta = null;
        $this->x1 = null;
        $this->x2 = null;

        $this->delta();
        $this->x1();
        $this->x2();

        $data = [
            'a' => $this->a,
            'b' => $this->b,
            'c' => $this->c,
            'delta' => $this->delta,
            'x1' => $this->x1,
            'x2' => $this->x2
            ];

        if($id != FALSE) {
            $data['id'] = $id;
        }

        $result = $bhaskaraModel->save($data);

        var_dump($result);
    }

    public function update($id = FALSE)
    {
        if(isset($this->request->getPost()['id'])) {
            $id = $this->request->getPost()['id'];
        } else {
            $id = FALSE;
        }

        $bhaskaraModel = new \App\Models\bhaskaraModel();

        $this->a = $this->request->getPost()['a'];
        $this->b = $this->request->getPost()['b'];
        $this->c = $this->request->getPost()['c'];
        $this->delta = null;
        $this->x1 = null;
        $this->x2 = null;

        $this->delta();
        $this->x1();
        $this->x2();

        $data = [
            'a' => $this->a,
            'b' => $this->b,
            'c' => $this->c,
            'delta' => $this->delta,
            'x1' => $this->x1,
            'x2' => $this->x2
            ];

        if($id != FALSE) {
            $data['id'] = $id;
        }

        $result = $bhaskaraModel->save($data);

        var_dump($result);
    }

    public function delete($id = FALSE)
    {
        $bhaskaraModel = new \App\Models\BhaskaraModel();
		
		$bhaskaraModel->delete($id);
		
		return redirect()->back();
    }

    public function forminsert()
    {
        echo view('formInsert');
    }

    public function formupdate($id = null)
    {
        $bhaskaraModel = new \App\Models\BhaskaraModel();

        $select = $bhaskaraModel->find($id);

        $data['edit'] = $select;
        echo view('formUpdate', $data);
    }
}
