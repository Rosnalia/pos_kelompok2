<?php
class Model_user extends CI_Model
{

    function login($username, $password)
    {
        $chek =  $this->db->join('akses','akses.idAkses = user.idAkses','left')
        ->get_where('user', array('username' => $username, 'password' =>  md5($password)));
        if ($chek->num_rows() > 0) {
            return $chek;
        } else {
            return false;
        }
    }

    function getAkses()
    {
        return $this->db->get('akses')->result();
    }

    function tampilkan_data()
    {
        return $this->db->join('akses', 'akses.id_akses = user.id_akses', 'left')
            ->get('user');
    }

    function get_one($id)
    {
        $param  =   array('idUser' => $id);
        return $this->db->get_where('user', $param);
    }

    function edit($data)
    {
        $this->db->where('idUser', $this->input->post('id'));
        $this->db->update('user', $data);
    }

    function hapus($id)
    {
        $this->db->where('idUser', $id);
        $this->db->delete('user');
    }

    function get_detail_modal($id)
    {
        return $this->db->where('idUser', $id)
            ->get('user')
            ->row();
    }
}
