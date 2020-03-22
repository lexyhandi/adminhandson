<?php

class M_videokursus extends CI_Model
{

    function insert($data)
    {
        $query = $this->db->get_where('videokursus', array('url_video' => $data['url_video']), 1);
        if ($query->num_rows() == 0) {
            $this->db->insert('videokursus', $data);
            $data = array(
                'id_user' => $this->session->userdata("id_user"),
                'username' => $this->session->userdata("nama"),
                'controller' => $this->uri->segment(1),
                'method' =>  $this->uri->segment(2),
                'activity' => 'Insert video',
                'ip_address' => $this->input->ip_address(),
    
            );
            $data = $this->security->xss_clean($data);
            $this->db->insert('log_aktivitas', $data);
            if ($this->db->affected_rows() > 0) {
                return true;
            }
        } else {
            return false;
        }
    }

    function display()
    {
        $query = $this->db->query("select * from videokursus");
        return $query->result();
    }

    function update($id, $data)
    {
        $this->db->where('id_video', $id);
        return $this->db->update('videokursus', $data);
        $data = array(
            'id_user' => $this->session->userdata("id_user"),
            'username' => $this->session->userdata("nama"),
            'controller' => $this->uri->segment(1),
            'method' =>  $this->uri->segment(2),
            'activity' => 'Update video',
            'ip_address' => $this->input->ip_address(),

        );
        $data = $this->security->xss_clean($data);
        $this->db->insert('log_aktivitas', $data);
    }

    function delete($id)
    {
        return $this->db->delete('videokursus', array('id_video' => $id));
        $data = array(
            'id_user' => $this->session->userdata("id_user"),
            'username' => $this->session->userdata("nama"),
            'controller' => $this->uri->segment(1),
            'method' =>  $this->uri->segment(2),
            'activity' => 'Delete video',
            'ip_address' => $this->input->ip_address(),

        );
        $data = $this->security->xss_clean($data);
        $this->db->insert('log_aktivitas', $data);
    }

    function display_byID($id)
    {
        $query = $this->db->get_where('videokursus', array('id_video' => $id));
        return $query->result();
    }

    function display_video($id)
    {
        $query = $this->db->get_where('videokursus', array('id_kursus' => $id));
        return $query->result();
    }

    function display_bab($id)
    {
        $query = $this->db->get_where('bab_kursus', array('id_kursus' => $id));
        return $query->result();
    }

    function display_bab_kursus($id)
    {
        $query = $this->db->get_where('bab_kursus', array('id_bab' => $id));
        return $query->result()[0]->bab_kursus;
    }
    function display_jumlah($id)
    {
        $query = $this->db->get_where('videokursus', array('id_kursus' => $id));
        return $query->num_rows();
    }
}
