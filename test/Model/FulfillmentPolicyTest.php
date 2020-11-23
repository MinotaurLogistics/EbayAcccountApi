<?php
/**
 * FulfillmentPolicyTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\EbayAccountClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Account API
 *
 * The Account API gives sellers the ability to configure their eBay seller accounts, including the seller's policies (the Fulfillment Policy, Payment Policy, and Return Policy), opt in and out of eBay seller programs, configure sales tax tables, and get account information. For details on the availability of the methods in this API, see Account API requirements and restrictions.
 *
 * OpenAPI spec version: v1.6.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.16
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the model.
 */

namespace Swagger\EbayAccountClient;

/**
 * FulfillmentPolicyTest Class Doc Comment
 *
 * @category    Class
 * @description This root response container defines a seller&#39;s fulfillment policy for a specific marketplace and category type. &lt;b&gt;fulfillmentPolicy&lt;/b&gt; encapsulates a seller&#39;s terms for fulfilling an order and includes the shipping carriers and services used for shipment and time the seller takes to ship an order. While each seller must define at least one fulfillment policy for every marketplace into which they sell, sellers can define multiple fulfillment policies for a single marketplace by specifying different configurations for the unique policies.
 * @package     Swagger\EbayAccountClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class FulfillmentPolicyTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test "FulfillmentPolicy"
     */
    public function testFulfillmentPolicy()
    {
    }

    /**
     * Test attribute "category_types"
     */
    public function testPropertyCategoryTypes()
    {
    }

    /**
     * Test attribute "description"
     */
    public function testPropertyDescription()
    {
    }

    /**
     * Test attribute "freight_shipping"
     */
    public function testPropertyFreightShipping()
    {
    }

    /**
     * Test attribute "fulfillment_policy_id"
     */
    public function testPropertyFulfillmentPolicyId()
    {
    }

    /**
     * Test attribute "global_shipping"
     */
    public function testPropertyGlobalShipping()
    {
    }

    /**
     * Test attribute "handling_time"
     */
    public function testPropertyHandlingTime()
    {
    }

    /**
     * Test attribute "local_pickup"
     */
    public function testPropertyLocalPickup()
    {
    }

    /**
     * Test attribute "marketplace_id"
     */
    public function testPropertyMarketplaceId()
    {
    }

    /**
     * Test attribute "name"
     */
    public function testPropertyName()
    {
    }

    /**
     * Test attribute "pickup_drop_off"
     */
    public function testPropertyPickupDropOff()
    {
    }

    /**
     * Test attribute "shipping_options"
     */
    public function testPropertyShippingOptions()
    {
    }

    /**
     * Test attribute "ship_to_locations"
     */
    public function testPropertyShipToLocations()
    {
    }
}
