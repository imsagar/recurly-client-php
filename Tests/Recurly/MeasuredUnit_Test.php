<?php

require_once(__DIR__ . '/../test_helpers.php');

class Recurly_MeasuredUnitTest extends Recurly_TestCase
{
  public function testGetMeasuredUnit() {
    $this->client->addResponse('GET', '/measured_units/123456', 'measured_units/show-200.xml');

    $measured_unit = Recurly_MeasuredUnit::get(123456, $this->client);

    $this->assertInstanceOf('Recurly_MeasuredUnit', $measured_unit);
    $this->assertEquals(123456, $measured_unit->id);
  }
}
