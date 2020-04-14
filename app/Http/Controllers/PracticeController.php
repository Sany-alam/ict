<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PracticeController extends Controller
{

     public function get_token($code)
     {
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://api.judge0.com/submissions/",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => "------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"source_code\"\r\n\r\n".$code."\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"language_id\"\r\n\r\n50\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW--",
          CURLOPT_HTTPHEADER => array(
            "cache-control: no-cache",
            "content-type: multipart/form-data; boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW",
            "postman-token: 7afaf8dc-3dd2-cf37-c89d-451a72cb9fee"
          ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
          echo "cURL Error #:" . $err;
        } else {
          return $response;
        }
     }


     public function get_output($token)
     {
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://api.judge0.com/submissions/".$token."?base64_encoded=true",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "cache-control: no-cache",
            "postman-token: 62899d1a-b596-1f38-dd72-76659354e5ed"
          ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
          echo "cURL Error #:" . $err;
        } else {
          return $response;
        }
     }

    public function c_compiler(Request $request)
    {
       $code = $request->code;
        //return $code;
       try{
      $token = $this->get_token($code);
      $token = json_decode($token);
      $final_token = $token->token;
      sleep(3);
      $output = $this->get_output($final_token);
      $output = json_decode($output);
      //file_put_contents('test.txt',json_encode($output));

      $final_output = base64_decode($output->stdout);
      if($output->stdout ===null)
      {
        //  file_put_contents('test.txt','yes');

          $error_message = base64_decode($output->compile_output);
          $error_type = $output->status->description;
      }
       }
       catch(Exception $e)
       {

       }



      if($output->stdout===null)
      {
          if($error_message)
          //file_put_contents('test.txt','yes'." ".$error_message);
      return $error_type."\n". $error_message;
      else
        return "Some error occured. Please try again after sometime";
      }

      else
      {

          return $final_output;

      }

     // file_put_contents('test.txt',$output);
     // return $token;
    }

    public function index()
    {
        return view('Practice\c-compiler');
    }
}
