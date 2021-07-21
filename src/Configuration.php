<?php

namespace Hallewood\AppleHealthInsights;

use Symfony\Component\Yaml\Yaml;

class Configuration
{
    /**
     * The configuration data
     */
    private array $data;

    /**
     * Constructs the configutation
     *
     * @param string $path The relative path to the configuration file
     */
    public function __construct (string $path) {
        $this->data = Yaml::parseFile($path);
    }

    /**
     * Gets the data from a configuration key
     *
     * @param string|array|int|null $key
     * @return mixed
     */
    public function get (string|array|int|null $key = null) : mixed {
        return data_get($this->data, $key);
    }

    /**
     * Sets the data of a configuration key
     *
     * @param string|array|int $key
     * @param mixed $value
     * @return mixed
     */
    public function set(string|array|int $key, mixed $value = null) {
        return data_set($this->data, $key, $value);
    }
}
