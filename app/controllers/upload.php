<?php

class Upload extends Controller
{
    //this is for not talking empty value from URL
    function index()
    {
        // show($a);
        // show($b);
        // show($c);
        // $DB = new Database();
        // $data['code']  = $DB->read("SELECT * FROM images");
       
        // show($data[0]->image);
        // show($DB);
        // $image_class  = $this->loadModel("image_class");
        // show($image_class);
        // $data['WEBSITE_TITLE'] = "Upload "; 
        header("Location:".ROOT."upload/image");
        die;
        // $data['page_title'] = "web page"; 
        // $this->view("minima/upload" , $data);
    }

    function image()
	{
 	 	
 	 	$user = $this->loadModel("user");
 	 	
 	 	if(!$result = $user->check_logged_in())
 	 	{
 	 		header("Location:". ROOT . "login");
			die;
 	 	}

 	 	if(isset($_POST['title']) && isset($_FILES['file']))
 	 	{
 	 		$uploader = $this->loadModel("upload_file");
 	 		$uploader->upload($_POST,$_FILES);
 	 	}
 	 	
 	 	$data['page_title'] = "Upload";
		$this->view("minima/upload",$data);
	}

}
