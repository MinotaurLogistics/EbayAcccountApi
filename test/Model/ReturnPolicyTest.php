<?php
/**
 * ReturnPolicyTest
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
 * ReturnPolicyTest Class Doc Comment
 *
 * @category    Class
 * @description Root container that defines the fields for a seller&#39;s return policy. The &lt;b&gt;returnPolicy&lt;/b&gt; encapsulates a seller&#39;s terms for how they handle item returns, the name and description of the policy, and the marketplace and category group(s) to which the return policy is applied.  While each seller must define at least one return policy for every marketplace into which they sell, sellers can define multiple return policies for a single marketplace by specifying different configurations for the unique policies.
 * @package     Swagger\EbayAccountClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ReturnPolicyTest extends \PHPUnit_Framework_TestCase
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
     * Test "ReturnPolicy"
     */
    public function testReturnPolicy()
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
     * Test attribute "extended_holiday_returns_offered"
     */
    public function testPropertyExtendedHolidayReturnsOffered()
    {
    }

    /**
     * Test attribute "international_override"
     */
    public function testPropertyInternationalOverride()
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
     * Test attribute "refund_method"
     */
    public function testPropertyRefundMethod()
    {
    }

    /**
     * Test attribute "restocking_fee_percentage"
     */
    public function testPropertyRestockingFeePercentage()
    {
    }

    /**
     * Test attribute "return_instructions"
     */
    public function testPropertyReturnInstructions()
    {
    }

    /**
     * Test attribute "return_method"
     */
    public function testPropertyReturnMethod()
    {
    }

    /**
     * Test attribute "return_period"
     */
    public function testPropertyReturnPeriod()
    {
    }

    /**
     * Test attribute "return_policy_id"
     */
    public function testPropertyReturnPolicyId()
    {
    }

    /**
     * Test attribute "returns_accepted"
     */
    public function testPropertyReturnsAccepted()
    {
    }

    /**
     * Test attribute "return_shipping_cost_payer"
     */
    public function testPropertyReturnShippingCostPayer()
    {
    }
}
