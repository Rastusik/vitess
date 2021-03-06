<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin 1.0
// Source: binlogdata.proto
//   Date: 2016-01-22 01:34:24

namespace Vitess\Proto\Binlogdata {

  class StreamKeyRangeResponse extends \DrSlump\Protobuf\Message {

    /**  @var \Vitess\Proto\Binlogdata\BinlogTransaction */
    public $binlog_transaction = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'binlogdata.StreamKeyRangeResponse');

      // OPTIONAL MESSAGE binlog_transaction = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "binlog_transaction";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\Vitess\Proto\Binlogdata\BinlogTransaction';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <binlog_transaction> has a value
     *
     * @return boolean
     */
    public function hasBinlogTransaction(){
      return $this->_has(1);
    }
    
    /**
     * Clear <binlog_transaction> value
     *
     * @return \Vitess\Proto\Binlogdata\StreamKeyRangeResponse
     */
    public function clearBinlogTransaction(){
      return $this->_clear(1);
    }
    
    /**
     * Get <binlog_transaction> value
     *
     * @return \Vitess\Proto\Binlogdata\BinlogTransaction
     */
    public function getBinlogTransaction(){
      return $this->_get(1);
    }
    
    /**
     * Set <binlog_transaction> value
     *
     * @param \Vitess\Proto\Binlogdata\BinlogTransaction $value
     * @return \Vitess\Proto\Binlogdata\StreamKeyRangeResponse
     */
    public function setBinlogTransaction(\Vitess\Proto\Binlogdata\BinlogTransaction $value){
      return $this->_set(1, $value);
    }
  }
}

