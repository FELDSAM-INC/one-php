<?php

namespace One;

use Adbar\Dot;

/**
 * Class Resource
 * @package One
 *
 * @method mixed|Resource add($keys, $value = null)
 * @method mixed|Resource all()
 * @method mixed|Resource clear($keys = null)
 * @method mixed|Resource delete($keys)
 * @method mixed|Resource flatten($delimiter = '.', $items = null, $prepend = '')
 * @method mixed|Resource get($key = null, $default = null)
 * @method mixed|Resource has($keys)
 * @method mixed|Resource isEmpty($keys = null)
 * @method mixed|Resource merge($key, $value = [])
 * @method mixed|Resource mergeRecursive($key, $value = [])
 * @method mixed|Resource mergeRecursiveDistinct($key, $value = [])
 * @method mixed|Resource pull($key = null, $default = null)
 * @method mixed|Resource push($key, $value = null)
 * @method mixed|Resource replace($key, $value = [])
 * @method mixed|Resource set($keys, $value = null)
 * @method mixed|Resource setArray($items)
 * @method mixed|Resource setReference(array &$items)
 * @method mixed|Resource toJson($key = null, $options = 0)
 * @method mixed|Resource offsetExists($key)
 * @method mixed|Resource offsetGet($key)
 * @method mixed|Resource offsetSet($key, $value)
 * @method mixed|Resource offsetUnset($key)
 * @method mixed|Resource count($key = null)
 * @method mixed|Resource getIterator()
 * @method mixed|Resource jsonSerialize()
 */
class Resource
{
    /**
     * @var Dot
     */
    private $dot;

    /**
     * Resource constructor.
     * @param  array  $data
     */
    public function __construct(array $data) {
        $this->dot = new Dot($data);
    }

    /**
     * @param $name
     * @param $args
     * @return mixed|Resource
     */
    public function __call($name, $args) {
        $result = call_user_func_array([$this->dot, $name], $args);

        if (is_array($result)) {
            return new Resource($result);
        }

        return $result;
    }
}
