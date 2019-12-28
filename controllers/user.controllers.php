<?php

class userControllers {

    public function http(){
        $url = 'http://127.0.0.1:3000/user';
        return $url;
    }

    public function signin(){
        if(isset($_POST['action'])){
            $server = $this->http()."/signup";
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            
            $data = array(
                'username' => $username,
                'password' => $password,
                'email' => $email
            );
            $http = array(
                'http' => array(
                    'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                    'method'  => 'POST',
                    'content' => http_build_query($data)
                )
            );
            $context  = stream_context_create($http);
            $result = file_get_contents($server, false, $context);
            $message = json_decode($result, true);
            return $message;
        }
    }

}

?>