<?php
/**
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the General Public License (GPL 3.0)
 * that is bundled with this package in the file LICENSE
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/GPL-3.0
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this module to newer
 * versions in the future.
 *
 * @category    docroot
 * @package     docroot
 * @author      Jeroen Bleijenberg <jeroen@jcode.nl>
 *
 * @copyright   Copyright (c) 2017 J!Code (http://www.jcode.nl)
 * @license     http://opensource.org/licenses/GPL-3.0 General Public License (GPL 3.0)
 */
namespace Jcode\Form\Field;


use Jcode\Form\Field;

class Textarea extends Field
{

    protected $template = 'Jcode_Form::Field/Textarea.phtml';

    protected $autocomplete = 'off';

    protected $cols;

    protected $rows;

    /**
     * @return string
     */
    public function getAutocomplete() :string
    {
        return $this->autocomplete;
    }

    public function getCols()
    {
        return $this->cols;
    }

    public function getRows()
    {
        return $this->rows;
    }
}