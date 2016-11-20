<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Connection
 *
 * @ORM\Table(name="connection", indexes={@ORM\Index(name="userOneId", columns={"userOneId"}), @ORM\Index(name="userTwoId", columns={"userTwoId"}), @ORM\Index(name="actionUserId", columns={"actionUserId"})})
 * @ORM\Entity
 */
class Connection
{
    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var \MyApp\UserBundle\Entity\User
     *
     * @ORM\OneToOne(targetEntity="MyApp\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="userOneId", referencedColumnName="userId", unique=true)
     * })
     */
    private $useroneid;

    /**
     * @var \MyApp\UserBundle\Entity\User
     *
     * @ORM\OneToOne(targetEntity="MyApp\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="userTwoId", referencedColumnName="userId", unique=true)
     * })
     */
    private $usertwoid;

    /**
     * @var \MyApp\UserBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="MyApp\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="actionUserId", referencedColumnName="userId")
     * })
     */
    private $actionuserid;


}

