<?php
/**
 * InlineResponse20044
 *
 * PHP version 5
 *
 * @category Class
 * @package  com.spoonacular.client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * spoonacular API
 *
 * The spoonacular Nutrition, Recipe, and Food API allows you to access over 380,000 recipes, thousands of ingredients, 800,000 food products, and 100,000 menu items. Our food ontology and semantic recipe search engine makes it possible to search for recipes using natural language queries, such as \"gluten free brownies without sugar\" or \"low fat vegan cupcakes.\" You can automatically calculate the nutritional information for any recipe, analyze recipe costs, visualize ingredient lists, find recipes for what's in your fridge, find recipes based on special diets, nutritional requirements, or favorite ingredients, classify recipes into types and cuisines, convert ingredient amounts, or even compute an entire meal plan. With our powerful API, you can create many kinds of food and especially nutrition apps.  Special diets/dietary requirements currently available include: vegan, vegetarian, pescetarian, gluten free, grain free, dairy free, high protein, whole 30, low sodium, low carb, Paleo, ketogenic, FODMAP, and Primal.
 *
 * The version of the OpenAPI document: 1.0
 * Contact: mail@spoonacular.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace com.spoonacular.client\com.spoonacular.client.model;

use \ArrayAccess;
use \com.spoonacular.client\ObjectSerializer;

/**
 * InlineResponse20044 Class Doc Comment
 *
 * @category Class
 * @package  com.spoonacular.client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InlineResponse20044 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_200_44';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'paired_wines' => 'string[]',
        'pairing_text' => 'string',
        'product_matches' => '\com.spoonacular.client\com.spoonacular.client.model\InlineResponse20044ProductMatches[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'paired_wines' => null,
        'pairing_text' => null,
        'product_matches' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'paired_wines' => 'pairedWines',
        'pairing_text' => 'pairingText',
        'product_matches' => 'productMatches'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'paired_wines' => 'setPairedWines',
        'pairing_text' => 'setPairingText',
        'product_matches' => 'setProductMatches'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'paired_wines' => 'getPairedWines',
        'pairing_text' => 'getPairingText',
        'product_matches' => 'getProductMatches'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['paired_wines'] = isset($data['paired_wines']) ? $data['paired_wines'] : null;
        $this->container['pairing_text'] = isset($data['pairing_text']) ? $data['pairing_text'] : null;
        $this->container['product_matches'] = isset($data['product_matches']) ? $data['product_matches'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['paired_wines'] === null) {
            $invalidProperties[] = "'paired_wines' can't be null";
        }
        if ($this->container['pairing_text'] === null) {
            $invalidProperties[] = "'pairing_text' can't be null";
        }
        if ((mb_strlen($this->container['pairing_text']) < 1)) {
            $invalidProperties[] = "invalid value for 'pairing_text', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['product_matches'] === null) {
            $invalidProperties[] = "'product_matches' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets paired_wines
     *
     * @return string[]
     */
    public function getPairedWines()
    {
        return $this->container['paired_wines'];
    }

    /**
     * Sets paired_wines
     *
     * @param string[] $paired_wines paired_wines
     *
     * @return $this
     */
    public function setPairedWines($paired_wines)
    {
        $this->container['paired_wines'] = $paired_wines;

        return $this;
    }

    /**
     * Gets pairing_text
     *
     * @return string
     */
    public function getPairingText()
    {
        return $this->container['pairing_text'];
    }

    /**
     * Sets pairing_text
     *
     * @param string $pairing_text pairing_text
     *
     * @return $this
     */
    public function setPairingText($pairing_text)
    {

        if ((mb_strlen($pairing_text) < 1)) {
            throw new \InvalidArgumentException('invalid length for $pairing_text when calling InlineResponse20044., must be bigger than or equal to 1.');
        }

        $this->container['pairing_text'] = $pairing_text;

        return $this;
    }

    /**
     * Gets product_matches
     *
     * @return \com.spoonacular.client\com.spoonacular.client.model\InlineResponse20044ProductMatches[]
     */
    public function getProductMatches()
    {
        return $this->container['product_matches'];
    }

    /**
     * Sets product_matches
     *
     * @param \com.spoonacular.client\com.spoonacular.client.model\InlineResponse20044ProductMatches[] $product_matches product_matches
     *
     * @return $this
     */
    public function setProductMatches($product_matches)
    {
        $this->container['product_matches'] = $product_matches;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

