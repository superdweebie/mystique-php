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
class Int extends Base
{

    public function isValid($value)
    {
        $result = new Result(["value" => true]);

        if (! is_numeric($value) ||
           (intval($value) != floatval($value))
        ) {
            $result->setValue(false);
            $result->addMessage('int');
        }

        return $result;
    }
}
