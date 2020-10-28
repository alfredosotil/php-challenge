<?php

namespace Tests;

use App\Interfaces\CarrierInterface;
use App\Mobile;
use Mockery as m;
use PHPUnit\Framework\TestCase;

class MobileTest extends TestCase
{

    /**
     * @var CarrierInterface
     */
    private $provider;

    /**
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();

        $this->provider = \Mockery::mock(CarrierInterface::class);
    }

    /** @test */
    public function it_returns_null_when_name_empty()
    {
        $mobile = new Mobile($this->provider);

        $this->assertNull($mobile->makeCallByName(''));
    }

}
