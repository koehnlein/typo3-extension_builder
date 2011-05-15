{namespace k=Tx_ExtensionBuilder_ViewHelpers}
	/**
	 * Displays all {domainObject.name -> k:pluralize()}
	 *
	 * @return void
	 */
	public function listAction() {
		${domainObject.name -> k:lowercaseFirst() -> k:pluralize()} = $this->{domainObject.name -> k:lowercaseFirst()}Repository->findAll();
		$this->view->assign('{domainObject.name -> k:lowercaseFirst() -> k:pluralize()}', ${domainObject.name -> k:lowercaseFirst() -> k:pluralize()});
	}