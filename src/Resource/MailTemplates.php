<?php

namespace PlentyOne\Api\Resource;

use PlentyOne\Api\Requests\MailTemplates\AddTemplateToFavouritesForCurrentUser;
use PlentyOne\Api\Requests\MailTemplates\GeneratesRenderPreviewOfSpecificTemplateIncludingAttachments;
use PlentyOne\Api\Requests\MailTemplates\GetTheEmailOfContactOrOrderBasedOnTheReceiverType;
use PlentyOne\Api\Requests\MailTemplates\ListAllEmailAccountsThatCanBeUsedToSendEmailsEGWebstoreOrMessengerInboxes;
use PlentyOne\Api\Requests\MailTemplates\ListAllEmailBuilderTemplatesAndFoldersStructuredAsNestedTree;
use PlentyOne\Api\Requests\MailTemplates\ListAllSentEmailForSpecificEntityEGOrderContactEtc;
use PlentyOne\Api\Requests\MailTemplates\RemoveTemplateFromFavouritesForCurrentUser;
use PlentyOne\Api\Requests\MailTemplates\RendersTemplateAndSendsEmailToTheSpecifiedRecipients;
use PlentyOne\Api\Requests\MailTemplates\SendsDirectEmailToTheSpecifiedRecipientsAPreviewOfTemplateOrAnyOtherCustomContentEmail;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class MailTemplates extends BaseResource
{
	/**
	 * @param string $accountType Values: webstore OR messenger_inbox.
	 */
	public function listAllEmailAccountsThatCanBeUsedToSendEmailsEgwebstoreOrMessengerInboxes(
		string $accountType,
	): Response
	{
		return $this->connector->send(new ListAllEmailAccountsThatCanBeUsedToSendEmailsEGWebstoreOrMessengerInboxes($accountType));
	}


	/**
	 * @param int $templateId Template id that will be a favourite
	 */
	public function addTemplateToFavouritesForCurrentUser(int $templateId): Response
	{
		return $this->connector->send(new AddTemplateToFavouritesForCurrentUser($templateId));
	}


	public function getTheEmailOfContactOrOrderBasedOnTheReceiverType(): Response
	{
		return $this->connector->send(new GetTheEmailOfContactOrOrderBasedOnTheReceiverType());
	}


	/**
	 * @param string $type History type: of order or contact
	 * @param int $id Search for a specific template
	 */
	public function listAllSentEmailForSpecificEntityEgorderContactEtc(string $type, int $id): Response
	{
		return $this->connector->send(new ListAllSentEmailForSpecificEntityEGOrderContactEtc($type, $id));
	}


	/**
	 * @param int $templateId Template id that will be previewed
	 * @param string $accountType Values: webstore OR messenger_inbox.
	 * @param string $conversationId Conversation id
	 * @param bool $whisperMode Whisper mode
	 * @param int $categoryId Conversation category id
	 * @param bool $loadAttachments Load the attachments in the response
	 * @param int $inboxId Conversation inbox id
	 * @param string $contacts List of contacts ids separated by comma
	 * @param string $orders List of orders ids separated by comma
	 * @param string $emails List of emails separated by comma
	 * @param string $lang Language of template
	 * @param int $receiver Reveceiver for email: DEFAULT = 0, CONTACT = 1,
	 *      *     INVOICE_ADDRESS = 2, DELIVERY_ADDRESS = 3, WAREHOUSE = 4, CONTACT_EMAIL_PRIVATE = 5, CONTACT_EMAIL_WORK = 6,
	 *      *     CONTACT_EMAIL_PAYPAL = 7,
	 */
	public function generatesRenderPreviewOfSpecificTemplateIncludingAttachments(
		int $templateId,
		string $accountType,
		?string $conversationId = null,
		?bool $whisperMode = null,
		?int $categoryId = null,
		?bool $loadAttachments = null,
		?int $inboxId = null,
		?string $contacts = null,
		?string $orders = null,
		?string $emails = null,
		?string $lang = null,
		?int $receiver = null,
	): Response
	{
		return $this->connector->send(new GeneratesRenderPreviewOfSpecificTemplateIncludingAttachments($templateId, $accountType, $conversationId, $whisperMode, $categoryId, $loadAttachments, $inboxId, $contacts, $orders, $emails, $lang, $receiver));
	}


	/**
	 * @param int $templateId Template id that will be removed from favourite
	 */
	public function removeTemplateFromFavouritesForCurrentUser(int $templateId): Response
	{
		return $this->connector->send(new RemoveTemplateFromFavouritesForCurrentUser($templateId));
	}


	/**
	 * @param int $templateId Template id that will be sent
	 * @param string $conversationId Conversation id
	 * @param array $contacts List of contacts ids
	 * @param array $orders List of orders ids
	 * @param array $emails List of emails
	 * @param string $lang Language of template
	 * @param int $receiver Reveceiver for email: DEFAULT = 0, CONTACT = 1,
	 *      *     INVOICE_ADDRESS = 2, DELIVERY_ADDRESS = 3, WAREHOUSE = 4, CONTACT_EMAIL_PRIVATE = 5, CONTACT_EMAIL_WORK = 6,
	 *      *     CONTACT_EMAIL_PAYPAL = 7,
	 */
	public function rendersTemplateAndSendsEmailToTheSpecifiedRecipients(
		int $templateId,
		?string $conversationId = null,
		?array $contacts = null,
		?array $orders = null,
		?array $emails = null,
		?string $lang = null,
		?int $receiver = null,
	): Response
	{
		return $this->connector->send(new RendersTemplateAndSendsEmailToTheSpecifiedRecipients($templateId, $conversationId, $contacts, $orders, $emails, $lang, $receiver));
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
	 * @param array $cc Array with emails and names for cc receivers,
	 *      *      [{'name': string, 'address': string}]
	 * @param array $bcc Array with emails and names for bcc receivers,
	 *      *      [{'name': string, 'address': string}]
	 * @param string $subject The subject of the email
	 * @param string $body The content of the email
	 * @param array $attachments Array that contains the multipel attachments details:
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
	public function sendsDirectEmailToTheSpecifiedRecipientsApreviewOfTemplateOrAnyOtherCustomContentEmail(
		array $account,
		array $to,
		?array $cc = null,
		?array $bcc = null,
		string $subject,
		string $body,
		?array $attachments = null,
	): Response
	{
		return $this->connector->send(new SendsDirectEmailToTheSpecifiedRecipientsAPreviewOfTemplateOrAnyOtherCustomContentEmail($account, $to, $cc, $bcc, $subject, $body, $attachments));
	}


	/**
	 * @param bool $showFavorites Show favorites;
	 *      *      Favourites response folder ID: -1
	 * @param bool $showOldTemplates Show old templates;
	 *      *      Old templates response folder ID = -2
	 * @param int $id Search for a specific template
	 * @param string $name Search for a specific template name
	 * @param int $client Search for a specific client
	 * @param int $owner Search for a specific owner
	 * @param int $lang Search for a lang (iso code)
	 * @param string $sortBy Sort by id/name/createdAt
	 * @param string $sortOrder Sort order asc/desc
	 */
	public function listAllEmailBuilderTemplatesAndFoldersStructuredAsNestedTree(
		?bool $showFavorites = null,
		?bool $showOldTemplates = null,
		?int $id = null,
		?string $name = null,
		?int $client = null,
		?int $owner = null,
		?int $lang = null,
		?string $sortBy = null,
		?string $sortOrder = null,
	): Response
	{
		return $this->connector->send(new ListAllEmailBuilderTemplatesAndFoldersStructuredAsNestedTree($showFavorites, $showOldTemplates, $id, $name, $client, $owner, $lang, $sortBy, $sortOrder));
	}
}
