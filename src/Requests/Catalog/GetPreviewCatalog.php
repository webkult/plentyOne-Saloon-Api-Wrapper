<?php

namespace PlentyOne\Api\Requests\Catalog;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get preview catalog
 *
 * Gets the preview for an export with a specific catalog
 */
class GetPreviewCatalog extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/catalogs/catalogs/{$this->id}/preview";
	}


	/**
	 * @param int $id
	 */
	public function __construct(
		protected int $id,
	) {
	}
}
