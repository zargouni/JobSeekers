<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Skill
 *
 * @ORM\Table(name="skill", indexes={@ORM\Index(name="userId", columns={"userId"})})
 * @ORM\Entity
 */
class Skill
{
    /**
     * @var integer
     *
     * @ORM\Column(name="skillId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $skillid;

    /**
     * @var string
     *
     * @ORM\Column(name="skillName", type="string", length=20, nullable=false)
     */
    private $skillname;

    /**
     * @var integer
     *
     * @ORM\Column(name="skillPoints", type="integer", nullable=false)
     */
    private $skillpoints;

    /**
     * @var \MyApp\UserBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="MyApp\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="userId", referencedColumnName="userId")
     * })
     */
    private $userid;


}

