<?php
namespace Luracast\Restler\Data;

/**
 * Validation classes should implement this interface
 *
 * @author arulkumaran
 */
interface iValidate {

    /**
     * method used for validation.
     *
     * @param mixed $input
     *            data that needs to be validated
     * @param ValidationInfo $info
     *            information to be used for validation
     * @return boolean false in case of failure or fixed value in the expected
     *         type
     * @throws \Luracast\Restler\RestException 400 with information about the
     * failed
     * validation
     */
    public function validate($input, ValidationInfo $info);
}