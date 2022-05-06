<?php
namespace Core\Traits;

/**
 * @method void jsonResponse( mixed $data, int $code= 200 ) Envoie les données passées en paramètre au format json
 */
trait JsonTrait {
    
    /**
     * jsonResponse
     *
     * @param  mixed $data
     * @param  mixed $code
     * @return void
     */
    protected function jsonResponse (mixed $data, int $code = 200): void
    {
        header("content-type: application/json");
        http_response_code($code);
        echo json_encode($data);
    }
}