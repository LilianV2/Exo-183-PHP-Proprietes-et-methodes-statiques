<?php

class VOD
{
    private array $movies;
    private int $price;
    private static int $TotalSubscribers = 20;

    public function __construct(){
        $this->movies = ["Interstellar","Gravity","Shutter Island","Mommy","Avatar"];
        $this->price = 10;
        self::$TotalSubscribers;
    }

    /**
     * @return array
     */
    public function getMovies(): array
    {
        return $this->movies;
    }

    /**
     * @param array $movies
     */
    public function setMovies(array $movies): void
    {
        $this->movies = $movies;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @param int $price
     */
    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    /**
     * @return int
     */
    public static function getTotalSubscribers(): int
    {
        return self::$TotalSubscribers;
    }

    /**
     * @param int $TotalSubscribers
     */
    public static function setTotalSubscribers(int $TotalSubscribers): void
    {
        self::$TotalSubscribers = $TotalSubscribers;
    }

    public static function addAbo(int $totalSubscribers) : void
    {
        self::$TotalSubscribers = $totalSubscribers;
    }

    public static function getAbo(): int
    {
        return self::$TotalSubscribers++;
    }
}