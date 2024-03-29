<?php 
class ControllerExtensionPaymentPumcp extends Controller {
	private $error = array(); 

	public function index() {
		$this->load->language('extension/payment/pumcp');

		$this->document->setTitle($this->language->get('heading_title'));
		
		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {

			$this->model_setting_setting->editSetting('payment_pumcp', $this->request->post);				
			
			$this->session->data['success'] = $this->language->get('text_success');
			
			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=payment', true));
		}

		$data['heading_title'] = $this->language->get('heading_title');
		
		$data['entry_route'] = $this->language->get('entry_route');
		$data['entry_route_payu'] = $this->language->get('entry_route_payu');
		$data['entry_route_citrus'] = $this->language->get('entry_route_citrus');
		$data['help_route'] = $this->language->get('help_route');
		$data['entry_module'] = $this->language->get('entry_module');
		$data['entry_module_id'] = $this->language->get('entry_module_id');
		$data['entry_geo_zone'] = $this->language->get('entry_geo_zone');
		$data['entry_order_status'] = $this->language->get('entry_order_status');	
		$data['entry_order_fail_status'] = $this->language->get('entry_order_fail_status');	
		$data['entry_status'] = $this->language->get('entry_status');
		$data['entry_sort_order'] = $this->language->get('entry_sort_order');
		$data['entry_currency'] = $this->language->get('entry_currency');
		$data['help_currency'] = $this->language->get('help_currency');
		
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');
		$data['text_all_zones'] = $this->language->get('text_all_zones');		
				
		$data['entry_merchant'] = $this->language->get('entry_merchant');
		$data['entry_salt'] = $this->language->get('entry_salt');
		$data['entry_test'] = $this->language->get('entry_test');
		$data['entry_total'] = $this->language->get('entry_total');	
			
		$data['entry_vanityurl'] = $this->language->get('entry_vanityurl');
		$data['entry_access_key'] = $this->language->get('entry_access_key');
		$data['entry_secret_key'] = $this->language->get('entry_secret_key');
		
		$data['help_merchant'] = $this->language->get('help_merchant');
		$data['help_vanityurl'] = $this->language->get('help_vanityurl');
		$data['help_accesskey'] = $this->language->get('help_accesskey');
		$data['help_secretkey'] = $this->language->get('help_secretkey');
		$data['help_total'] = $this->language->get('help_total');
		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');
        $data['help_salt'] = $this->language->get('help_salt');
		$data['tab_general'] = $this->language->get('tab_general');

		if (isset($this->error['error_warning'])) {
			$data['error_warning'] = $this->error['error_warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['error_merchant'])) {
			$data['error_merchant'] = $this->error['error_merchant'];
		} else {
			$data['error_merchant'] = '';
		}
		if (isset($this->error['error_salt'])) {
			$data['error_salt'] = $this->error['error_salt'];
		} else {
			$data['error_salt'] = '';
		}
		if (isset($this->error['error_citrus_vanityurl'])) {
			$data['error_citrus_vanityurl'] = $this->error['error_citrus_vanityurl'];
		} else {
			$data['error_citrus_vanityurl'] = '';
		}
		if (isset($this->error['error_citrus_access_key'])) {
			$data['error_citrus_access_key'] = $this->error['error_citrus_access_key'];
		} else {
			$data['error_citrus_access_key'] = '';
		}
		if (isset($this->error['error_citrus_secret_key'])) {
			$data['error_citrus_secret_key'] = $this->error['error_citrus_secret_key'];
		} else {
			$data['error_citrus_secret_key'] = '';
		}
		if (isset($this->error['error_route'])) {
			$data['error_route'] = $this->error['error_route'];
		} else {
			$data['error_route'] = '';
		}		
		if (isset($this->error['error_module'])) {
			$data['error_module'] = $this->error['error_module'];
		} else {
			$data['error_module'] = '';
		}
		if (isset($this->error['error_currency'])) {
			$data['error_currency'] = $this->error['error_currency'];
		} else {
			$data['error_currency'] = '';
		}
		
		if (isset($this->error['error_status'])) {
			$data['error_status'] = $this->error['error_status'];
		} else {
			$data['error_status'] = '';
		}
		
		
		
  		$data['breadcrumbs'] = array();

   		$data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('text_home'),
			'href'      => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true),
      		'separator' => false
   		);

   		$data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('text_payment'),
			'href'      => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=payment', true),
      		'separator' => ' :: '
   		);

   		$data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('heading_title'),
			'href'      => $this->url->link('extension/payment/pumcp', 'user_token=' . $this->session->data['user_token'], true),
      		'separator' => ' :: '
   		);
				
		$data['action'] = $this->url->link('extension/payment/pumcp', 'user_token=' . $this->session->data['user_token'], 'SSL');
		
		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'], 'SSL');
		
		if (isset($this->request->post['payment_pumcp_module'])) {
			$data['payment_pumcp_module'] = $this->request->post['payment_pumcp_module'];
		} else {
			$data['payment_pumcp_module'] = $this->config->get('payment_pumcp_module');
		}
		
		if (isset($this->request->post['payment_pumcp_citrus_vanityurl'])) 
		{
			$data['payment_pumcp_citrus_vanityurl'] = $this->request->post['payment_pumcp_citrus_vanityurl'];
		} 
		else 
		{
			$data['payment_pumcp_citrus_vanityurl'] = $this->config->get('payment_pumcp_citrus_vanityurl');
		} 
		if (isset($this->request->post['payment_pumcp_citrus_access_key'])) 
		{
			$data['payment_pumcp_citrus_access_key'] = $this->request->post['payment_pumcp_citrus_access_key'];
		} 
		else 
		{
			$data['payment_pumcp_citrus_access_key'] = $this->config->get('payment_pumcp_citrus_access_key');
		}
		if (isset($this->request->post['payment_pumcp_citrus_secret_key'])) 
		{
			$data['payment_pumcp_citrus_secret_key'] = $this->request->post['payment_pumcp_citrus_secret_key'];
		} 
		else 
		{
			$data['payment_pumcp_citrus_secret_key'] = $this->config->get('payment_pumcp_citrus_secret_key');
		}

		if (isset($this->request->post['payment_pumcp_route_payu'])) {
			$data['payment_pumcp_route_payu'] = $this->request->post['payment_pumcp_route_payu'];
		} else {
			$data['payment_pumcp_route_payu'] = $this->config->get('payment_pumcp_route_payu');
		}
		
		if (isset($this->request->post['payment_pumcp_route_citrus'])) {
			$data['payment_pumcp_route_citrus'] = $this->request->post['payment_pumcp_route_citrus'];
		} else {
			$data['payment_pumcp_route_citrus'] = $this->config->get('payment_pumcp_route_citrus');
		}
		
		if($data['payment_pumcp_route_payu'] == '' && $data['payment_pumcp_route_citrus'] == '') 
		{
			$data['payment_pumcp_route_payu'] = '50';
			$data['payment_pumcp_route_citrus'] = '50';
		}
		
		if (isset($this->request->post['payment_pumcp_payu_merchant'])) {
			$data['payment_pumcp_payu_merchant'] = $this->request->post['payment_pumcp_payu_merchant'];
		} else {
			$data['payment_pumcp_payu_merchant'] = $this->config->get('payment_pumcp_payu_merchant');
		}
		
		if (isset($this->request->post['payment_pumcp_payu_salt'])) {
			$data['payment_pumcp_payu_salt'] = $this->request->post['payment_pumcp_payu_salt'];
		} else {
			$data['payment_pumcp_payu_salt'] = $this->config->get('payment_pumcp_payu_salt');
		}
		
		if (isset($this->request->post['payment_pumcp_total'])) {
			$data['payment_pumcp_total'] = $this->request->post['payment_pumcp_total'];
		} else {
			$data['payment_pumcp_total'] = $this->config->get('payment_pumcp_total'); 
		} 
		
		if (isset($this->request->post['payment_pumcp_currency'])) {
			$data['payment_pumcp_currency'] = $this->request->post['payment_pumcp_currency'];
		} else {
			$data['payment_pumcp_currency'] = $this->config->get('payment_pumcp_currency'); 
		} 
				
		if (isset($this->request->post['payment_pumcp_order_status_id'])) {
			$data['payment_pumcp_order_status_id'] = $this->request->post['payment_pumcp_order_status_id'];
		} else {
			$data['payment_pumcp_order_status_id'] = $this->config->get('payment_pumcp_order_status_id'); 
		} 

		if (isset($this->request->post['payment_pumcp_order_fail_status_id'])) {
			$data['payment_pumcp_order_fail_status_id'] = $this->request->post['payment_pumcp_order_fail_status_id'];
		} else {
			$data['payment_pumcp_order_fail_status_id'] = $this->config->get('payment_pumcp_order_fail_status_id'); 
		} 
		
		$this->load->model('localisation/order_status');
		
		$data['order_statuses'] = $this->model_localisation_order_status->getOrderStatuses();
		
		if (isset($this->request->post['payment_pumcp_geo_zone_id'])) {
			$data['payment_pumcp_geo_zone_id'] = $this->request->post['payment_pumcp_geo_zone_id'];
		} else {
			$data['payment_pumcp_geo_zone_id'] = $this->config->get('payment_pumcp_geo_zone_id'); 
		} 
		
		$this->load->model('localisation/geo_zone');
										
		$data['geo_zones'] = $this->model_localisation_geo_zone->getGeoZones();
		
		if (isset($this->request->post['payment_pumcp_status'])) {
			$data['payment_pumcp_status'] = $this->request->post['payment_pumcp_status'];
		} else {
			$data['payment_pumcp_status'] = $this->config->get('payment_pumcp_status');
		}
		
		if (isset($this->request->post['payment_pumcp_sort_order'])) {
			$data['payment_pumcp_sort_order'] = $this->request->post['payment_pumcp_sort_order'];
		} else {
			$data['payment_pumcp_sort_order'] = $this->config->get('payment_pumcp_sort_order');
		}
        $data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');


		$data['cm'] = explode('|',$data['entry_module_id']);
				
		$this->response->setOutput($this->load->view('extension/payment/pumcp', $data));
	}

	private function validate() {
		$flag = false;
		
		if (!$this->user->hasPermission('modify', 'extension/payment/pumcp')) {
			$this->error['error_warning'] = $this->language->get('error_permission');
		}
		
		//PayU both parameters mandatory
		if($this->request->post['payment_pumcp_payu_merchant'] || $this->request->post['payment_pumcp_payu_salt']) {
			if (!$this->request->post['payment_pumcp_payu_merchant']) {
				$this->error['error_merchant'] = $this->language->get('error_merchant');
			}
			
			if (!$this->request->post['payment_pumcp_payu_salt']) {
				$this->error['error_salt'] = $this->language->get('error_salt');
			}
		}
		if($this->request->post['payment_pumcp_payu_merchant'] && $this->request->post['payment_pumcp_payu_salt']) {
			$flag=true;	
		}
		//Citrus all three parameters mandatory
		if($this->request->post['payment_pumcp_citrus_vanityurl'] || $this->request->post['payment_pumcp_citrus_access_key'] || $this->request->post['payment_pumcp_citrus_secret_key']) {
			if (!$this->request->post['payment_pumcp_citrus_vanityurl']) 
			{
				$this->error['error_citrus_vanityurl'] = $this->language->get('error_vanityrul');
			}
			if (!$this->request->post['payment_pumcp_citrus_access_key']) 
			{
				$this->error['error_citrus_access_key'] = $this->language->get('error_accesskey');
			}
			if (!$this->request->post['payment_pumcp_citrus_secret_key']) 
			{
				$this->error['error_citrus_secret_key'] = $this->language->get('error_secretkey');
			}
		}
		if($this->request->post['payment_pumcp_citrus_vanityurl'] && $this->request->post['payment_pumcp_citrus_access_key'] && $this->request->post['payment_pumcp_citrus_secret_key']) {
			$flag=true;	
		}
		$rpu=(int) (($this->request->post['payment_pumcp_route_payu'])? $this->request->post['payment_pumcp_route_payu']: 0);
		$rcp=(int) (($this->request->post['payment_pumcp_route_citrus'])? $this->request->post['payment_pumcp_route_citrus']: 0);
		if(($rpu + $rcp) != 100) {
			$this->error['error_route'] = $this->language->get('error_route');
		}
		
		if (!$this->request->post['payment_pumcp_module']) {
			$this->error['error_module'] = $this->language->get('error_module');
		}
		
		if(!$this->request->post['payment_pumcp_currency'] || strlen($this->request->post['payment_pumcp_currency']) < 3)
		{
			$this->error['error_currency'] = $this->language->get('error_currency');
		}
		else {
			$this->request->post['payment_pumcp_currency'] = strtoupper($this->request->post['payment_pumcp_currency']);
		}
		
		if(!$flag && $this->request->post['payment_pumcp_status'] == '1')
		{
			$this->error['error_status'] = $this->language->get('error_status');
			$this->error['error_warning'] = $this->language->get('error_status');


		}


		
		if (!$this->error) {
			return true;
		} else {
			return false;
		}	
	}
}
?>