<?php
class ControllerCheckoutAtomfailure extends Controller { 
	public function index() { 		
									   
		$this->language->load('checkout/success');				
	    
		$this->document->setTitle("Transaction Failed. Please Try Again.");
		$this->data['heading_title'] = "Transaction Failed. Please Try Again.";
    	$this->data['button_continue'] = $this->language->get('button_continue');

    	$this->data['continue'] = $this->url->link('common/home');

		if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/common/atomfailure.tpl')) {
			$this->template = $this->config->get('config_template') . '/template/common/atomfailure.tpl';
		} else {
			$this->template = 'default/template/common/atomfailure.tpl';
		}
		
		$this->children = array(
			'common/column_left',
			'common/column_right',
			'common/content_top',
			'common/content_bottom',
			'common/footer',
			'common/header'			
		);
				
		$this->response->setOutput($this->render());
  	}
}
?>