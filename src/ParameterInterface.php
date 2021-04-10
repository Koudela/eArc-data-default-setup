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

interface ParameterInterface
{
    const REDIS_HASH_KEY_PREFIX = \eArc\DataRedis\ParameterInterface::HASH_KEY_PREFIX;
    const REDIS_CONNECTION = \eArc\DataRedis\ParameterInterface::REDIS_CONNECTION;
    const FILESYSTEM_DATA_PATH = \eArc\DataFilesystem\ParameterInterface::DATA_PATH;
    const KEY_GENERATOR_DEFAULT_INTERFACE = \eArc\DataPrimaryKeyGenerator\ParameterInterface::DEFAULT_INTERFACE;
    const KEY_GENERATOR_DIR_NAME_POSTFIX = \eArc\DataPrimaryKeyGenerator\ParameterInterface::DIR_NAME_POSTFIX;
    const KEY_GENERATOR_HASH_KEY_NAME = \eArc\DataPrimaryKeyGenerator\ParameterInterface::HASH_KEY_NAME;
    const KEY_GENERATOR_REDIS_CONNECTION = \eArc\DataPrimaryKeyGenerator\ParameterInterface::REDIS_CONNECTION;
    const ELASTICSEARCH_CLIENT_HOSTS = \eArc\DataElasticsearch\ParameterInterface::CLIENT_HOSTS;
    const ELASTICSEARCH_INDEX_PREFIX = \eArc\DataElasticsearch\ParameterInterface::INDEX_PREFIX;
    const ELASTICSEARCH_WHITELIST = \eArc\DataElasticsearch\ParameterInterface::WHITELIST;
    const ELASTICSEARCH_BLACKLIST = \eArc\DataElasticsearch\ParameterInterface::BLACKLIST;
}
