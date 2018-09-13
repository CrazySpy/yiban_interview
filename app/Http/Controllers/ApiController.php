<?php
namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Arrayable;

class ApiController extends Controller
{
    /**
     * Success response.
     *
     * @param mixed $data
     *
     * @return array
     */
    public function success($data = true) : array
    {
        if ($data instanceof Arrayable) {
            $data = $data->toArray();
        }

        return [
            'status'    => true,
            'message'   => '',
            'data'      => $data
        ];
    }

    /**
     * @param string $message
     * @return array
     */
    public function error($message) : array
    {
        return [
            'status'    => false,
            'message'   => $message
        ];
    }
}
