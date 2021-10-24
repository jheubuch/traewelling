<?php

namespace App\Achievements;

interface Achievement
{
    /**
     * Return the title of the achievement.
     * Should be a function to support multiple languages.
     *
     * @return string
     */
    public function getTitle(): string;

    /**
     * Return the title of the achievement.
     * Should be a function to support multiple languages.
     *
     * @return string
     */
    public function getDescription(): string;

    /**
     * Is fired when event is achieved.
     * Can be overloaded in extended class, but should also call parent.
     *
     * @return void
     */
    public function onAchieve(): void;
}
