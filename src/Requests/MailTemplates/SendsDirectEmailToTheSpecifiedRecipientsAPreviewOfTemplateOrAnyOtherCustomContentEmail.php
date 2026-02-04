<?php

namespace PlentyOne\Api\Requests\MailTemplates;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Sends a direct email to the specified recipients (a preview of a template or any other custom content email)
 *
 * Sends a direct email to the specified recipients (a preview of a template or any other custom
 * content email)
 */
class SendsDirectEmailToTheSpecifiedRecipientsAPreviewOfTemplateOrAnyOtherCustomContentEmail extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/mail_templates/email_service/sendPreview";
	}


	/**
	 * @param array $account Contains all account details:
	 *      *          type = string (webstore/messenger_inbox)
	 *      *          id = int (the id of the webStore or de inbox id)
	 *      *          name = string (the name of the webStore or de inbox name)
	 *      *          from = array ('name': string - the from name, 'address': string - the from email)
	 *      *
	 * @param array $to Array with emails and names for to receivers,
	 *      *      [{'name': string, 'address': string}]
	 * @param null|array $cc Array with emails and names for cc receivers,
	 *      *      [{'name': string, 'address': string}]
	 * @param null|array $bcc Array with emails and names for bcc receivers,
	 *      *      [{'name': string, 'address': string}]
	 * @param string $subject The subject of the email
	 * @param string $body The content of the email
	 * @param null|array $attachments Array that contains the multipel attachments details:
	 *      *      [
	 *      *           {
	 *      *           'name': string (File name),
	 *      *           'body': string (File content),
	 *      *           'size': int (File size in kb),
	 *      *           'contentType': string (File content type)
	 *      *           }
	 *      *       ]
	 *      *
	 */
	public function __construct(
		protected array $account,
		protected array $to,
		protected ?array $cc = null,
		protected ?array $bcc = null,
		protected string $subject,
		protected string $body,
		protected ?array $attachments = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'account' => $this->account,
			'to' => $this->to,
			'cc' => $this->cc,
			'bcc' => $this->bcc,
			'subject' => $this->subject,
			'body' => $this->body,
			'attachments' => $this->attachments,
		]);
	}
}
