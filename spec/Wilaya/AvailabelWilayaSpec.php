<?php

namespace spec\Cherif\Algeria\Wilaya;

use Cherif\Algeria\Commune\Commune;
use Cherif\Algeria\Wilaya\AvailabelWilaya;
use Cherif\Algeria\Wilaya\Wilaya;
use PhpSpec\ObjectBehavior;

class AvailabelWilayaSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedThrough('from', [Wilaya::fromCode('01'), 'Adrar']);
    }

    function it_has_a_name()
    {
        $this->getName()->shouldReturn('Adrar');
    }

    function it_has_a_code()
    {
        $this->getWilaya()->shouldReturnAnInstanceOf(Wilaya::class);
    }

    function it_adds_communes()
    {
        $this->addCommune(Commune::fromOnsCode('0101'));
        $this->shouldHaveCommune(Commune::fromOnsCode('0101'));
        $this->shouldHaveCommunes();
    }

    function it_removes_commune()
    {
        $this->addCommune(Commune::fromOnsCode('0101'));
        $this->removeCommune(Commune::fromOnsCode('0101'));
        $this->shouldNotHaveCommune(Commune::fromOnsCode('0101'));
    }
}
