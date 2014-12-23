<?php
/**
 * @copyright Copyright (c) 2014 X.commerce, Inc. (http://www.magentocommerce.com)
 */
namespace Magento\TestFramework\CodingStandard\Tool\CodeSniffer;

class WrapperTest extends \PHPUnit_Framework_TestCase
{
    public function testSetValues()
    {
        if (!class_exists('PHP_CodeSniffer_CLI')) {
            $this->markTestSkipped('Code Sniffer is not installed');
        }
        $wrapper = new \Magento\TestFramework\CodingStandard\Tool\CodeSniffer\Wrapper();
        $expected = ['some_key' => 'some_value'];
        $wrapper->setValues($expected);
        $this->assertEquals($expected, $wrapper->getCommandLineValues());
    }
}