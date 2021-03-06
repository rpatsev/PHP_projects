<?php 

/**
* @Entity
* @HasLifecycleCallbacks
* @Table(name="posts")
*/


class Post {
    /**
    * @Column(type="date")
    */
    private $createdAt;
    /**
	* @Id
	* @GeneratedValue
	* @Column(type="integer")
	*/
	private $id;
	/**
	* @Column
	*/
	private $title;
	/**
	* @ManyToOne(targetEntity="User", inversedBy = "posts")
	*/
	private $user;

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
     * Set title
     *
     * @param string $title
     *
     * @return Post
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set user
     *
     * @param \User $user
     *
     * @return Post
     */
    public function setUser(\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Post
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
    /**
    * @PrePersist
    */

    public function setInitialDate(){
        $this->setCreatedAt(new DateTime);
    }

}
