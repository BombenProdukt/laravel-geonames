<?php

declare(strict_types=1);

namespace BombenProdukt\GeoNames;

use Illuminate\Support\Facades\Facade;

/**
 * @method static string getAdministrativeCodeModel()
 * @method static string getAdministrativeCodeTableName()
 * @method static string getAlternateNameModel()
 * @method static string getAlternateNameTableName()
 * @method static string getCityModel()
 * @method static string getCityTableName()
 * @method static string getContinentModel()
 * @method static string getContinentTableName()
 * @method static string getCountryModel()
 * @method static string getCountryTableName()
 * @method static string getDivisionModel()
 * @method static string getDivisionTableName()
 * @method static string getFeatureCodeModel()
 * @method static string getFeatureCodeTableName()
 * @method static string getLanguageModel()
 * @method static string getLanguageTableName()
 * @method static string getPostalCodeModel()
 * @method static string getPostalCodeTableName()
 * @method static string getTimeZoneModel()
 * @method static string getTimeZoneTableName()
 */
final class GeoNames extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return ConfigurationInterface::class;
    }
}
