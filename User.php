<!-- INI ADALAH KODINGAN SEBAGAI MODEL -->

<?php

class User
{
    // `class User` difunakan untuk membuat sebuah kelas yang bernama user
    private $username;
    private $password;
    //  `private $username` dan `private $password` adalah contoh dari penggunaan aksebilitas pada properti dalam sebuah kelas

    // Biasanya, informasi login diambil dari database
    public function __construct($username, $password)
    // `function` kata kunci yang di gunakan untuk mendeklarasikan suatu fungsi 
    // `__contruct` nama fungsi yang di identifikasi
    // `$username` adalah parameter yang diterima oleh fungsi
    {
        $this->username = $username;
        $this->password = $password;
        // `$this -> username = $username` digunakan untuk mengatur nilai proverti `username` dari objek saat ini dengan nilai yang diterima oleh fungsi
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getPassword()
    {
        return $this->password;
    }
}