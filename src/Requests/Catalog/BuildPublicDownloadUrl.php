<?php

namespace PlentyOne\Api\Requests\Catalog;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Build public download url
 *
 * Builds the public download url with optional data
 * The data should use the same structure as the
 * catalog options
 */
class BuildPublicDownloadUrl extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/catalogs/catalogs/{$this->id}/url/public";
	}


	/**
	 * @param int $id
	 */
	public function __construct(
		protected int $id,
	) {
	}
}
