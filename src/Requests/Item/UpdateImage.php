<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update an image
 *
 * Updates an image. The ID of the image must be specified.
 */
class UpdateImage extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/items/{$this->id}/images/{$this->imageId}";
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
