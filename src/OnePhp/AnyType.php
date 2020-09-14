<?php

namespace OnePhp;

class AnyType {

    /**
     * @var array
     */
    private $data = [];

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * @param $name
     * @param $arguments
     * @return mixed|AnyType
     */
    public function __call($name, $arguments) {
        if(preg_match('/^get(.+)$/', $name, $m)) {
            $key = $this->snakeCaseUpper($m[1]);

            // check if exists
            if( ! array_key_exists($key, $this->data)) {
                throw new \RuntimeException(sprintf(
                    'Method "%s" doesn\'t exists!',
                    $name
                ));
            }

            // check for children
            if(is_array($this->data[$key])) {
                return new AnyType($this->data[$key]);
            }

            return $this->data[$key];
        }
    }

    /**
     * Converts 'ModelName' to 'MODEL_NAME'.
     * @param string $word
     * @return string
     */
    private function snakeCaseUpper(string $word) : string
    {
        $tableized = preg_replace('~(?<=\\w)([A-Z])~u', '_$1', $word);

        if ($tableized === null) {
            throw new \RuntimeException(sprintf(
                'preg_replace returned null for value "%s"',
                $word
            ));
        }

        return mb_strtoupper($tableized);
    }
}
