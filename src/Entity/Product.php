<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductRepository::class)
 */
class Product
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="integer")
     */
    private $unitNumber;
    /**
     * @ORM\Column(type="integer")
     */
    private $unitPrice;
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $soldUnit;
    /**
     * @ORM\Column(type="datetime_immutable")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime_immutable", nullable=true)
     */
    private $updatedAt;

    /**
     * @ORM\ManyToMany(targetEntity=Category::class, inversedBy="products")
     */
    private $HisCategory;

    /**
     * @ORM\ManyToOne(targetEntity=TheBrand::class, inversedBy="products")
     * @ORM\JoinColumn(nullable=false)
     */
    private $hisBrand;

    /**
     * @ORM\OneToMany(targetEntity=SalesHistory::class, mappedBy="product")
     */
    private $salesHistories;



    public function __construct()
    {
        $this->HisCategory = new ArrayCollection();
        $this->salesHistories = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getUnitPrice(): ?int
    {
        return $this->unitPrice;
    }

    public function setUnitPrice(int $unitPrice): self
    {
        $this->unitPrice = $unitPrice;

        return $this;
    }

    public function getUnitNumber(): ?int
    {
        return $this->unitNumber;
    }

    public function setUnitNumber(int $unitNumber): self
    {
        $this->unitNumber = $unitNumber;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeImmutable $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * @return Collection|Category[]
     */
    public function getHisCategory(): Collection
    {
        return $this->HisCategory;
    }

    public function addHisCategory(Category $hisCategory): self
    {
        if (!$this->HisCategory->contains($hisCategory)) {
            $this->HisCategory[] = $hisCategory;
        }

        return $this;
    }

    public function removeHisCategory(Category $hisCategory): self
    {
        $this->HisCategory->removeElement($hisCategory);

        return $this;
    }

    public function getHisBrand(): ?TheBrand
    {
        return $this->hisBrand;
    }

    public function setHisBrand(?TheBrand $hisBrand): self
    {
        $this->hisBrand = $hisBrand;

        return $this;
    }

    /**
     * @return Collection|SalesHistory[]
     */
    public function getSalesHistories(): Collection
    {
        return $this->salesHistories;
    }

    public function addSalesHistory(SalesHistory $salesHistory): self
    {
        if (!$this->salesHistories->contains($salesHistory)) {
            $this->salesHistories[] = $salesHistory;
            $salesHistory->setProduct($this);
        }

        return $this;
    }

    public function removeSalesHistory(SalesHistory $salesHistory): self
    {
        if ($this->salesHistories->removeElement($salesHistory)) {
            // set the owning side to null (unless already changed)
            if ($salesHistory->getProduct() === $this) {
                $salesHistory->setProduct(null);
            }
        }

        return $this;
    }

    public function getSoldUnit(): ?int
    {
        return $this->soldUnit;
    }

    public function setSoldUnit(?int $soldUnit): self
    {
        $this->soldUnit = $soldUnit;

        return $this;
    }
    public  function  getFormattedPrice():string{
        return number_format($this->getUnitPrice(),0,'',' ');
    }
}
