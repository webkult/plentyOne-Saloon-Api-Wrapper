<?php

namespace PlentyOne\Api\Requests\MailTemplates;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Remove template from favourites for current user
 *
 * Remove template from favourites for current user
 */
class RemoveTemplateFromFavouritesForCurrentUser extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/mail_templates/email_service/removeFromFavourites/{$this->templateId}";
	}


	/**
	 * @param int $templateId Template id that will be removed from favourite
	 */
	public function __construct(
		protected int $templateId,
	) {
	}
}
