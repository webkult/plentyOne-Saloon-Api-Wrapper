<?php

namespace PlentyOne\Api\Requests\Newsletter;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update folder
 *
 * Updates a folder. The ID of the folder must be specified.
 */
class UpdateFolder extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/newsletters/folders/{$this->folderId}";
	}


	/**
	 * @param int $folderId The ID of the newsletter folder
	 * @param null|string $name The name of the newsletter folder
	 * @param null|int $position The position of the newsletter folder
	 * @param null|array $clientIds The IDs of the clients (stores). It is possible to determine which clients (stores) the newsletter folder is visible for.
	 * @param null|bool $isDeletable Flag that indicates if the newsletter folder can be deleted. The folders 'Customers' and 'Interested parties' are available by default and cannot be deleted.
	 * @param null|bool $isSelectable Flag that indicates if the newsletter folder can be selected by customers in the online store. If it is allowed, the folder will be displayed in the My account area of the online store. Customers will then be able to subscribe to the newsletters that are included in this folder.
	 */
	public function __construct(
		protected int $folderId,
		protected ?string $name = null,
		protected ?int $position = null,
		protected ?array $clientIds = null,
		protected ?bool $isDeletable = null,
		protected ?bool $isSelectable = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'name' => $this->name,
			'position' => $this->position,
			'clientIds' => $this->clientIds,
			'isDeletable' => $this->isDeletable,
			'isSelectable' => $this->isSelectable,
		]);
	}
}
