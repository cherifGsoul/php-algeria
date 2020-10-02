<?php

namespace Cherif\Algeria\Wilaya;

final class Wilaya
{
    private string $code;

    private function __construct(string $code)
    {
        $this->code = $code;
    }

    /**
     * @return Wilaya
     */
    public static function fromCode(string $code): Wilaya
    {
        $wilaya = new Wilaya($code);
        return $wilaya;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->code;
    }

    public function equals(Wilaya $other): bool
    {
        return $this->code === $other->code;
    }

    public function asCode(): string
    {
        return $this->code;
    }
}
