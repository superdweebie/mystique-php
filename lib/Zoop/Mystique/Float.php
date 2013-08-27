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
class Float extends Base
{

    public function isValid($value)
    {
        $result = new Result(["value" => true]);

        if (! is_numeric($value)) {
            $result->setValue(false);
            $result->addMessage('float');
        }

        return $result;
    }
}
