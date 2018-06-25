<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BooksRepository")
 */
class Books
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $book_name;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $published_year;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ISBN;



    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $pages;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return null|string
     */
    public function getBookName(): ?string
    {
        return $this->book_name;
    }

    /**
     * @param string $book_name
     * @return Books
     */
    public function setBookName(string $book_name): self
    {
        $this->book_name = $book_name;

        return $this;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getPublishedYear(): ?\DateTimeInterface
    {
        return $this->published_year;
    }

    /**
     * @param \DateTimeInterface|null $published_year
     * @return Books
     */
    public function setPublishedYear(?\DateTimeInterface $published_year): self
    {
        $this->published_year = $published_year;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getISBN(): ?string
    {
        return $this->ISBN;
    }

    /**
     * @param null|string $ISBN
     * @return Books
     */
    public function setISBN(?string $ISBN): self
    {
        $this->ISBN = $ISBN;

        return $this;
    }


    /**
     * @return int|null
     */
    public function getPages(): ?int
    {
        return $this->pages;
    }

    /**
     * @param int|null $pages
     * @return Books
     */
    public function setPages(?int $pages): self
    {
        $this->pages = $pages;

        return $this;
    }
}
