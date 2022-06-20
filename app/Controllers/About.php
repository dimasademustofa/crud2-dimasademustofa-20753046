<?php

namespace App\Controllers;
use App\Models\DataDiri;
class About extends BaseController
{
	public function __construct()
	{
		$this->data = new DataDiri();
	}	
    public function index()
    {
        echo view('CV', [
        	'data' => $this->data->first()]);
    }
    function add()
    {
    	echo view('add', [
    		'data'=> $this->data->findAll()]);
    }
    function simpan()
    {
    	$this->data->save(
    	 [
                'npm' => $this->request->getVar('npm'),
                'nama' => $this->request->getVar('nama'),
                'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
                'alamat' => $this->request->getVar('alamat'),
                'gol_darah' => $this->request->getVar('gol_darah'),
                'agama' => $this->request->getVar('agama'),
                'email' => $this->request->getVar('email'),
                'notlp' => $this->request->getVar('notlp'),
                'hobi' => $this->request->getVar('hobi'),
            ]);
            return redirect()->to('/about');
    }
    function delete($npm) {
        $this->data->delete($npm);
        return redirect()->to('/about');
    }
    function get_edit($npm) {
        $result =  $this->data->where(['npm' => $npm])->get();
        if ($result->getNumRows() > 0) {
            $i = $result->getRowArray();
            $data = [
                'npm' => $i['npm'],
                'nama' => $i['nama'],
                'jenis_kelamin' => $i['jenis_kelamin'],
                'alamat' => $i['alamat'],
                'gol_darah' => $i['gol_darah'],
                'agama' => $i['agama'],
                'email' => $i['email'],
                'notlp' => $i['notlp'],
                'hobi' => $i['hobi'],
            ];
            return view('edit', $data);
        } else {
            echo "Data Was Not Found";
        }
    }
    function update() {
        $this->data->save([
             	'npm' => $this->request->getVar('npm'),
                'nama' => $this->request->getVar('nama'),
                'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
                'alamat' => $this->request->getVar('alamat'),
                'gol_darah' => $this->request->getVar('gol_darah'),
                'agama' => $this->request->getVar('agama'),
                'email' => $this->request->getVar('email'),
                'notlp' => $this->request->getVar('notlp'),
                'hobi' => $this->request->getVar('hobi'),
        ]);
        return redirect()->to('/about');
    }
}