<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="recording")
 */
class Recording
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $ref;

    /**
     * @ORM\Column(type="string", length=12)
     */
    private $meteo_ref;

    /**
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    private $lat;

    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    private $lon;

    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    private $height;

    /**
     * @ORM\Column(type="datetime")
     */
    private $for_date;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_fetched;

    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    private $temperature;

    /**
     * @ORM\Column(type="integer")
     */
    private $traffic_10_min;

    /**
     * @ORM\Column(type="integer")
     */
    private $traffic_day;

    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    private $pressure;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set ref
     *
     * @param integer $ref
     *
     * @return Recording
     */
    public function setRef($ref)
    {
        $this->ref = $ref;

        return $this;
    }

    /**
     * Get ref
     *
     * @return integer
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * Set meteoRef
     *
     * @param integer $meteoRef
     *
     * @return Recording
     */
    public function setMeteoRef($meteoRef)
    {
        $this->meteo_ref = $meteoRef;

        return $this;
    }

    /**
     * Get meteoRef
     *
     * @return integer
     */
    public function getMeteoRef()
    {
        return $this->meteo_ref;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Recording
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set lat
     *
     * @param string $lat
     *
     * @return Recording
     */
    public function setLat($lat)
    {
        $this->lat = $lat;

        return $this;
    }

    /**
     * Get lat
     *
     * @return string
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * Set lon
     *
     * @param string $lon
     *
     * @return Recording
     */
    public function setLon($lon)
    {
        $this->lon = $lon;

        return $this;
    }

    /**
     * Get lon
     *
     * @return string
     */
    public function getLon()
    {
        return $this->lon;
    }

    /**
     * Set height
     *
     * @param string $height
     *
     * @return Recording
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return string
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set forDate
     *
     * @param \DateTime $forDate
     *
     * @return Recording
     */
    public function setForDate($forDate)
    {
        $this->for_date = $forDate;

        return $this;
    }

    /**
     * Get forDate
     *
     * @return \DateTime
     */
    public function getForDate()
    {
        return $this->for_date;
    }

    /**
     * Set temperature
     *
     * @param string $temperature
     *
     * @return Recording
     */
    public function setTemperature($temperature)
    {
        $this->temperature = $temperature;

        return $this;
    }

    /**
     * Get temperature
     *
     * @return string
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * Set traffic10Min
     *
     * @param integer $traffic10Min
     *
     * @return Recording
     */
    public function setTraffic10Min($traffic10Min)
    {
        $this->traffic_10_min = $traffic10Min;

        return $this;
    }

    /**
     * Get traffic10Min
     *
     * @return integer
     */
    public function getTraffic10Min()
    {
        return $this->traffic_10_min;
    }

    /**
     * Set trafficDay
     *
     * @param integer $trafficDay
     *
     * @return Recording
     */
    public function setTrafficDay($trafficDay)
    {
        $this->traffic_day = $trafficDay;

        return $this;
    }

    /**
     * Get trafficDay
     *
     * @return integer
     */
    public function getTrafficDay()
    {
        return $this->traffic_day;
    }

    /**
     * Set pressure
     *
     * @param string $pressure
     *
     * @return Recording
     */
    public function setPressure($pressure)
    {
        $this->pressure = $pressure;

        return $this;
    }

    /**
     * Get pressure
     *
     * @return string
     */
    public function getPressure()
    {
        return $this->pressure;
    }

    /**
     * Set dateFetched
     *
     * @param \DateTime $dateFetched
     *
     * @return Recording
     */
    public function setDateFetched($dateFetched)
    {
        $this->date_fetched = $dateFetched;

        return $this;
    }

    /**
     * Get dateFetched
     *
     * @return \DateTime
     */
    public function getDateFetched()
    {
        return $this->date_fetched;
    }
}
