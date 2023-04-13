<?php
class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data = [
            'judul' => "Katalog Buku",
            'buku' => $this->ModelBuku->getBuku()->result(),
            'user' => $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array(),
            'anggota' => $this->ModelUser->getUserLimit()->result_array()
        ];
        //jika sudah login dan jika belum login10
        if ($this->session->userdata('email')) {
            $user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
            $data['user'] = $user['nama'];
            $this->load->view('templates/tamplates-user/header', $data);
            $this->load->view('templates/tamplates-user/modal', $data);
            $this->load->view('buku/daftar_buku', $data);
            $this->load->view('templates/footer');
        } else {
            $data['user'] = 'Pengunjung';
            $this->load->view('templates/tamplates-user/header', $data);
            $this->load->view('templates/tamplates-user/modal', $data);
            $this->load->view('buku/daftar_buku', $data);
            $this->load->view('templates/tamplates-user/footer', $data);
        }
    }

    public function detailBuku()
    {
        $id = $this->uri->segment(3);
        $buku = $this->ModelBuku->joinKategoriBuku(['buku.id' => $id])->result();
        $data['user'] = "Pengunjung";
        $data['title'] = "Detail Buku";
        foreach ($buku as $fields) {
            $data['judul'] = $fields->judul_buku;
            $data['pengarang'] = $fields->pengarang;
            $data['penerbit'] = $fields->penerbit;
            $data['kategori'] = $fields->kategori;
            $data['tahun'] = $fields->tahun_terbit;
            $data['isbn'] = $fields->isbn;
            $data['gambar'] = $fields->image;
            $data['dipinjam'] = $fields->dipinjam;
            $data['dibooking'] = $fields->dibooking;
            $data['stok'] = $fields->stok;
            $data['id'] = $id;
        }
        $this->load->view('templates/tamplates-user/header', $data);
        $this->load->view('buku/detail_buku', $data);
        $this->load->view('templates/tamplates-user/footer', $data);
    }
}
