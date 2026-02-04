<?php

namespace PlentyOne\Api\Requests\Catalog;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Restore version of Catalog
 *
 * Restores a Catalog to a previous version.
 */
class RestoreVersionOfCatalog extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/catalogs/catalogs/{$this->id}/versions/{$this->versionId}/restore";
	}


	/**
	 * @param int $id
	 * @param int $versionId
	 */
	public function __construct(
		protected int $id,
		protected int $versionId,
	) {
	}
}
