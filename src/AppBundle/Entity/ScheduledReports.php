<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ScheduledReports
 *
 * @ORM\Table(name="Scheduled_Reports", indexes={@ORM\Index(name="id_user", columns={"id_user"})})
 * @ORM\Entity
 */
class ScheduledReports
{
    /**
     * @var string
     *
     * @ORM\Column(name="schedule", type="string", length=20, nullable=false)
     */
    private $schedule;

    /**
     * @var integer
     *
     * @ORM\Column(name="template", type="integer", nullable=false)
     */
    private $template;

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=100, nullable=false)
     */
    private $subject;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creation_date", type="datetime", nullable=false)
     */
    private $creationDate = 'CURRENT_TIMESTAMP';

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_scheduled_report", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idScheduledReport;

    /**
     * @var \AppBundle\Entity\Users
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id")
     * })
     */
    private $idUser;



    /**
     * Set schedule
     *
     * @param string $schedule
     *
     * @return ScheduledReports
     */
    public function setSchedule($schedule)
    {
        $this->schedule = $schedule;

        return $this;
    }

    /**
     * Get schedule
     *
     * @return string
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

    /**
     * Set template
     *
     * @param integer $template
     *
     * @return ScheduledReports
     */
    public function setTemplate($template)
    {
        $this->template = $template;

        return $this;
    }

    /**
     * Get template
     *
     * @return integer
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Set subject
     *
     * @param string $subject
     *
     * @return ScheduledReports
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set creationDate
     *
     * @param \DateTime $creationDate
     *
     * @return ScheduledReports
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get creationDate
     *
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Set active
     *
     * @param boolean $active
     *
     * @return ScheduledReports
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Get idScheduledReport
     *
     * @return integer
     */
    public function getIdScheduledReport()
    {
        return $this->idScheduledReport;
    }

    /**
     * Set idUser
     *
     * @param \AppBundle\Entity\Users $idUser
     *
     * @return ScheduledReports
     */
    public function setIdUser(\AppBundle\Entity\Users $idUser = null)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return \AppBundle\Entity\Users
     */
    public function getIdUser()
    {
        return $this->idUser;
    }
}
