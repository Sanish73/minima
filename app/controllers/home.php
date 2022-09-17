<?php

class Home extends Controller
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
        $data['WEBSITE_TITLE'] = "Home page";
        // $data['page_title'] = "Home";

        $posts = $this->loadModel("posts");
        $result = $posts->get_all();

        // show ($result);

        // $pagination = $this->loadModel("pagination");
        // $data['prev_page'] = $pagination->generate_link($pagination->current_page_number() - 1);
        // $data['next_page'] = $pagination->generate_link($pagination->current_page_number() + 1);


        $data['posts'] = $result;
        $image_class = $this->loadModel("image_class");

        if(is_array($data['posts']))
        {
            foreach ($data['posts'] as $key => $value) {
                # code...
                $data['posts'][$key]->images = $image_class->get_thumbnail($data['posts'][$key]->images);
            }
        }
      $this->view("minima/index",$data);
    }
}
