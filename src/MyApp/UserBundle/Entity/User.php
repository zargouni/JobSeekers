<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;


/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=false)
     */
    protected $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=50, nullable=false)
     */
    protected $password;

    /**
     * @var string
     *
     * @ORM\Column(name="firstName", type="string", length=50, nullable=false)
     */
    protected $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastName", type="string", length=50, nullable=false)
     */
    protected $lastname;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    protected $type;

    /**
     * @var string
     *
     * @ORM\Column(name="paypalAddress", type="string", length=50, nullable=false)
     */
    protected $paypaladdress;

    /**
     * @var string
     *
     * @ORM\Column(name="birthdate", type="string", length=50, nullable=false)
     */
    protected $birthdate;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="MyApp\UserBundle\Entity\Group", inversedBy="id")
     * @ORM\JoinTable(name="membership",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="groupId", referencedColumnName="groupId")
     *   }
     * )
     */
    protected $groupid;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->groupid = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

