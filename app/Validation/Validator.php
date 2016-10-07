<?php
/**
 * Created by PhpStorm.
 * User: marcamon
 * Date: 07/10/2016
 * Time: 18:22
 */

namespace App\Validation;


use Respect\Validation\Exceptions\NestedValidationException;

class Validator
{

    protected $errors;

    public function validate($request, array $rules)
    {
        foreach ($rules as $field => $rule) {

            try {
                $rule->setName(ucfirst($field))->assert($request->getParam($field));
            } catch (NestedValidationException $exception) {
                $this->errors[$field] = $exception->getMessages();
            }
        }

        return $this;
    }


    public function ok()
    {
        return empty($this->errors);
    }
}