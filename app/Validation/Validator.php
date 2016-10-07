<?php
/**
 * Created by PhpStorm.
 * User: marcamon
 * Date: 07/10/2016
 * Time: 18:22
 */

namespace App\Validation;


use Respect\Validation\Exceptions\NestedValidationException;
use Slim\Http\Request;

class Validator
{

    protected $errors;

    public function validate(Request $request, array $rules)
    {
        foreach ($rules as $field => $rule) {

            try {
                $rule->setName(ucfirst($field))->assert($request->getParam($field));
            } catch (NestedValidationException $exception) {
                $this->errors[$field] = $exception->getMessages();
            }
        }

        $_SESSION['errors'] = $this->errors;
        $_SESSION['old'] = array_except($request->getParams(), ['password', '_token']);
        return $this;
    }


    public function ok()
    {
        return empty($this->errors);
    }
}