<?php namespace App\Repositories;

interface RepositoryInterface
{
    public function fetchAllFlight();
    public function fetchAeroplaneCompany();
    public function fetchAeroplaneModel();
    public function getBooking();
    public function addFlight($data);
    public function getflights();
    public function addBooking($data);
    public function updateCheckin($data);
    public function seatStatus($data);
    public function seatStatusComplete($data);
    public function getPassengerList($data);
}