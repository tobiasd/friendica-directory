<?php

namespace Friendica\Directory\Routes\Web;

/**
 * @author Hypolite Petovan <hypolite@mrpetovan.com>
 */
class Directory extends BaseRoute
{
	public function __construct(\Slim\Container $container)
	{
		parent::__construct($container);

		$this->controller = new \Friendica\Directory\Controllers\Web\Directory(
			$this->container->atlas,
			$this->container->get('\Friendica\Directory\Models\Profile'),
			$this->container->get('\Friendica\Directory\Views\Widget\AccountTypeTabs'),
			$this->container->renderer,
			$this->container->l10n
		);
	}
}
