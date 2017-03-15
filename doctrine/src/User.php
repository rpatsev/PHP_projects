<?php 

/**
* @Entity
* @Table(name="users")
*/

class User {
	/**
	* @Column(type="integer")
	* @Id
	* @GeneratedValue
	*/
	private $id;
	/**
	* @Column(length=30, nullable=true)
	*/
	private $name;
	/**
	* @Column(type="integer")
	*/
	private $age;
	/**
	* @OneToMany(targetEntity="Post", mappedBy="user")
	*/
	private $posts;
	public function getName($value=''){

	}


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
     * Set name
     *
     * @param string $name
     *
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Set age
     *
     * @param integer $age
     *
     * @return User
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return integer
     */
    public function getAge()
    {
        return $this->age;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->posts = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add post
     *
     * @param \Post $post
     *
     * @return User
     */
    public function addPost(\Post $post)
    {
        $this->posts[] = $post;

        return $this;
    }

    /**
     * Remove post
     *
     * @param \Post $post
     */
    public function removePost(\Post $post)
    {
        $this->posts->removeElement($post);
    }

    /**
     * Get posts
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPosts()
    {
        return $this->posts;
    }
}
