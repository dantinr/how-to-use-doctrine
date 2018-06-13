<?php


/**
 * @Entity
 * @Table(name="necs_order_info")
 */
class Order
{
	/** @Id @Column(name="order_id",type="integer") @GeneratedValue **/
	private $id;

	/**
	 * @Column(type="string")
	 */
	private $address;
	
	public function getAddress()
	{
		return $this->address;
	}

	public function setAddress($address)
	{
		$this->address = $address;
	}

}