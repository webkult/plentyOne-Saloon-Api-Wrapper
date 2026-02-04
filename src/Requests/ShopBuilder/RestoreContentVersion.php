<?php

namespace PlentyOne\Api\Requests\ShopBuilder;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Restore content version.
 *
 * Restore a specific content version.
 */
class RestoreContentVersion extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/shop_builder/contents/{$this->contentId}/versions/{$this->versionId}";
	}


	/**
	 * @param int $contentId The ID of the content to be restored to a previous version.
	 * @param string $versionId ID of the version to restore the content to.
	 */
	public function __construct(
		protected int $contentId,
		protected string $versionId,
	) {
	}
}
