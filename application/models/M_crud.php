<?php 
class M_crud extends CI_Model{
    public function chekLogin($tabel, $username, $password) {
            $this->db->where('Login',  $username);
            $this->db->where("Password = LEFT(PASSWORD('".$password."'),10)");
            $hasil = $this->db->get($tabel)->row_array();
            return $hasil;
    }

    // Menampilkan data dari sebuah tabel dengan pagination.
    public function getList($tables,$limit=10,$page=1,$by='',$sort='ASC'){
        if(!empty($by)) $this->db->order_by($by,$sort);
        $this->db->limit($limit,$page);
        return $this->db->get($tables);
    }


    
    // menampilkan semua data dari sebuah tabel.
    public function getAll($tables){
        return $this->db->get($tables);
    }
    
    public function data($tables, $where='', $limit=1,$page=0,$by='',$sort='ASC' ){
        if (!empty($where)) $this->db->where($where);
        $this->db->where('KodeID',$_SESSION['KodeID']);
        $this->db->where('NA','N');
        $this->db->limit($limit,$page);
        $this->db->order_by($by,$sort);
        return $this->db->get($tables)->row_array();
    }   

    // menghitun jumlah record dari sebuah tabel.
    public function countAll($tables, $where='', $limit='10'){
        $this->db->where($where);
        $this->db->where('KodeID',$_SESSION['KodeID']);
        $this->db->limit($limit);
        return $this->db->get($tables)->num_rows();
    }
    
    // menghitun jumlah record dari sebuah query.
    public function countQuery($query){
        $this->db->where('KodeID',$_SESSION['KodeID']);
        return $this->db->get($query)->num_rows();
    }
    
    //enampilkan satu record brdasarkan parameter.
    public function kondisi($tables,$where)
    {
        $this->db->where('KodeID',$_SESSION['KodeID']);
        $this->db->where($where);
        return $this->db->get($tables);
    }
    //menampilkan satu record brdasarkan parameter.
    public  function getByID($tables,$pk,$id){
        $this->db->where('KodeID',$_SESSION['KodeID']);
        $this->db->where($pk,$id);
        return $this->db->get($tables)->row_array();
    }
    
    // Menampilkan data dari sebuah query dengan pagination.
    public function queryList($query,$limit,$page){
        $this->db->where('KodeID',$_SESSION['KodeID']);
        return $this->db->query($query." limit ".$page.",".$limit."");
    }
    
    public function queryBiasa($query,$by,$sort){
        $this->db->where('KodeID',$_SESSION['KodeID']);
        $this->db->order_by($by,$sort);
        return $this->db->query($query);
    }
    // memasukan data ke database.
    public function insert($tables,$data){
        $ref = array('TglBuat'=>Now(), 'LoginBuat'=>$_SESSION['Login'], 'KodeID'=>$_SESSION['KodeID']);
        $this->db->insert($tables,$data,$ref);
        helper_log("add", "Menambahkan data");
    }
    
    // update data kedalalam sebuah tabel
    public function update($tables,$data,$pk,$id){
        $this->db->where($pk,$id);
        $ref = array('TglEdit'=>Now(), 'LoginEdit'=>$_SESSION['Login']);
        $this->db->update($tables,$data,$ref);
    }

    // Hapus data kedalam sebuah tabel
    public function delete($tables,$pk,$id){
        $this->db->where('KodeID',$_SESSION['KodeID']);
        $row = $this->$tables->get_by_id($tables,$pk,$id);
        if ($row) {
            $this->session->set_flashdata('simpan', 'Data berhasil dihapus');
            redirect(site_url($tables));
        } else {
            $this->session->set_flashdata('gagal', 'Data gagal dihapus');
            redirect(site_url($tables));
        }
        $this->db->where($pk,$id);
        $this->db->delete($tables);
    }

    public function save_log($param)
    {
        $sql  = $this->db->insert_string('t_log',$param);
        $ex   = $this->db->query($sql);
        return $this->db->affected_rows($sql);
    }
}
?>
