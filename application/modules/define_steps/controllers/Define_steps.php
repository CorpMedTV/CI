<?php

class Define_steps extends MY_Controller
{
    private $datas = array();

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helpers(array('template/organization_template_helper', 'template/pagination_template_helper', 'pagination_helper', 'message_helper'));
        $this->load->model('Steps_model');
    }



    public function load_steps()
    {
        $this->Steps_model->processID = $this->input->post('processID');
        $datas['data'] = $this->Steps_model->steps();
        $datas['processID'] =  $this->input->post('processID');
        $this->load->view('define_steps/load_steps', $datas);
    }



    // public function get_organization_info_with_pagination()
    // {
    //     $pagination = pagination($this->input->post('page'), 'Organization_model', "fetch_organization", "record_count", $this->input->post('recordsPerPage'));
    //     // $datas['data'] = $this->get_org_info->fetch_organization($recordsPerPage, $startFrom);
    //     // $total_records = $this->get_org_info->record_count();
    //     // $datas['totalPages'] = ceil($total_records / $recordsPerPage);
    //     // $datas['currentPage'] = $pagination['currentPage'];
    //     $this->load->view('create_organization/grid/Load_organization', $pagination); // need dapat array hahhaa mag pasa data kung nd nd ya makita
    // }

    // public function get_single_organization_info()
    // {
    //     $this->load->model('Organization_model', 'get_org_info');
    //     $datas['data'] = $this->get_org_info->get_single_organization_info($this->input->post('id'));
    //     echo json_encode($datas); // need dapat array hahhaa mag pasa data kung nd nd ya makita
    // }

    // public function search()
    // {
    //     $search = $this->Organization_model->Search($this->input->post('input'));
    //     $this->load->view('grid/Load_organization', $search);
    // }
}
