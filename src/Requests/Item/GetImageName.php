<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get an image name
 *
 * Gets an image name. The image ID and language must be specified.
 */
class GetImageName extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/items/{$this->id}/images/{$this->imageId}/names/{$this->lang}";
	}


	/**
	 * @param int $id
	 * @param int $imageId
	 * @param int $lang
	 */
	public function __construct(
		protected int $id,
		protected int $imageId,
		protected int $lang,
	) {
	}
}
