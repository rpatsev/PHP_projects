<?php 

/**
* @Entity
* @Table(name="posts")
*/


class Post {
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
}
