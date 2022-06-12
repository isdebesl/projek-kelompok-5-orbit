<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
         $data =[
            'title'=> 'Fine Candi',
            'validation'=> \Config\Services::validation()
        ];
        return view('index', $data);
    }
    public function save(){
        // dd($this->request->getVar());

        // Validasi input
        if(!$this->validate([
            'pro_image' =>[
                'rules' => 'max_size[pro_image,3075]|is_image[pro_image]|mime_in[pro_image,image/jpg,image/jpeg,image/png]',
                'errors'=> [
                    'max_size'=> 'Ukuran gambar tidak boleh lebih dari 3Mb',
                    'is_image'=> 'Yang anda pilih bukan Image',
                    'mime_in'=> 'Masukan Image jpg/jpeg/png'
                ]
            ]

        ])){
            return redirect()->to(base_url('index'))->withInput();
        }
        // Kelola image
        $fileImage = $this->request->getFile('pro_image');
        // Cek gambar ada apa tidak
        if($fileImage->getError() == 4){
            $namaImage = 'default.jpg';
        } else{
            $namaImage = $fileImage->getRandomName();
            $fileImage->move('assets/img/portfolio',$namaImage);
        }
        // $namaImage = $fileImage->getName();

        // $this->ProductModel->save([
        //     'pro_image'=>$namaImage,
        // ]);
        session()->setFlashdata('Pesan','Pencarian Berhasil~');
       
       return view('index');
    }
}