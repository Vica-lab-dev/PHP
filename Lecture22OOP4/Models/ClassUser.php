<?php

    require_once "ClassBase.php";

    class User extends Base
    {
        private $name = "Vica";

        public function getName()
        {
            return $this->name;
        }
        public function setName($newName)
        {
            $this->name = ucfirst($newName);
        }
      public function register($email, $password)
      {
          $password = password_hash($password, PASSWORD_BCRYPT);

          $email =$this->connection->real_escape_string($email);
          $password = $this->connection->real_escape_string($password);

          $this->connection->query("INSERT INTO korisnici (email, sifra) VALUES ('$email', '$password')");
      }

        public function emailExists($email)

        {

            $email =$this->connection->real_escape_string($email);
            $result = $this->connection->query("SELECT * FROM korisnici WHERE email='$email'");

            if($result->num_rows > 0)
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        public function delete($email)
        {
            $email =$this->connection->real_escape_string($email);
            $this->connection->query("DELETE FROM korisnici WHERE email='$email'");
        }

        public function update($userEmail, $email, $password)
        {
            $password = password_hash($password, PASSWORD_BCRYPT);

            $email =$this->connection->real_escape_string($email);
            $password = $this->connection->real_escape_string($password);
            $userEmail =$this->connection->real_escape_string($userEmail);

            $this->connection->query("UPDATE korisnici SET email = '$email', sifra = '$password' WHERE email='$userEmail'");
        }

    }


