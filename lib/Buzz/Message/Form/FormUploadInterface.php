<?php

namespace kriswallsmith\Buzz\Message\Form;

use kriswallsmith\Buzz\Message\MessageInterface;

interface FormUploadInterface extends MessageInterface
{
    public function setName($name);
    public function getFile();
    public function getFilename();
    public function getContentType();
}
