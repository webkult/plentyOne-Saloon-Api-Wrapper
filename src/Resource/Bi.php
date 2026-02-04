<?php

namespace PlentyOne\Api\Resource;

use PlentyOne\Api\Requests\Bi\AddKeyFigureConfiguration;
use PlentyOne\Api\Requests\Bi\DeleteKeyFigureConfiguration;
use PlentyOne\Api\Requests\Bi\DeleteMultipleKeyFigureConfigurations;
use PlentyOne\Api\Requests\Bi\DeletesRawDatamodelsThatAreDeletable;
use PlentyOne\Api\Requests\Bi\ExportRawDataOfGivenKeyFigureToSpreadsheetGoogleMicrosoft;
use PlentyOne\Api\Requests\Bi\GenerateKeyFigureConfigFromTemplateClass;
use PlentyOne\Api\Requests\Bi\GetKeyFigureConfig;
use PlentyOne\Api\Requests\Bi\GetKeyFigureTemplates;
use PlentyOne\Api\Requests\Bi\GetListOfAllRawDataCreators;
use PlentyOne\Api\Requests\Bi\GetListOfRawDataFiles;
use PlentyOne\Api\Requests\Bi\GetOrderTypesInStringFormat;
use PlentyOne\Api\Requests\Bi\GetRawDataFileFromTheStorage;
use PlentyOne\Api\Requests\Bi\RecalculatesOneOrMoreRawDataBasedKeyFiguresByKeyFigureConfigIds;
use PlentyOne\Api\Requests\Bi\ResetsAllSavedRawDataConfigurationsWithGivenData;
use PlentyOne\Api\Requests\Bi\ReturnFilteredRawDataForGivenKeyFigure;
use PlentyOne\Api\Requests\Bi\ReturnGlobalFilterValuesByGivenCriteriaIdentifiersParamIdentifiers;
use PlentyOne\Api\Requests\Bi\ReturnGlobalFiltersByGivenKeyFigureIdentifiersParamIdentifiers;
use PlentyOne\Api\Requests\Bi\ReturnKeyFigureCalculationDetails;
use PlentyOne\Api\Requests\Bi\ReturnKeyFigureDimensionsAndDimensionValues;
use PlentyOne\Api\Requests\Bi\ReturnListOfKeyFigureClasses;
use PlentyOne\Api\Requests\Bi\ReturnListOfRawDataCreatorsWithTheirConfigurations;
use PlentyOne\Api\Requests\Bi\ReturnsAllKeyFigureConfigs;
use PlentyOne\Api\Requests\Bi\ReturnsListOfAllSavedConfigurations;
use PlentyOne\Api\Requests\Bi\SearchForKeyFigureCalculationResults;
use PlentyOne\Api\Requests\Bi\UpdateKeyFigureConfiguration;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Bi extends BaseResource
{
	public function returnListOfKeyFigureClasses(): Response
	{
		return $this->connector->send(new ReturnListOfKeyFigureClasses());
	}


	/**
	 * @param int $page The page to get. The default page that will be returned is page 1.
	 * @param int $itemsPerPage The number of key figure configurations to be displayed per page. The default number of key figure configurations per page is 25.
	 * @param string $keyFigure Filter that restricts the search result to key figure configurations of a key figure.
	 * @param array $ids Optional list of IDs that limit the search query
	 * @param array $with Load additional relations for a key figure. The following relations are available:
	 *      * <ul>
	 *     <li>'filter' = Filter options of this key figure.</li>
	 *     <li>'targets' = Target values of this key figure.</li>
	 *     <li>'dimensions' = Available dimensions of this key figure.</li>
	 *     <li>'dimensionValues' = Available dimension values of this key figure.</li>
	 *     </ul>
	 *     Example: <code>?with[]=dimension&with[]=dimensionValues</code>
	 */
	public function returnsAllKeyFigureConfigs(
		int $page,
		int $itemsPerPage,
		?string $keyFigure = null,
		?array $ids = null,
		?array $with = null,
	): Response
	{
		return $this->connector->send(new ReturnsAllKeyFigureConfigs($page, $itemsPerPage, $keyFigure, $ids, $with));
	}


	public function addKeyFigureConfiguration(): Response
	{
		return $this->connector->send(new AddKeyFigureConfiguration());
	}


	/**
	 * @param string $keyFigureClass Template class name
	 * @param string $externalId Identifier to assign the result
	 */
	public function generateKeyFigureConfigFromTemplateClass(
		string $keyFigureClass,
		?string $externalId = null,
	): Response
	{
		return $this->connector->send(new GenerateKeyFigureConfigFromTemplateClass($keyFigureClass, $externalId));
	}


	public function getKeyFigureTemplates(): Response
	{
		return $this->connector->send(new GetKeyFigureTemplates());
	}


	/**
	 * @param int $keyFigureConfigId
	 * @param array $with Load additional relations for a key figure. The following relations are available:
	 *      * <ul>
	 *     <li>'dimensions' = Available dimensions of this key figure.</li>
	 *     <li>'dimensionValues' = Available dimension values of this key figure.</li>
	 *     </ul>
	 *     Example: <code>?with[]=dimension&with[]=dimensionValues</code>
	 */
	public function getKeyFigureConfig(int $keyFigureConfigId, ?array $with = null): Response
	{
		return $this->connector->send(new GetKeyFigureConfig($keyFigureConfigId, $with));
	}


	/**
	 * @param int $keyFigureConfigId
	 */
	public function updateKeyFigureConfiguration(int $keyFigureConfigId): Response
	{
		return $this->connector->send(new UpdateKeyFigureConfiguration($keyFigureConfigId));
	}


	/**
	 * @param int $keyFigureConfigId
	 */
	public function deleteKeyFigureConfiguration(int $keyFigureConfigId): Response
	{
		return $this->connector->send(new DeleteKeyFigureConfiguration($keyFigureConfigId));
	}


	public function deleteMultipleKeyFigureConfigurations(): Response
	{
		return $this->connector->send(new DeleteMultipleKeyFigureConfigurations());
	}


	/**
	 * @param int $keyFigureName
	 */
	public function returnKeyFigureCalculationDetails(int $keyFigureName): Response
	{
		return $this->connector->send(new ReturnKeyFigureCalculationDetails($keyFigureName));
	}


	/**
	 * @param int $keyFigure
	 * @param array $with Load additional relations for a key figure. The following relations are available:
	 *      * <ul>
	 *     <li>'dimensions' = Available dimensions of this key figure.</li>
	 *     <li>'dimensionValues' = Available dimension values of this key figure.</li>
	 *     </ul>
	 *     Example: <code>?with[]=dimension&with[]=dimensionValues</code>
	 * @param string $dimension The specification of a dimension enables the return of the appropriate dimension values.
	 */
	public function returnKeyFigureDimensionsAndDimensionValues(
		int $keyFigure,
		?array $with = null,
		?string $dimension = null,
	): Response
	{
		return $this->connector->send(new ReturnKeyFigureDimensionsAndDimensionValues($keyFigure, $with, $dimension));
	}


	public function returnGlobalFiltersByGivenKeyFigureIdentifiersParamIdentifiers(): Response
	{
		return $this->connector->send(new ReturnGlobalFiltersByGivenKeyFigureIdentifiersParamIdentifiers());
	}


	public function returnGlobalFilterValuesByGivenCriteriaIdentifiersParamIdentifiers(): Response
	{
		return $this->connector->send(new ReturnGlobalFilterValuesByGivenCriteriaIdentifiersParamIdentifiers());
	}


	/**
	 * @param int $keyFigureConfigId
	 * @param int $page Page
	 * @param int $itemsPerPage The number of raw data items to be returned. The default number of files is 50 and the maximum is 250.
	 */
	public function returnFilteredRawDataForGivenKeyFigure(
		int $keyFigureConfigId,
		?int $page = null,
		?int $itemsPerPage = null,
	): Response
	{
		return $this->connector->send(new ReturnFilteredRawDataForGivenKeyFigure($keyFigureConfigId, $page, $itemsPerPage));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $keyFigureConfigId
	 * @param int $page Page
	 * @param int $itemsPerPage The number of raw data items to be returned. The default number of files is 50 and the maximum is 250.
	 */
	public function returnFilteredRawDataForGivenKeyFigureDuplicate1(
		int $keyFigureConfigId,
		?int $page = null,
		?int $itemsPerPage = null,
	): Response
	{
		return $this->connector->send(new ReturnFilteredRawDataForGivenKeyFigure($keyFigureConfigId, $page, $itemsPerPage));
	}


	/**
	 * @param int $keyFigureConfigId
	 * @param string $spreadsheetUrl The URL pointing to the spreadsheet
	 * @param array $columnsToExport An array containing the columns from raw data which will be exported
	 * @param string $startingCell The top-left cell inside the spreadsheet from which the export will fill data
	 */
	public function exportRawDataOfGivenKeyFigureToSpreadsheetGoogleMicrosoft(
		int $keyFigureConfigId,
		string $spreadsheetUrl,
		array $columnsToExport,
		string $startingCell,
	): Response
	{
		return $this->connector->send(new ExportRawDataOfGivenKeyFigureToSpreadsheetGoogleMicrosoft($keyFigureConfigId, $spreadsheetUrl, $columnsToExport, $startingCell));
	}


	public function recalculatesOneOrMoreRawDataBasedKeyFiguresByKeyFigureConfigIds(): Response
	{
		return $this->connector->send(new RecalculatesOneOrMoreRawDataBasedKeyFiguresByKeyFigureConfigIds());
	}


	public function searchForKeyFigureCalculationResults(): Response
	{
		return $this->connector->send(new SearchForKeyFigureCalculationResults());
	}


	public function getOrderTypesInStringFormat(): Response
	{
		return $this->connector->send(new GetOrderTypesInStringFormat());
	}


	/**
	 * @param string $dataName Filter that restricts the search result to raw data files e.g. orders,orderItems.
	 * @param string $processStatus Current process status, the status is only changed by internal processing. If this filter is used, the filter dataNames may only contain one value.
	 * @param int $createdAtTimestamp Timestamp from when daily generated raw data are to be filtered. This filter cannot be combined with the following filters: dataNames, processStatus
	 * @param int $itemsPerPage The number of raw data files to be returned. The default number of files is 20 and the maximum is 100.
	 * @param string $sortOrder Defines the sort order, possible values are: asc, desc
	 * @param int $page Page
	 */
	public function getListOfRawDataFiles(
		?string $dataName = null,
		?string $processStatus = null,
		?int $createdAtTimestamp = null,
		?int $itemsPerPage = null,
		?string $sortOrder = null,
		?int $page = null,
	): Response
	{
		return $this->connector->send(new GetListOfRawDataFiles($dataName, $processStatus, $createdAtTimestamp, $itemsPerPage, $sortOrder, $page));
	}


	public function returnsListOfAllSavedConfigurations(): Response
	{
		return $this->connector->send(new ReturnsListOfAllSavedConfigurations());
	}


	/**
	 * @param array $configs Resets all saved raw data configurations with given configs
	 */
	public function resetsAllSavedRawDataConfigurationsWithGivenData(array $configs): Response
	{
		return $this->connector->send(new ResetsAllSavedRawDataConfigurationsWithGivenData($configs));
	}


	public function getListOfAllRawDataCreators(): Response
	{
		return $this->connector->send(new GetListOfAllRawDataCreators());
	}


	/**
	 * @param int $page The page to get. The default page that will be returned is page 1.
	 * @param int $itemsPerPage The number of raw data creators to be displayed per page. The default number of raw data creators per page is 50.
	 */
	public function returnListOfRawDataCreatorsWithTheirConfigurations(int $page, int $itemsPerPage): Response
	{
		return $this->connector->send(new ReturnListOfRawDataCreatorsWithTheirConfigurations($page, $itemsPerPage));
	}


	/**
	 * @param string $path The raw data file path
	 */
	public function getRawDataFileFromTheStorage(string $path): Response
	{
		return $this->connector->send(new GetRawDataFileFromTheStorage($path));
	}


	/**
	 * @param int $dataName
	 * @param array $path List of primary keys of the records to be deleted
	 */
	public function deletesRawDatamodelsThatAreDeletable(int $dataName, array $path): Response
	{
		return $this->connector->send(new DeletesRawDatamodelsThatAreDeletable($dataName, $path));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param string $dataName Filter that restricts the search result to raw data files e.g. orders,orderItems.
	 * @param string $processStatus Current process status, the status is only changed by internal processing. If this filter is used, the filter dataNames may only contain one value.
	 * @param int $createdAtTimestamp Timestamp from when daily generated raw data are to be filtered. This filter cannot be combined with the following filters: dataNames, processStatus
	 * @param int $itemsPerPage The number of raw data files to be returned. The default number of files is 20 and the maximum is 100.
	 * @param string $sortOrder Defines the sort order, possible values are: asc, desc
	 * @param int $page Page
	 */
	public function getListOfRawDataFilesDuplicate2(
		?string $dataName = null,
		?string $processStatus = null,
		?int $createdAtTimestamp = null,
		?int $itemsPerPage = null,
		?string $sortOrder = null,
		?int $page = null,
	): Response
	{
		return $this->connector->send(new GetListOfRawDataFiles($dataName, $processStatus, $createdAtTimestamp, $itemsPerPage, $sortOrder, $page));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param array $configs Resets all saved raw data configurations with given configs
	 */
	public function resetsAllSavedRawDataConfigurationsWithGivenDataDuplicate3(array $configs): Response
	{
		return $this->connector->send(new ResetsAllSavedRawDataConfigurationsWithGivenData($configs));
	}


	/**
	 * @todo Fix duplicated method name
	 */
	public function getListOfAllRawDataCreatorsDuplicate4(): Response
	{
		return $this->connector->send(new GetListOfAllRawDataCreators());
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $page The page to get. The default page that will be returned is page 1.
	 * @param int $itemsPerPage The number of raw data creators to be displayed per page. The default number of raw data creators per page is 50.
	 */
	public function returnListOfRawDataCreatorsWithTheirConfigurationsDuplicate5(int $page, int $itemsPerPage): Response
	{
		return $this->connector->send(new ReturnListOfRawDataCreatorsWithTheirConfigurations($page, $itemsPerPage));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param string $path The raw data file path
	 */
	public function getRawDataFileFromTheStorageDuplicate6(string $path): Response
	{
		return $this->connector->send(new GetRawDataFileFromTheStorage($path));
	}
}
