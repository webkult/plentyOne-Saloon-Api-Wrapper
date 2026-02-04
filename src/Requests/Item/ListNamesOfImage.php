<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List names of an image
 *
 * Lists all names of an image. The image ID must be specified.
 */
class ListNamesOfImage extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/items/{$this->id}/images/{$this->imageId}/names";
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
