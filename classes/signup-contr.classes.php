<?php

class SignupContr extends Signup {

    private $uid;
    private $pwd;
    private $pwdRepeat;
    private $email;

    public function __construct($uid, $pwd, $pwdRepeat, $email)
    {
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdRepeat = $pwdRepeat;
        $this->email = $email;
    }

    public function signupUser() {
       if($this->emptyInput() == false) {
        //   echo "Empty input!";
        header("location: ../index.php?error=emptyinput");
        exit();
         }
       if($this->invalidUid() == false) {
        //   echo "Invalid username!";
        header("location: ../index.php?error=username");
        exit();
       }
       if($this->InvalidEmail() == false) {
        //   echo "Invalid Email!";
        header("location: ../index.php?error=email");
        exit();
       }
       if($this->pwdMatch() == false) {
        //   echo "Passwords don't match!";
        header("location: ../index.php?error=passwordmatch");
        exit();
       }
       if($this->uidCheck() == false) {
        //   echo "User or Email taken";
        header("location: ../index.php?error=useroremailtaken");
        exit();
       }

       $this->setUser($this->uid, $this->pwd, $this->email);
       
    }

    private function emptyInput() {
        if(empty($this->uid) || empty($this->pwd) || empty($this->pwdRepeat) 
        || empty($this->email)) {
          $result = false;
        }
        else
        {
            $result = true;
        }
       return $result;
    }

    private function invalidUid() {
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->uid))
        {
        $result = false;
        }
    else
    {
        $result = true;

    }
        return $result;
}
    private function InvalidEmail() {
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL))
        {
            $result = false;
        }
        else
        {
            $result = true;
        }
        return $result;
    }

    private function pwdMatch() {
       if ($this->pwd !== $this->pwdRepeat)
       {
        $result = false;
       }
       else
       {
        $result = true;
       }
       return $result;
    }
    

    
    private function uidCheck() {
       if (!$this->checkUser($this->uid, $this->email))
       {
        $result = false;
       }
       else
       {
        $result = true;
       }
       return $result;
    }

}