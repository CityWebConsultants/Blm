<?php
/**
 * The MIT License (MIT)
 * Copyright (c) 2014 Matt Cannon
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"),
 * to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense,
 * and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM,
 * DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH
 * THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */
namespace MattCannon\Blm\Interfaces;

use Illuminate\Support\Collection;

/**
 * Interface PropertyObjectInterface
 *
 * This is a convenience object containing all of the standard rightmove fields, plus some additional convenience methods.
 *
 * You can access details like this:
 * ```php
 * $agentRef = $property->agentRef;
 * ```
 *
 * To access an array of epcs:
 * ```php
 * $epcs = $property->getEpcEntries();
 * ```
 *
 * @package MattCannon\Blm\Interfaces
 * @property \Illuminate\Support\Collection $features
 * @property \Illuminate\Support\Collection $images
 * @property \Illuminate\Support\Collection $epcs
 * @property \Illuminate\Support\Collection $hips
 * @property string $statusId
 * @property string $priceQualifier
 * @property string $publishedFlag
 * @property string $letTypeId
 * @property string $letFurnId
 * @property string $letRentFrequency
 * @property string $tenureTypeId
 * @property string $transTypeId
 * @author Matt Cannon
 */
interface PropertyObjectInterface extends \JsonSerializable
{
    /**
     * Create a new PropertyObject
     * @param $attributes array
     * @api
     */
    public function __construct(array $attributes = []);
    /**
     * get all of the non-blank features as a collection.
     * @return \Illuminate\Support\Collection
     * @api
     */
    public function getFeatures();

    /**
     * get all of the non-blank images as a collection.
     * @return \Illuminate\Support\Collection
     * @api
     */
    public function getImages();

    /**
     * Get all non-empty epc properties as a collection
     * @return Collection
     * @api
     */
    public function getEpcEntries();
    
    /**
     * Get all non-empty floorplan properties as a collection
     * @return Collection
     * @api
     */
    public function getFloorplanEntries();

    /**
     * (PHP 5 >= 5.4.0)
     * Specify data which should be serialized to JSON
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by __json_encode__,
     *               which is a value of any type other than a resource.
     * @api
     */
    public function jsonSerialize();

    /**
     * returns array of property details, images, epcs, and features
     * @return array
     * @api
     */
    public function toArray();
    /**
     * returns current property status as a string
     * @return string
     * @api
     */
    public function getStatusId();
    /**
     * returns current price qualifier
     * @return string
     * @api
     */
    public function getPriceQualifier();
    /**
     * returns current published status
     * @return string
     * @api
     */
    public function getPublishedFlag();
    /**
     * returns let type
     * @return string
     * @api
     */
    public function getLetTypeId();
    /**
     * returns property furnishing type
     * @return string
     * @api
     */
    public function getLetFurnId();
    /**
     * returns frequency of let.
     * @return string
     * @api
     */
    public function getLetRentFrequency();
    /**
     * returns tenure type
     * @return string
     * @api
     */
    public function getTenureTypeId();

    /**
     * returns property type (Resale | Lettings)
     * @return string
     * @api
     */
    public function getTransTypeId();
}
