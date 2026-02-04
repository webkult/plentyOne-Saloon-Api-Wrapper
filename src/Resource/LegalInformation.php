<?php

namespace PlentyOne\Api\Resource;

use PlentyOne\Api\Requests\LegalInformation\GetLegalInformationOfOnlineStore;
use PlentyOne\Api\Requests\LegalInformation\ReturnAllLegalTexts;
use PlentyOne\Api\Requests\LegalInformation\SaveLegalInformationForOnlineStore;
use PlentyOne\Api\Requests\LegalInformation\UpdateTheTextInThePlentyTextTable;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class LegalInformation extends BaseResource
{
	/**
	 * @param int $plentyId
	 * @param int $lang
	 */
	public function returnAllLegalTexts(int $plentyId, int $lang): Response
	{
		return $this->connector->send(new ReturnAllLegalTexts($plentyId, $lang));
	}


	/**
	 * @param int $plentyId
	 * @param int $lang
	 */
	public function updateTheTextInThePlentyTextTable(int $plentyId, int $lang): Response
	{
		return $this->connector->send(new UpdateTheTextInThePlentyTextTable($plentyId, $lang));
	}


	/**
	 * @param int $plentyId The plenty ID of the online store.
	 * @param string $lang The language of the legal information text. The language must be specified as ISO 639-1 code, e.g. en for English
	 * @param int $type
	 */
	public function getLegalInformationOfOnlineStore(int $plentyId, string $lang, int $type): Response
	{
		return $this->connector->send(new GetLegalInformationOfOnlineStore($plentyId, $lang, $type));
	}


	/**
	 * @param int $plentyId The plenty ID of the online store
	 * @param string $lang The language of the legal information text. The language must be specified as ISO 639-1 code, e.g. en for English
	 * @param int $type
	 */
	public function saveLegalInformationForOnlineStore(int $plentyId, string $lang, int $type): Response
	{
		return $this->connector->send(new SaveLegalInformationForOnlineStore($plentyId, $lang, $type));
	}
}
