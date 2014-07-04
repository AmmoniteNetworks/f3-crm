<?php 

class CrmBootstrap extends \Dsc\Bootstrap{
	protected $dir = __DIR__;
	protected $namespace = 'Crm';

	protected function runAdmin(){

		parent::runAdmin();
	}
	protected function runSite(){
		
	 \Dsc\System::instance()->get('theme')->registerViewPath( __dir__ . '/Site/Views/', 'Crm/Site/Views' );

		parent::runSite();
	}
}
$app = new CrmBootstrap();