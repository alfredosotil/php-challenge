<?php

namespace Tests;

use App\Interfaces\CarrierInterface;
use App\Mobile;
use App\Providers\Claro;
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

        $this->provider = \Mockery::mock(Claro::class);
    }

    /** @test */
    public function it_returns_null_when_name_empty()
    {
        $mobile = new Mobile($this->provider);

        $this->assertNull($mobile->makeCallByName(''));
    }

    /** @test */
    public function it_returns_contact_when_name_is_provided()
    {
        $mobile = new Mobile($this->provider);

        $this->assertNotNull($mobile->makeCallByName('alfredo'));
    }

    /** @test */
    public function it_returns_null_when_name_is_not_found()
    {
        $mobile = new Mobile($this->provider);

        $this->assertNull($mobile->makeCallByName('alfredo38'));
    }

}
