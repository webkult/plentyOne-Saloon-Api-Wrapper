<?php

namespace PlentyOne\Api\Requests\Plugins;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Load sitemap patterns
 *
 * Loads all given sitemap patterns from booted plugins.
 */
class LoadSitemapPatterns extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/plugins/seo/sitemap";
	}


	public function __construct()
	{
	}
}
