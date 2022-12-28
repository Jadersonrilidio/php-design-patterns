<?php

namespace Src\Behavioral\Generator;

use Generator;

class SquaredNumberGenerator
{
    private $start;
    private $end;

    public function __construct(int $start, int $end)
    {
        $this->start = $start;
        $this->end = $end;
    }

    public function squaredNumbers(): Generator
    {
        for ($i = $this->start; $i < $this->end; $i++) {
            yield $i => pow($i, 2);
        }
    }

    public function ExaustYields(): void
    {
        foreach ($this->squaredNumbers() as $key => $value) {
            var_dump([$key => $value]);
        }
    }
}
