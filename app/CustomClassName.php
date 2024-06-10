<?php


/**
 * 
 * THIS CLASS JUST FOR TESTING...
 * YOU CAN DELETE IT ANYTIME, ANYWHERE
 * AND WON'T EFFECT THE APPLICATION
 * THAT'S IT ;)
 * HHHHHHHHHHHHHHHHHHHHH
 * 
 * OTMANE TALHAOUI
 * 
 */


namespace App;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;


class CustomClassName extends Controller
{
    /**
     * Create a new class instance.
     */
    private $fname;
    private $lname;
    private $email;
    private $password;
    private $hashed_password;
    private $image;


    public function __construct($fname, $lname, $email, $password, $image)
    {
        $this->fname    = $fname;
        $this->lname    = $lname;
        $this->email    = $email;
        $this->password = $password;
        $this->image    = $image;
        
    }

    /**
     * properties setters
     */

     public function set_fname($value) { $this->fname = $value; }
     public function set_lname($value) { $this->lname = $value; }
     public function set_email($value) { $this->email = $value; }
     public function set_password($value) { 
        $this->password = $value;
        $this->hashed_password = Hash::make($this->password); 
    }
     public function set_image($value) { $this->image = $value; }

    /**
     * properties getters
     */
    public function get_fname() { return $this->fname; }
    public function get_lname() { return $this->lname; }
    public function get_email() { return $this->email; }
    public function get_password() { return $this->password; }
    public function get_hashed_password() {
        return $this->hashed_password;
    }
    public function get_image() { return $this->image; }
}
