<?php 

class Blog_model extends CI_model{

    public function getBlogs()
    {
        return $this->db->get('blog');
    }
    public function getSingleblog($url)
    {
        $this->db->where('url', $url);
        return $this->db->get('blog');
    }
    public function insertBlog($data)
    {
        $this->db->insert('blog', $data);
        return $this->db->insert_id();
    }



}