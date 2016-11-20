<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Profile
 *
 * @ORM\Table(name="profile")
 * @ORM\Entity
 */
class Profile
{
    /**
     * @var string
     *
     * @ORM\Column(name="professionalField", type="string", length=20, nullable=false)
     */
    private $professionalfield;

    /**
     * @var string
     *
     * @ORM\Column(name="currentJob", type="string", length=20, nullable=false)
     */
    private $currentjob;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="text", length=65535, nullable=false)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="summary", type="text", length=65535, nullable=false)
     */
    private $summary;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=50, nullable=false)
     */
    private $language;

    /**
     * @var string
     *
     * @ORM\Column(name="cv", type="string", length=50, nullable=false)
     */
    private $cv;

    /**
     * @var string
     *
     * @ORM\Column(name="interests", type="text", length=65535, nullable=false)
     */
    private $interests;

    /**
     * @var integer
     *
     * @ORM\Column(name="profilePoints", type="integer", nullable=false)
     */
    private $profilepoints;

    /**
     * @var integer
     *
     * @ORM\Column(name="flag", type="integer", nullable=false)
     */
    private $flag;

    /**
     * @var string
     *
     * @ORM\Column(name="education", type="text", length=65535, nullable=false)
     */
    private $education;

    /**
     * @var string
     *
     * @ORM\Column(name="experience", type="text", length=65535, nullable=false)
     */
    private $experience;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="blob", length=65535, nullable=false)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="contactEmail", type="string", length=50, nullable=false)
     */
    private $contactemail;

    /**
     * @var \MyApp\UserBundle\Entity\User
     *
     * @ORM\OneToOne(targetEntity="MyApp\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="profileId", referencedColumnName="userId", unique=true)
     * })
     */
    private $profileid;


}

