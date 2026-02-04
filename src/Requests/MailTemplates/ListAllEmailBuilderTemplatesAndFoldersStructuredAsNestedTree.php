<?php

namespace PlentyOne\Api\Requests\MailTemplates;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List all EmailBuilder templates and folders structured as a nested tree
 *
 * List all EmailBuilder templates and folders structured as a nested tree
 */
class ListAllEmailBuilderTemplatesAndFoldersStructuredAsNestedTree extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/mail_templates/email_service/templatesTree";
	}


	/**
	 * @param null|bool $showFavorites Show favorites;
	 *      *      Favourites response folder ID: -1
	 * @param null|bool $showOldTemplates Show old templates;
	 *      *      Old templates response folder ID = -2
	 * @param null|int $id Search for a specific template
	 * @param null|string $name Search for a specific template name
	 * @param null|int $client Search for a specific client
	 * @param null|int $owner Search for a specific owner
	 * @param null|int $lang Search for a lang (iso code)
	 * @param null|string $sortBy Sort by id/name/createdAt
	 * @param null|string $sortOrder Sort order asc/desc
	 */
	public function __construct(
		protected ?bool $showFavorites = null,
		protected ?bool $showOldTemplates = null,
		protected ?int $id = null,
		protected ?string $name = null,
		protected ?int $client = null,
		protected ?int $owner = null,
		protected ?int $lang = null,
		protected ?string $sortBy = null,
		protected ?string $sortOrder = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'showFavorites' => $this->showFavorites,
			'showOldTemplates' => $this->showOldTemplates,
			'id' => $this->id,
			'name' => $this->name,
			'client' => $this->client,
			'owner' => $this->owner,
			'lang' => $this->lang,
			'sortBy' => $this->sortBy,
			'sortOrder' => $this->sortOrder,
		]);
	}
}
