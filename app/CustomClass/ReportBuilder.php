<?php  
namespace App\CustomClass;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash; 
use App\User;
class ReportBuilder
{ 
	 private $name; 
	 /*************************************************
	 	this function set request argument to
	 	$name 
	 **************************************************/
	 public function build($name){
	 	 $this->name = $name;
	     return $this;
	 } 
	 
	 /*************************************************
	 	this function return response base on argument
	 	like CSV,PSD, etc.....
	 	// implement diabase operation  and much more
	 **************************************************/
	 public function get() {
	 	return "get:-".$this->name;
	 } 

	 /*************************************************
	 	this function return export response base on argument
	 	like CSV,PSD and what you wont 
	 **************************************************/
	 public function export() {
	 	return "export:-".$this->name;
	 }  
}