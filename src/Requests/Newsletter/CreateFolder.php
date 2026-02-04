<?php

namespace PlentyOne\Api\Requests\Newsletter;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create folder
 *
 * Creates a newsletter folder. The name of the folder must be specified.
 */
class CreateFolder extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/newsletters/folders";
	}


	/**
	 * @param null|int $id The ID of the newsletter folder
	 * @param string $name The name of the newsletter folder
	 * @param null|int $position The position of the newsletter folder
	 * @param null|bool $isDeletable Flag that indicates if the newsletter folder can be deleted. Default value of is deletable is 1. The folders 'Customers' and 'Interested parties' are available by default and cannot be deleted.
	 * @param null|bool $isSelectable Flag that indicates if the newsletter folder can be selected by customers in the online store. If it is allowed, the folder will be displayed in the My account area of the online store. Customers will then be able to subscribe to the newsletters that are included in this folder.
	 */
	public function __construct(
		protected ?int $id = null,
		protected string $name,
		protected ?int $position = null,
		protected ?bool $isDeletable = null,
		protected ?bool $isSelectable = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'id' => $this->id,
			'name' => $this->name,
			'position' => $this->position,
			'isDeletable' => $this->isDeletable,
			'isSelectable' => $this->isSelectable,
		]);
	}
}
