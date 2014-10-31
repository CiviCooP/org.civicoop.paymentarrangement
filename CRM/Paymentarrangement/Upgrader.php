<?php

/**
 * Collection of upgrade steps
 */
class CRM_Paymentarrangement_Upgrader extends CRM_Paymentarrangement_Upgrader_Base {

  public function install() {
    $this->executeCustomDataFile('xml/contribution_payment_arrangement.xml');
    $this->executeCustomDataFile('xml/contact_payment_arrangement.xml');
  }

  public function upgrade_1002() {
    $this->executeCustomDataFile('xml/contact_payment_arrangement.xml');
    return TRUE;
  } 

}
