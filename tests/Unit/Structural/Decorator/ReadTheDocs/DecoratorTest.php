<?php declare(strict_types=1);

namespace DavegTheMighty\DesignPatterns\Test\Unit\Structural\Bridge\ReadTheDocs;

use PHPUnit\Framework\TestCase;

use DavegTheMighty\DesignPatterns\Structural\Decorator\ReadTheDocs\BookingDecorator;
use DavegTheMighty\DesignPatterns\Structural\Decorator\ReadTheDocs\BookingInterface;
use DavegTheMighty\DesignPatterns\Structural\Decorator\ReadTheDocs\DoubleRoomBooking;
use DavegTheMighty\DesignPatterns\Structural\Decorator\ReadTheDocs\ExtraBed;
use DavegTheMighty\DesignPatterns\Structural\Decorator\ReadTheDocs\WiFi;

final class DecoratorTest extends TestCase
{
    public function testBasicDoubleRoomBooking() : void
    {
        $booking = new DoubleRoomBooking();

        $this->assertInstanceOf(
            BookingInterface::class,
            $booking
        );

        $this->assertEquals('Double Room', $booking->getDescription());
        $this->assertEquals(40, $booking->calculatePrice());
    }

    public function testBasicDoubleRoomBookingWithExtraBed() : void
    {
        $booking = new ExtraBed(
            new DoubleRoomBooking()
        );

        $this->assertInstanceOf(
            BookingInterface::class,
            $booking
        );

        $this->assertInstanceOf(
            BookingDecorator::class,
            $booking
        );

        $this->assertEquals('Double Room with extra bed', $booking->getDescription());
        $this->assertEquals(55, $booking->calculatePrice());
    }

    public function testBasicDoubleRoomBookingWithWiFi() : void
    {
        $booking = new WiFi(
            new DoubleRoomBooking()
        );

        $this->assertInstanceOf(
            BookingInterface::class,
            $booking
        );

        $this->assertInstanceOf(
            BookingDecorator::class,
            $booking
        );

        $this->assertEquals('Double Room with Wifi', $booking->getDescription());
        $this->assertEquals(45, $booking->calculatePrice());
    }

    public function testBasicDoubleRoomBookingWithExtraBedWiFi() : void
    {
        $booking = new WiFi(
            new ExtraBed(
                new DoubleRoomBooking()
            )
        );

        $this->assertEquals('Double Room with extra bed with Wifi', $booking->getDescription());
        $this->assertEquals(60, $booking->calculatePrice());
    }
}
