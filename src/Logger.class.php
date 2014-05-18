<?php
/*
 *
 * The MIT License (MIT)
 *
 * Copyright (c) 2014 Jerome Quere
 *
 * Permission is hereby granted, free of charge, to any person obtaining a  copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including  without limitation the rights
 * to use, copy, modify, merge, publish,  distribute,  sublicense,  and/or  sell
 * copies  of  the  Software,  and  to  permit  persons  to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above  copyright  notice  and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS  PROVIDED "AS IS", WITHOUT  WARRANTY  OF ANY KIND, EXPRESS OR
 * IMPLIED,  INCLUDING  BUT NOT  LIMITED  TO THE  WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.  IN  NO EVENT SHALL THE
 * AUTHORS OR  COPYRIGHT  HOLDERS  BE  LIABLE  FOR A NY CLAIM,  DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 */

namespace express\monolog;

class Logger
{
  private $logger;

  public $DEBUG = \Monolog\Logger::DEBUG;
  public $INFO =  \Monolog\Logger::INFO;
  public $NOTICE =  \Monolog\Logger::NOTICE;
  public $WARNING = \Monolog\Logger::WARNING;
  public $ERROR = \Monolog\Logger::ERROR;
  public $CRITICAL = \Monolog\Logger::CRITICAL;
  public $ALERT = \Monolog\Logger::ALERT;
  public $EMERGENCY = \Monolog\Logger::EMERGENCY;

  public function __construct($name)
  {
    $this->logger = new \Monolog\Logger($name);
  }

  public function __call($name, $args)
  {
    return call_user_func_array(array($this->logger, $name), $args);
  }
}

?>