<?php
namespace Entity;
class BaseEntity{

  const __ = '__';

  /**
   * @Id
   * @Column(type="integer", nullable=false)
   * @GeneratedValue(strategy="AUTO")
   */
  public $id;

  /**
   * @Column(type="integer", nullable=true)
   */
  public $create_at;

  /**
   * @Column(type="integer", nullable=true)
   */
  public $update_at;

  public function __construct(){
    $this->create_at = time();
    $this->update_at = time();
  }

  public function call($name, $method = 'get', $params = [], $em) {
    $name = self::__ . $method . self::__  . $name;
    if(method_exists($this, $name)) {
      return $this->$name($params, $em);
    } else {
      return false;
    }
  }

  public function __put__add($params = [], $em) {
    foreach ($params as $key => $value) {
      if(property_exists($this, $key)) {
        $this->$key = $value;
      }
    }
    // echo json_encode($this);
    $em->persist($this);
    $em->flush();

    return $this->__mask();
  }

  public function __remove($params = []) {
    
  }

  public function __edit($params = []) {
    
  }

  public function __list($params = []) {
    
  }

  public function __detail($params = []) {
    
  }

  public function __mask() {
    return $this;
  }

  public function getMid(){
    if($this->id !== NULL){
      $str = (string)(1000000000 + $this->id);
      return substr($str, 1);
    }
    else
      return FALSE;
  }
}
