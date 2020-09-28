<?php

namespace One;

use Adbar\Dot;
use ArrayIterator;

/**
 * Class Resource
 * @package One
 *
 * @method mixed|Resource add($keys, $value = null)
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
    public function __construct(array $data)
    {
        $this->dot = new Dot($data);
    }

    /**
     * @param $name
     * @param $args
     * @return mixed|Resource
     */
    public function __call($name, $args)
    {
        $result = call_user_func_array([$this->dot, $name], $args);

        if (is_array($result)) {
            return new Resource($result);
        }

        return $result;
    }

    /**
     * Get Resource indexed by given string
     *
     * @param  string  $by
     * @param  null  $key
     * @return Resource
     * @throws \Exception
     */
    public function getIndexedBy(string $by, $key = null): Resource
    {
        $data = $this->dot->get($key);

        if (!is_array($data)) {
            throw new \Exception('Fetched data are not type of array!');
        }

        $result = [];

        foreach ($data as $row) {
            if (!array_key_exists($by, $row)) {
                throw new \Exception('Requested index %s doesn\'t in fetched array!');
            }

            $result[$row[$by]] = $row;
        }

        return new Resource($result);
    }

    /**
     * Return all the stored items
     *
     * @return Resource[]
     */
    public function all(): array
    {
        $data = $this->dot->all();

        $result = [];
        foreach ($data as $row) {
            $result[] = new Resource($row);
        }

        return $result;
    }

    /**
     * Get an iterator for the stored items
     *
     * @return ArrayIterator
     */
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->all());
    }

    /**
     * @param mixed $key
     * @return array
     */
    public function toArray($key = null): array {
        $data = $this->dot->get($key);

        if (is_array($data)) return $data;

        return [$data];
    }
}
