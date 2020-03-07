<?php

namespace App\Http\Controllers;

use App\model\Postcode;
use App\model\Suburb;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }

    function ajax_get_postcode(Request $request){
       $postcode = $request->get('postcode');
       //echo "<pre>";print_r($postcode);exit();
       if(!empty($postcode) && is_numeric($postcode)){
           $data = Postcode::select('postcode_no','id')
               ->where("postcode_no","LIKE","%{$postcode}%")
               ->limit(5)
               ->get();

           //$output = '<ul class="dropdown-menu" style="display:block; position:relative">';
           $reponse=array();
           foreach($data as $row)
           {
               $reponse[]=array('value'=>$row->postcode_no,'id'=>$row->id);

           }
           if(count($reponse))
               return $reponse;
           else
               return ['value'=>'No Result Found','id'=>''];
       }

    }

    public function ajax_get_suburb_list(Request $request)
    {
        $postcode_id = $request->get('postcode_id');
        if (!empty($postcode_id) && is_numeric($postcode_id)) {
            $data = Suburb::select('suburb_name', 'id')
                ->where("postcode_id", $postcode_id)
                ->get();
//            $output = '<option value="">Select</option>';
//            //echo "<pre>";print_r($output);exit();
//            foreach($data as $row)
//            {
//                $output .= '<option value="'.$row->id.'">'.$row->suburb_name.'</option>';
//            }
//            echo "<pre>";print_r($output);exit();
//            echo $output;
//        }
            foreach($data as $row)
            {
                $reponse[]=array('value'=>$row->suburb_name,'id'=>$row->id);

            }
            //echo "<pre>";print_r($reponse);exit();
            if(count($reponse))
                return $reponse;
            else
                return ['value'=>'No Result Found','id'=>''];
        }

    }

    public function save_user_information(Request $request){
        $request->validate([
            'email' => 'email|required',
            'name' => 'required',
            'postcode_id' => 'required',
            'tatto_type' => 'required',
            'tatto_length' => 'required',
            'tatto_width' => 'required',
            'tattoo_age' => 'required',
        ]);

        $data = array([
          ''
        ]);
        echo "<pre>";print_r($request->all());exit();

    }
}
