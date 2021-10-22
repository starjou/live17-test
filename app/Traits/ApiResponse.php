<?php
namespace App\Traits;

trait ApiResponse {

  function apiResponse($data = null, $code = '200', $error = null) {

      $response = [
        'status' => $code,
      ];

      if($data) {
        $response['data'] = $data;
      }

      if($error) {
        $response['error'] = $error;
      }

      return response()->json($response);
  }
}