<?php declare(strict_types=1);
/**
 * e-Arc Framework - the explicit Architecture Framework
 *
 * @package earc/data-default-setup
 * @link https://github.com/Koudela/eArc-data-default-setup/
 * @copyright Copyright (c) 2019-2021 Thomas Koudela
 * @license http://opensource.org/licenses/MIT MIT License
 */

namespace eArc\DataDefaultSetup;

use BootstrapEArcData;
use eArc\Data\ParameterInterface as DataParameter;
use eArc\DataElasticsearch\ElasticsearchDataBridge;
use eArc\DataFilesystem\FilesystemDataBridge;
use eArc\DataFilesystem\ParameterInterface as FileSystemParameter;
use eArc\DataPrimaryKeyGenerator\ParameterInterface as PrimaryKeyGeneratorParameter;
use eArc\DataPrimaryKeyGenerator\PrimaryKeyGenerator;
use eArc\DataRedis\RedisDataBridge;

abstract class Initializer
{
    public static function init(): void
    {
        BootstrapEArcData::init();

        di_set_param(PrimaryKeyGeneratorParameter::INFRASTRUCTURE, PrimaryKeyGenerator::USE_REDIS);

        self::setAdditionalParameter();

        di_tag(DataParameter::TAG_ON_LOAD, RedisDataBridge::class);
        di_tag(DataParameter::TAG_ON_LOAD, FilesystemDataBridge::class);

        di_tag(DataParameter::TAG_ON_PERSIST, RedisDataBridge::class);
        di_tag(DataParameter::TAG_ON_PERSIST, ElasticsearchDataBridge::class);
        di_tag(DataParameter::TAG_ON_PERSIST, FilesystemDataBridge::class);

        di_tag(DataParameter::TAG_ON_REMOVE, RedisDataBridge::class);
        di_tag(DataParameter::TAG_ON_REMOVE, ElasticsearchDataBridge::class);
        di_tag(DataParameter::TAG_ON_REMOVE, FilesystemDataBridge::class);

        di_tag(DataParameter::TAG_ON_FIND, FilesystemDataBridge::class);
        di_tag(DataParameter::TAG_ON_FIND, ElasticsearchDataBridge::class);

        di_tag(DataParameter::TAG_ON_AUTO_PRIMARY_KEY, PrimaryKeyGenerator::class);
    }

    public static function setAdditionalParameter(): void
    {
        di_set_param(FileSystemParameter::DATA_PATH, __DIR__.'/../../../../data/');
    }
}
