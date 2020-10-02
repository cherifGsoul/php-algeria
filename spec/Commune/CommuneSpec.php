<?php

namespace spec\Cherif\Algeria\Commune;

use Cherif\Algeria\Commune\Commune;
use PhpSpec\ObjectBehavior;

class CommuneSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedThrough('fromOnsCode', ['0101']);
    }

    function it_represents_a_commune_with_ons_code()
    {
        $this->__toString()->shouldReturn('0101');
    }

    function it_compare_with_other_commune()
    {
        $this->equals(Commune::fromOnsCode('0101'))->shouldReturn(true);
        $this->equals(Commune::fromOnsCode('0201'))->shouldReturn(false);
    }
}
