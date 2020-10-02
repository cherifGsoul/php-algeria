<?php

namespace Cherif\Algeria\Commune;

final class Commune
{
    /**
     * @var string
     */
    private string $onsCode;

    private function __construct(string $onsCode)
    {
        $this->onsCode = $onsCode;
    }

    /**
     * @return Commune
     */
    public static function fromOnsCode(string $onsCode): Commune
    {
        $commune = new Commune($onsCode);
        return $commune;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->onsCode;
    }

    public function equals(Commune $other): bool
    {
        return $this->onsCode === $other->onsCode;
    }
}
