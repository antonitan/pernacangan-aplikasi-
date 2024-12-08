<?php

namespace App\Controllers;
use CodeIgniter\Controllers;
use App\Models\M_belajar;
class Home extends BaseController
{
        public function index()
        {
            return view('pp');
        }
        public function login()
        {
           
           echo view('pages-login.php');
           echo ('footer');
        }

      public function aksi_login()
{
    $a = $this->request->getPost('email');
    $b = $this->request->getPost('pswd');

    $asc = new M_belajar();
    $data = array(
        "username" => $a,
        "password" => MD5($b)
    );
    $cek = $asc->getWhere('user', $data);
    if ($cek) {
        session()->set([
            'id' => $cek->id_user,
            'u' => $cek->username, 
            'level' => $cek->level,
            'isLoggedIn' => true
        ]);

        return redirect()->to('home/dashboard');
    } else {
        return redirect()->to('home/Login');
    }
}

        public function logout()
        {
            session()->destroy();
            return redirect()->to('home/login');
        }
        public function dashboard()
        {
            if (session()->get('id')>0) {
            echo view('header');
            echo view('menu2');
            echo view('dashboard');
            echo view('footer');
            }else{
                return redirect()->to('home/login');
            }
        }

        public function usr ()
        {
            if (session()->get('level')==1) {
            $Joyce= new M_belajar;
            $Wendy['takdirestui']= $Joyce->tampil('user');
            echo view('header');
            echo view('menu2');
            echo view('reset',$Wendy);
            echo view('footer');
            }else if (session()->get('level')>0) {
                return redirect()->to('home/error');
            }else{
                return redirect()->to('home/login');
            }
        }
        
        public function laundry()
        {
            if (session()->get('level')==1|| session()->get('level')==2) {
            $Joyce= new M_belajar;
            $where=('id_pakaian');
            $Wendy['takdirestui']= $Joyce->tampil('pakaian',$where);
            echo view('header');
            echo view('menu2');
            echo view('pakaian',$Wendy);
            echo view('footer');
            }else if (session()->get('level')>0) {
                return redirect()->to('home/error');
            }else{
                return redirect()->to('home/login');
            }
        }
        public function hapus_pakaian($id) 
        {
            $Joyce= new M_belajar;
            $wece= array('id_pakaian' => $id);
            $Wendy['takdirestui']= $Joyce->hapus('pakaian',$wece);
            return redirect()->to('Home/laundry');
        }
        public function edit_pakaian ($id)
        {
            $Joyce= new M_belajar;
            $wece= array('id_pakaian' => $id);
            $Wendy['takdirestui']= $Joyce->getWhere('pakaian',$wece);
            echo view('header');
            echo view('menu2');
            echo view('edit1',$Wendy);
            echo view('footer');
        }
        function simpan_pakaian()
        {
            $a=$this->request->getpost('nama');
            $b=$this->request->getpost('kode');
            $c=$this->request->getpost('berat');
            $id=$this->request->getpost('idp');
            $Joyce= new M_belajar;
            $wece= array('id_pakaian' => $id);
            $data= array(
                    "nama_pakaian"=>$a,
                    "kode_pakaian"=>$b,
                    "berat"=>$c
                    );

            print_r($data);
            $Joyce->edit('pakaian',$data,$wece);
            return redirect()->to('home/laundry');
        }
        public function userr()
        {
            if (session()->get('level')==1) {
            $Joyce= new M_belajar;
            $where=('id_user');
            $Wendy['takdirestui']= $Joyce->tampil1('user',$where);
            echo view('header');
            echo view('menu2');
            echo view('user',$Wendy);
            echo view('footer');
            }else if (session()->get('level')>0) {
                return redirect()->to('home/error');
            }else{
                return redirect()->to('home/login');
            }
        }

        public function hapus_user($id) 
        {
            $Joyce= new M_belajar;
            $wece= array('id_user' => $id);
            $Wendy['takdirestui']= $Joyce->hapus('user',$wece);
            return redirect()->to('Home/userr');
        }
        public function edit_user ($id)
        {
            $Joyce= new M_belajar;
            $wece= array('id_user' => $id);
            $Wendy['takdirestui']= $Joyce->getWhere('user',$wece);
            echo view('header');
            echo view('menu2');
            echo view('edit4',$Wendy);
            echo view('footer');
        }
        function simpan_user()
        {
            $a=$this->request->getpost('user');
            $b=$this->request->getpost('pw');
            $c=$this->request->getpost('level');
            $id=$this->request->getpost('idu');
            $Joyce= new M_belajar;
            $wece= array('id_user' => $id);
            $data= array(
                    "username"=>$a,
                    "password"=>md5($b),
                    "level"=>$c
                    );

            $Joyce->edit('user',$data,$wece);
            return redirect()->to('home/userr');
        }
        public function tusr()
        {
            $Joyce= new M_belajar;
            $wece= ('id_user');
            $Wendy['takdirestui']= $Joyce->tampil1('user',$wece);
            echo view('header');
            echo view('menu2');
            echo view('tuser',$Wendy);
            echo view('footer');
        }
        public function simpan_tusr()
        {
            $a=$this->request->getpost('user');
            $b=$this->request->getpost('pw');
            $c=$this->request->getpost('level');
            $data= array(
                    "username"=>$a,
                    "password"=>($b),
                    "level"=>$c
            );
            $Joyce=new M_belajar;
            $Joyce->tambah('user',$data);
            return redirect()->to('home/userr');
        }
        
public function karyawan()
        {
            if (session()->get('level')==1) {
            $Joyce= new M_belajar;
            $Wendy['takdirestui']= $Joyce->tampil1('karyawan');
            echo view('header');
            echo view('menu2');
            echo view('karyawan',$Wendy);
            echo view('footer');
            }else if (session()->get('level')>0) {
                return redirect()->to('home/error');
            }else{
                return redirect()->to('home/login');
            }
        }
        public function hapus_karyawan($id) 
        {
            $Joyce= new M_belajar;
            $wece= array('id_karyawan' => $id);
            $Wendy['takdirestui']= $Joyce->hapus('karyawan',$wece);
            return redirect()->to('Home/karyawan');
        }
        public function edit_karyawan ($id)
        {
            $Joyce= new M_belajar;
            $wece= array('id_karyawan' => $id);
            $Wendy['takdirestui']= $Joyce->getWhere('karyawan',$wece);
            echo view('header');
            echo view('menu2');
            echo view('edit4',$Wendy);
            echo view('footer');
        }
        function simpan_karyawan()
        {
            $a=$this->request->getpost('nama');
            $b=$this->request->getpost('nik');
            $c=$this->request->getpost('tempat');
            $d=$this->request->getpost('tanggal');
            $e=$this->request->getpost('jeniskel');
            $f=$this->request->getpost('alamat');
            $g=$this->request->getpost('nohp');
            $id=$this->request->getpost('idky');
            $Joyce= new M_belajar;
            $wece= array('id_karyawan' => $id);
            $data= array(
                    "nama"=>$a,
                    "nik"=>$b,
                    "tempat_lahir"=>$c,
                    "tanggal_lahir"=>$d,
                    "jenis_kelamin"=>$e,
                    "alamat"=>$f,
                    "no_hp"=>$g,
                    );
            $Joyce->edit('karyawan',$data,$wece);
            return redirect()->to('home/karyawan');
        }
        public function tky()
        {
            $Joyce= new M_belajar;
            $where=('id_karyawan');
            $Wendy['takdirestui']= $Joyce->tampil('karyawan', $where);
            echo view('header');
            echo view('menu2');
            echo view('tky',$Wendy);
            echo view('footer');
        }
       public function simpan_tky()
{
    // Get data from form
    $a = $this->request->getPost('nama');
    $b = $this->request->getPost('jeniskel');
    $c = $this->request->getPost('nohp');
    $d = $this->request->getPost('tanggal');  // username
    $e = $this->request->getPost('alamat');   // password
    $f = $this->request->getPost('level');
                    $data= array(
                    "nama"=>$a,
                    "nik"=>$b,
                    "tempat_lahir"=>$c,
                    "tanggal_lahir"=>$d,
                    "jenis_kelamin"=>$e,
                    "alamat"=>$f,
                    "no_hp"=>$g,
                    );


    $Joyce = new M_belajar();
    $Joyce->insert($data);

    return redirect()->to('home/karyawan');
}

         public function daftarpaket()
        {
             if (session()->get('level')==1) {
            $Joyce= new M_belajar;
            $where=('id_paket');
            $Wendy['takdirestui']= $Joyce->tampil('paket', $where);
            echo view('header');
            echo view('menu2');
            echo view('daftarpaket',$Wendy);
            echo view('footer');
              }else if (session()->get('level')>0) {
                return redirect()->to('home/error');
            }else{
                return redirect()->to('home/login');
            }
        
        }

         public function order()
        {
             if (session()->get('level')==1 || session()->get('level')==2 || session()->get('level')==3) {
            $Joyce= new M_belajar;
            $where=('id_order');
            $Wendy['takdirestui']= $Joyce->tampil('order', $where);
            echo view('header');
            echo view('menu2');
            echo view('order',$Wendy);
            echo view('footer');
              }else if (session()->get('level')>0) {
                return redirect()->to('home/error');
            }else{
                return redirect()->to('home/login');
            }
        }

        public function torder()
    {
        $Joyce= new M_belajar;
            $where=('id_order');
            $Wendy['takdirestui']= $Joyce->tampil('order', $where);

        echo view('header');
        echo view('menu2');
        echo view('torder', $Wendy);  
        echo view('footer');
    }

    public function simpan_torder()
{
    // Correctly capture form inputs
    $nama = $this->request->getPost('nama');
    $no_hp = $this->request->getPost('no_hp');  // Corrected from 'tempat' to 'no_hp'
    $alamat = $this->request->getPost('alamat');  // Corrected from 'tanggal' to 'alamat'
    $paket = $this->request->getPost('nama_paket');  // Corrected from 'jeniskel' to 'nama_paket'
    $berat = $this->request->getPost('berat');
    $tgl_masuk = $this->request->getPost('tgl_masuk');  // Corrected from 'tanggal_masuk'
    $tgl_keluar = $this->request->getPost('tgl_keluar');  // Corrected from 'tanggal_keluar'
    $keterangan = $this->request->getPost('keterangan');

    // Prepare data to insert into the database
    $data = array(
        "nama" => $nama,
        "no_hp" => $no_hp,
        "alamat" => $alamat,
        "nama_paket" => $paket,
        "berat" => $berat,
        "tgl_masuk" => $tgl_masuk,
        "tgl_keluar" => $tgl_keluar,
        "keterangan" => $keterangan
    );

    // Insert the data into the 'order' table
    $Joyce = new M_belajar;
    $Joyce->tambah('order', $data);  // 'order' is the table name

    // Redirect to the order page
    return redirect()->to('home/order');  
}

}