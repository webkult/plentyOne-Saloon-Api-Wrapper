<?php

namespace PlentyOne\Api\Requests\MailTemplates;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Add template to favourites for current user
 *
 * Add template to favourites for current user
 */
class AddTemplateToFavouritesForCurrentUser extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/mail_templates/email_service/addToFavourites/{$this->templateId}";
	}


	/**
	 * @param int $templateId Template id that will be a favourite
	 */
	public function __construct(
		protected int $templateId,
	) {
	}
}
