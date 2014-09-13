<?php

class CRM_Paymentarrangement_Config {
  
  private static $_singleton;
  
  private $payment_arrangement_group;
  
  private $payment_arrangement_field;
  
  private $payment_arrangement_details_field;
  
  private function __construct() {
    $this->payment_arrangement_group = civicrm_api3('CustomGroup', 'getsingle', array('name' => 'payment_arrangement'));
    $this->payment_arrangement_field = civicrm_api3('CustomField', 'getsingle', array('name' => 'payment_arrangement', 'custom_group_id' => $this->payment_arrangement_group['id']));
    $this->payment_arrangement_details_field = civicrm_api3('CustomField', 'getsingle', array('name' => 'payment_arrangement_details', 'custom_group_id' => $this->payment_arrangement_group['id']));
  }
  
  /**
   * @return CRM_Paymentarrangement_Config
   */
  public static function singleton() {
    if (!self::$_singleton) {
      self::$_singleton = new CRM_Paymentarrangement_Config();
    }
    return self::$_singleton;
  }
  
  public function getPaymentArrangementGroup($key='id') {
    return $this->payment_arrangement_group[$key];
  }
  
  public function getPaymentArrangementField($key='id') {
    return $this->payment_arrangement_field[$key];
  }
  
  public function getPaymentArrangementDetailsField($key='id') {
    return $this->payment_arrangement_details_field[$key];
  }
  
}

