<?php

namespace Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Entity\BaseEntity as Base;
/**
 * Product Model
 *
 * @Entity
 * @table(name="cf_product")
 * @author vu le hoang(hoangvu171819@gmail.com)
 */
class Product extends Base{

  /**
   * @Column(type="string", length=256, nullable=true)
   */
  public $name;

  /**
   * @Column(type="integer", nullable=true)
   */
  public $price;

	public function __construct(){
    parent::__construct();
	}

}
?>