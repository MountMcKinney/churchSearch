<?php
class Church_model extends CI_Model {

      public function get_reviews($slug = FALSE)
      {
        if ($slug === FALSE)
        {
                $query = $this->db->get('reviews');
                return $query->result_array();
        }

        $query = $this->db->get_where('reviews', array('slug' => $slug));
        return $query->row_array();
      }

      public function set_reviews()
      {
          $this->load->helper('url');

          $slug = url_title($this->input->post('title'), 'dash', TRUE);

          $data = array(
              'title' => $this->input->post('title'),
              'slug' => $slug,
              'text' => $this->input->post('text')
          );

          return $this->db->insert('reviews', $data);
      }
}
