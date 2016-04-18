<?php
class Church extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('church_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                $data['church'] = $this->church_model->get_church();
                $data['title'] = 'church archive';

                $this->load->view('templates/header', $data);
                $this->load->view('church/index', $data);
                $this->load->view('templates/footer');
        }


        public function view($slug = NULL)
        {
                $data['church_item'] = $this->church_model->get_church($slug);
                
                if (empty($data['church_item']))
                {
                        show_404();
                }

                $data['title'] = $data['church_item']['title'];

                $this->load->view('templates/header', $data);
                $this->load->view('church/view', $data);
                $this->load->view('templates/footer');
        }

        public function create()
        {
            $this->load->helper('form');
            $this->load->library('form_validation');

            $data['title'] = 'Create a church item';

            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('text', 'Text', 'required');

            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('templates/header', $data);
                $this->load->view('church/create');
                $this->load->view('templates/footer');

            }
            else
            {
                $this->church_model->set_church();
                $this->load->view('church/success');
            }
        }
}
