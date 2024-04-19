<?php

declare(strict_types=1);

namespace christer77\MonTestPack;

class MonTestPack
{
    /**
     * Create a new MonTestPack Instance
     */
    public function __construct()
    {
        // constructor body
    }

    /**
     * Friendly welcome
     *
     * @param string $phrase Phrase to return
     *
     * @return string Returns the phrase passed in
     */
    public function echoPhrase(string $phrase): string
    {
        return $phrase;
    }
}
