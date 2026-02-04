<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List availabilities
 *
 * List all availabilities of an image. The image ID must be specified.
 */
class ListAvailabilities extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/items/{$this->id}/images/{$this->imageId}/availabilities";
	}


	/**
	 * @param int $id
	 * @param int $imageId
	 */
	public function __construct(
		protected int $id,
		protected int $imageId,
	) {
	}
}
