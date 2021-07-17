<?php

// timber specific functions

class TimberSpec extends Timber\Site {

	public function __construct() {
		add_filter( 'timber/context', array( $this, 'addToContext' ) );
		parent::__construct();
	}

	public function addToContext( $context ) {

		// menu-object from registered menu
		$context['menuPrimary']  = new Timber\Menu('primary');
		$context['menuSecondary']  = new Timber\Menu('secondary');
		$context['menuFooter']  = new Timber\Menu('footer');
		$context['menuFooterOngo']  = new Timber\Menu('footerOngo');
		$context['menuFooterCompany']  = new Timber\Menu('footerCompany');

		// acf options page datas
		$context['options'] = get_fields('option');

		// site stuff
		$context['site']  = $this;

		$context['footer']['warranty']  	= _('1 year Warranty');
		$context['footer']['shipping']  	= _('Shipping Worldwide');
		$context['footer']['support']  		= _('Support');
		$context['footer']['company']  		= _('Company');
		$context['footer']['follow']  		= _('Follow ONGO');
		$context['footer']['newsletter']  	= _('Newsletter sign up');

		$context['contact']['title']  		= _('Contact us');
		$context['contact']['name']  		= _('Name');
		$context['contact']['email']  		= _('Email');
		$context['contact']['message']  	= _('Üzenet');
		$context['contact']['consent']  	= _('I agree to receive e-mails from ONGO Vettech, and I accept the privacy policy.');
		$context['contact']['send']  		= _('Send');

		return $context;
	}

}
new TimberSpec();