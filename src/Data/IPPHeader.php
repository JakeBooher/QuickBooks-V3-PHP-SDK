<?php
namespace QuickBooksOnline\API\Data;

/**
 * @xmlNamespace http://schema.intuit.com/finance/v3
 * @xmlType
 * @xmlName IPPHeader
 * @var IPPHeader
 * @xmlDefinition Group Header
 */
class IPPHeader
{


        /**
         * Initializes this object, optionally with pre-defined property values
         *
         * Initializes this object and it's property members, using the dictionary
         * of key/value pairs passed as an optional argument.
         *
         * @param dictionary $keyValInitializers key/value pairs to be populated into object's properties
         * @param boolean    $verbose            specifies whether object should echo warnings
         */
    public function __construct($keyValInitializers = [], $verbose = false)
    {
        foreach ($keyValInitializers as $initPropName => $initPropVal) {
            if (property_exists('IPPHeader', $initPropName) || property_exists('QuickBooksOnline\API\Data\IPPHeader', $initPropName)) {
                    $this->{$initPropName} = $initPropVal;
            } else {
                if ($verbose) {
                        echo "Property does not exist ($initPropName) in class (".get_class($this).')';
                }
            }
        }
    }//end __construct()

    /**
     * @xmlType element
     * @xmlNamespace http://schema.intuit.com/finance/v3
     * @xmlMaxOccurs unbounded
     * @xmlName ColData
     * @var IPPColData
     */
    public $ColData;
}//end class

 // end class IPPHeader
