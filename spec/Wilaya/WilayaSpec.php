<?php

namespace spec\Cherif\Algeria\Wilaya;

use Cherif\Algeria\Wilaya\Wilaya;
use PhpSpec\ObjectBehavior;

class WilayaSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedThrough('fromCode', ['01']);
    }

    function it_represents_wilaya_code()
    {
        $this->__toString()->shouldReturn('01');
    }

    function it_compare_with_other_wilaya()
    {
        $this->equals(Wilaya::fromCode('01'))->shouldReturn(true);
        $this->equals(Wilaya::fromCode('02'))->shouldReturn(false);
    }
}
