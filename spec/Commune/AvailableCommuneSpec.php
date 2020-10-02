<?php

namespace spec\Cherif\Algeria\Commune;

use Cherif\Algeria\Commune\AvailableCommune;
use Cherif\Algeria\Commune\Commune;
use Cherif\Algeria\Wilaya\Wilaya;
use PhpSpec\ObjectBehavior;

class AvailableCommuneSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedThrough('from', [Commune::fromOnsCode('0101'), 'Adrar', Wilaya::fromCode('01')]);
    }

    function it_has_a_commune()
    {
        $this->getCommune()->shouldReturnAnInstanceOf(Commune::class);
    }

    function it_has_a_name()
    {
        $this->getName()->shouldReturn('Adrar');
    }

    function it_has_wilaya()
    {
        $this->getWilaya()->shouldReturnAnInstanceOf(Wilaya::class);
    }

    function it_knows_when_is_in_wilaya()
    {
        $this->shouldBeInWilaya(Wilaya::fromCode('01'));
    }
    
}
