<?php
/**
 * author: hfy
 * date: 2018/4/16 17:50
 * description:
 */
class ControllerHfyMarkert extends Controller {

    private $error = array();

    public function index() {
//        $this->load->language('');
//        $this->document->setTitle($this->language->get('heading_title'));
        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');
        $this->response->setOutput($this->load->view('hfy/markert_list', $data));
    }

}