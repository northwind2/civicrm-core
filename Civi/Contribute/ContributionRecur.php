<?php
/*
 +--------------------------------------------------------------------+
 | CiviCRM version 4.4                                                |
 +--------------------------------------------------------------------+
 | Copyright CiviCRM LLC (c) 2004-2013                                |
 +--------------------------------------------------------------------+
 | This file is a part of CiviCRM.                                    |
 |                                                                    |
 | CiviCRM is free software; you can copy, modify, and distribute it  |
 | under the terms of the GNU Affero General Public License           |
 | Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
 |                                                                    |
 | CiviCRM is distributed in the hope that it will be useful, but     |
 | WITHOUT ANY WARRANTY; without even the implied warranty of         |
 | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
 | See the GNU Affero General Public License for more details.        |
 |                                                                    |
 | You should have received a copy of the GNU Affero General Public   |
 | License and the CiviCRM Licensing Exception along                  |
 | with this program; if not, contact CiviCRM LLC                     |
 | at info[AT]civicrm[DOT]org. If you have questions about the        |
 | GNU Affero General Public License or the licensing of CiviCRM,     |
 | see the CiviCRM license FAQ at http://civicrm.org/licensing        |
 +--------------------------------------------------------------------+
*/

/**
 *
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2013
 *
 * Generated from xml/schema/CRM/Contribute/ContributionRecur.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 */

namespace Civi\Core;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContributionRecur
 *
 * @ORM\Table(name="civicrm_contribution_recur", uniqueConstraints={@ORM\UniqueConstraint(name="UI_contrib_trxn_id", columns={"trxn_id"}),@ORM\UniqueConstraint(name="UI_contrib_invoice_id", columns={"invoice_id"})}, indexes={@ORM\Index(name="index_contribution_status", columns={"contribution_status_id"}),@ORM\Index(name="UI_contribution_recur_payment_instrument_id", columns={"payment_instrument_id"}),@ORM\Index(name="FK_civicrm_contribution_recur_contact_id", columns={"contact_id"}),@ORM\Index(name="FK_civicrm_contribution_recur_payment_processor_id", columns={"payment_processor_id"}),@ORM\Index(name="FK_civicrm_contribution_recur_financial_type_id", columns={"financial_type_id"}),@ORM\Index(name="FK_civicrm_contribution_recur_campaign_id", columns={"campaign_id"})})
 * @ORM\Entity
 */
class ContributionRecur extends \Civi\Core\Entity {

  /**
   * @var integer
   *
   * @ORM\Column(name="id", type="integer", nullable=false)
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="IDENTITY")
   */
  private $id;
    
  /**
   * @var \Civi\Contact\Contact
   *
   * @ORM\ManyToOne(targetEntity="Civi\Contact\Contact")
   * @ORM\JoinColumns({@ORM\JoinColumn(name="contact_id", referencedColumnName="id", onDelete="CASCADE")})
   */
  private $contact;
  
  /**
   * @var float
   *
   * @ORM\Column(name="amount", type="float", nullable=true)
   * 
   */
  private $amount;
  
  /**
   * @var string
   *
   * @ORM\Column(name="currency", type="string", length=3, nullable=false)
   * 
   */
  private $currency = 'NULL';
  
  /**
   * @var string
   *
   * @ORM\Column(name="frequency_unit", type="string", length=8, nullable=false)
   * 
   */
  private $frequencyUnit = 'month';
  
  /**
   * @var integer
   *
   * @ORM\Column(name="frequency_interval", type="integer", nullable=true)
   * 
   */
  private $frequencyInterval;
  
  /**
   * @var integer
   *
   * @ORM\Column(name="installments", type="integer", nullable=true)
   * 
   */
  private $installments;
  
  /**
   * @var datetime
   *
   * @ORM\Column(name="start_date", type="datetime", nullable=true)
   * 
   */
  private $startDate;
  
  /**
   * @var datetime
   *
   * @ORM\Column(name="create_date", type="datetime", nullable=true)
   * 
   */
  private $createDate;
  
  /**
   * @var datetime
   *
   * @ORM\Column(name="modified_date", type="datetime", nullable=true)
   * 
   */
  private $modifiedDate;
  
  /**
   * @var datetime
   *
   * @ORM\Column(name="cancel_date", type="datetime", nullable=true)
   * 
   */
  private $cancelDate;
  
  /**
   * @var datetime
   *
   * @ORM\Column(name="end_date", type="datetime", nullable=true)
   * 
   */
  private $endDate;
  
  /**
   * @var string
   *
   * @ORM\Column(name="processor_id", type="string", length=255, nullable=true)
   * 
   */
  private $processorId;
  
  /**
   * @var string
   *
   * @ORM\Column(name="trxn_id", type="string", length=255, nullable=true)
   * 
   */
  private $trxnId;
  
  /**
   * @var string
   *
   * @ORM\Column(name="invoice_id", type="string", length=255, nullable=true)
   * 
   */
  private $invoiceId;
  
  /**
   * @var integer
   *
   * @ORM\Column(name="contribution_status_id", type="integer", nullable=false)
   * 
   */
  private $contributionStatusId = '1';
  
  /**
   * @var boolean
   *
   * @ORM\Column(name="is_test", type="boolean", nullable=false)
   * 
   */
  private $isTest = '0';
  
  /**
   * @var integer
   *
   * @ORM\Column(name="cycle_day", type="integer", nullable=false)
   * 
   */
  private $cycleDay = '1';
  
  /**
   * @var datetime
   *
   * @ORM\Column(name="next_sched_contribution_date", type="datetime", nullable=true)
   * 
   */
  private $nextSchedContributionDate;
  
  /**
   * @var integer
   *
   * @ORM\Column(name="failure_count", type="integer", nullable=false)
   * 
   */
  private $failureCount = '0';
  
  /**
   * @var datetime
   *
   * @ORM\Column(name="failure_retry_date", type="datetime", nullable=true)
   * 
   */
  private $failureRetryDate;
  
  /**
   * @var boolean
   *
   * @ORM\Column(name="auto_renew", type="boolean", nullable=false)
   * 
   */
  private $autoRenew = '0';
  
  /**
   * @var \Civi\Financial\PaymentProcessor
   *
   * @ORM\ManyToOne(targetEntity="Civi\Financial\PaymentProcessor")
   * @ORM\JoinColumns({@ORM\JoinColumn(name="payment_processor_id", referencedColumnName="id", onDelete="SET NULL")})
   */
  private $paymentProcessor;
  
  /**
   * @var \Civi\Financial\FinancialType
   *
   * @ORM\ManyToOne(targetEntity="Civi\Financial\FinancialType")
   * @ORM\JoinColumns({@ORM\JoinColumn(name="financial_type_id", referencedColumnName="id", onDelete="SET NULL")})
   */
  private $financialType;
  
  /**
   * @var integer
   *
   * @ORM\Column(name="payment_instrument_id", type="integer", nullable=true)
   * 
   */
  private $paymentInstrumentId;
  
  /**
   * @var \Civi\Campaign\Campaign
   *
   * @ORM\ManyToOne(targetEntity="Civi\Campaign\Campaign")
   * @ORM\JoinColumns({@ORM\JoinColumn(name="campaign_id", referencedColumnName="id", onDelete="SET NULL")})
   */
  private $campaign;
  
  /**
   * @var boolean
   *
   * @ORM\Column(name="is_email_receipt", type="boolean", nullable=false)
   * 
   */
  private $isEmailReceipt = '1';

  /**
   * Get id
   *
   * @return integer
   */
  public function getId() {
    return $this->id;
  }
    
  /**
   * Set contact
   *
   * @param \Civi\Contact\Contact $contact
   * @return ContributionRecur
   */
  public function setContact(\Civi\Contact\Contact $contact = null) {
    $this->contact = $contact;
    return $this;
  }

  /**
   * Get contact
   *
   * @return \Civi\Contact\Contact
   */
  public function getContact() {
    return $this->contact;
  }
  
  /**
   * Set amount
   *
   * @param float $amount
   * @return ContributionRecur
   */
  public function setAmount($amount) {
    $this->amount = $amount;
    return $this;
  }

  /**
   * Get amount
   *
   * @return float
   */
  public function getAmount() {
    return $this->amount;
  }
  
  /**
   * Set currency
   *
   * @param string $currency
   * @return ContributionRecur
   */
  public function setCurrency($currency) {
    $this->currency = $currency;
    return $this;
  }

  /**
   * Get currency
   *
   * @return string
   */
  public function getCurrency() {
    return $this->currency;
  }
  
  /**
   * Set frequencyUnit
   *
   * @param string $frequencyUnit
   * @return ContributionRecur
   */
  public function setFrequencyUnit($frequencyUnit) {
    $this->frequencyUnit = $frequencyUnit;
    return $this;
  }

  /**
   * Get frequencyUnit
   *
   * @return string
   */
  public function getFrequencyUnit() {
    return $this->frequencyUnit;
  }
  
  /**
   * Set frequencyInterval
   *
   * @param integer $frequencyInterval
   * @return ContributionRecur
   */
  public function setFrequencyInterval($frequencyInterval) {
    $this->frequencyInterval = $frequencyInterval;
    return $this;
  }

  /**
   * Get frequencyInterval
   *
   * @return integer
   */
  public function getFrequencyInterval() {
    return $this->frequencyInterval;
  }
  
  /**
   * Set installments
   *
   * @param integer $installments
   * @return ContributionRecur
   */
  public function setInstallments($installments) {
    $this->installments = $installments;
    return $this;
  }

  /**
   * Get installments
   *
   * @return integer
   */
  public function getInstallments() {
    return $this->installments;
  }
  
  /**
   * Set startDate
   *
   * @param datetime $startDate
   * @return ContributionRecur
   */
  public function setStartDate($startDate) {
    $this->startDate = $startDate;
    return $this;
  }

  /**
   * Get startDate
   *
   * @return datetime
   */
  public function getStartDate() {
    return $this->startDate;
  }
  
  /**
   * Set createDate
   *
   * @param datetime $createDate
   * @return ContributionRecur
   */
  public function setCreateDate($createDate) {
    $this->createDate = $createDate;
    return $this;
  }

  /**
   * Get createDate
   *
   * @return datetime
   */
  public function getCreateDate() {
    return $this->createDate;
  }
  
  /**
   * Set modifiedDate
   *
   * @param datetime $modifiedDate
   * @return ContributionRecur
   */
  public function setModifiedDate($modifiedDate) {
    $this->modifiedDate = $modifiedDate;
    return $this;
  }

  /**
   * Get modifiedDate
   *
   * @return datetime
   */
  public function getModifiedDate() {
    return $this->modifiedDate;
  }
  
  /**
   * Set cancelDate
   *
   * @param datetime $cancelDate
   * @return ContributionRecur
   */
  public function setCancelDate($cancelDate) {
    $this->cancelDate = $cancelDate;
    return $this;
  }

  /**
   * Get cancelDate
   *
   * @return datetime
   */
  public function getCancelDate() {
    return $this->cancelDate;
  }
  
  /**
   * Set endDate
   *
   * @param datetime $endDate
   * @return ContributionRecur
   */
  public function setEndDate($endDate) {
    $this->endDate = $endDate;
    return $this;
  }

  /**
   * Get endDate
   *
   * @return datetime
   */
  public function getEndDate() {
    return $this->endDate;
  }
  
  /**
   * Set processorId
   *
   * @param string $processorId
   * @return ContributionRecur
   */
  public function setProcessorId($processorId) {
    $this->processorId = $processorId;
    return $this;
  }

  /**
   * Get processorId
   *
   * @return string
   */
  public function getProcessorId() {
    return $this->processorId;
  }
  
  /**
   * Set trxnId
   *
   * @param string $trxnId
   * @return ContributionRecur
   */
  public function setTrxnId($trxnId) {
    $this->trxnId = $trxnId;
    return $this;
  }

  /**
   * Get trxnId
   *
   * @return string
   */
  public function getTrxnId() {
    return $this->trxnId;
  }
  
  /**
   * Set invoiceId
   *
   * @param string $invoiceId
   * @return ContributionRecur
   */
  public function setInvoiceId($invoiceId) {
    $this->invoiceId = $invoiceId;
    return $this;
  }

  /**
   * Get invoiceId
   *
   * @return string
   */
  public function getInvoiceId() {
    return $this->invoiceId;
  }
  
  /**
   * Set contributionStatusId
   *
   * @param integer $contributionStatusId
   * @return ContributionRecur
   */
  public function setContributionStatusId($contributionStatusId) {
    $this->contributionStatusId = $contributionStatusId;
    return $this;
  }

  /**
   * Get contributionStatusId
   *
   * @return integer
   */
  public function getContributionStatusId() {
    return $this->contributionStatusId;
  }
  
  /**
   * Set isTest
   *
   * @param boolean $isTest
   * @return ContributionRecur
   */
  public function setIsTest($isTest) {
    $this->isTest = $isTest;
    return $this;
  }

  /**
   * Get isTest
   *
   * @return boolean
   */
  public function getIsTest() {
    return $this->isTest;
  }
  
  /**
   * Set cycleDay
   *
   * @param integer $cycleDay
   * @return ContributionRecur
   */
  public function setCycleDay($cycleDay) {
    $this->cycleDay = $cycleDay;
    return $this;
  }

  /**
   * Get cycleDay
   *
   * @return integer
   */
  public function getCycleDay() {
    return $this->cycleDay;
  }
  
  /**
   * Set nextSchedContributionDate
   *
   * @param datetime $nextSchedContributionDate
   * @return ContributionRecur
   */
  public function setNextSchedContributionDate($nextSchedContributionDate) {
    $this->nextSchedContributionDate = $nextSchedContributionDate;
    return $this;
  }

  /**
   * Get nextSchedContributionDate
   *
   * @return datetime
   */
  public function getNextSchedContributionDate() {
    return $this->nextSchedContributionDate;
  }
  
  /**
   * Set failureCount
   *
   * @param integer $failureCount
   * @return ContributionRecur
   */
  public function setFailureCount($failureCount) {
    $this->failureCount = $failureCount;
    return $this;
  }

  /**
   * Get failureCount
   *
   * @return integer
   */
  public function getFailureCount() {
    return $this->failureCount;
  }
  
  /**
   * Set failureRetryDate
   *
   * @param datetime $failureRetryDate
   * @return ContributionRecur
   */
  public function setFailureRetryDate($failureRetryDate) {
    $this->failureRetryDate = $failureRetryDate;
    return $this;
  }

  /**
   * Get failureRetryDate
   *
   * @return datetime
   */
  public function getFailureRetryDate() {
    return $this->failureRetryDate;
  }
  
  /**
   * Set autoRenew
   *
   * @param boolean $autoRenew
   * @return ContributionRecur
   */
  public function setAutoRenew($autoRenew) {
    $this->autoRenew = $autoRenew;
    return $this;
  }

  /**
   * Get autoRenew
   *
   * @return boolean
   */
  public function getAutoRenew() {
    return $this->autoRenew;
  }
  
  /**
   * Set paymentProcessor
   *
   * @param \Civi\Financial\PaymentProcessor $paymentProcessor
   * @return ContributionRecur
   */
  public function setPaymentProcessor(\Civi\Financial\PaymentProcessor $paymentProcessor = null) {
    $this->paymentProcessor = $paymentProcessor;
    return $this;
  }

  /**
   * Get paymentProcessor
   *
   * @return \Civi\Financial\PaymentProcessor
   */
  public function getPaymentProcessor() {
    return $this->paymentProcessor;
  }
  
  /**
   * Set financialType
   *
   * @param \Civi\Financial\FinancialType $financialType
   * @return ContributionRecur
   */
  public function setFinancialType(\Civi\Financial\FinancialType $financialType = null) {
    $this->financialType = $financialType;
    return $this;
  }

  /**
   * Get financialType
   *
   * @return \Civi\Financial\FinancialType
   */
  public function getFinancialType() {
    return $this->financialType;
  }
  
  /**
   * Set paymentInstrumentId
   *
   * @param integer $paymentInstrumentId
   * @return ContributionRecur
   */
  public function setPaymentInstrumentId($paymentInstrumentId) {
    $this->paymentInstrumentId = $paymentInstrumentId;
    return $this;
  }

  /**
   * Get paymentInstrumentId
   *
   * @return integer
   */
  public function getPaymentInstrumentId() {
    return $this->paymentInstrumentId;
  }
  
  /**
   * Set campaign
   *
   * @param \Civi\Campaign\Campaign $campaign
   * @return ContributionRecur
   */
  public function setCampaign(\Civi\Campaign\Campaign $campaign = null) {
    $this->campaign = $campaign;
    return $this;
  }

  /**
   * Get campaign
   *
   * @return \Civi\Campaign\Campaign
   */
  public function getCampaign() {
    return $this->campaign;
  }
  
  /**
   * Set isEmailReceipt
   *
   * @param boolean $isEmailReceipt
   * @return ContributionRecur
   */
  public function setIsEmailReceipt($isEmailReceipt) {
    $this->isEmailReceipt = $isEmailReceipt;
    return $this;
  }

  /**
   * Get isEmailReceipt
   *
   * @return boolean
   */
  public function getIsEmailReceipt() {
    return $this->isEmailReceipt;
  }

}
