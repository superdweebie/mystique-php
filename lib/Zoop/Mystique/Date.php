<?php
/**
 * @link       http://zoopcommerce.github.io/mystique
 * @package    mystique
 * @license    MIT
 */
namespace Zoop\Mystique;

/**
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
class Date extends Base
{

    public function isValid($value)
    {
        $result = new Result(["value" => true]);

        if (! ($value instanceof \DateTime)) {
            $result->setValue(false);
            $result->addMessage('date');
        }

        return $result;
    }
}
