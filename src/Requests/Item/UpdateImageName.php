<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update an image name
 *
 * Update an image name. The ID, language and name of the image must be specified.
 */
class UpdateImageName extends Request
{
	protected Method $method = Method::PUT;


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
