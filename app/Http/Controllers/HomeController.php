<?php

namespace App\Http\Controllers;

use App\model\Customer;
use App\model\Postcode;
use App\model\Suburb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\model\Customer_photo;

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
           $data = Postcode::select('postcode_no','id','state_id')
               ->where("postcode_no","LIKE","%{$postcode}%")
               ->limit(5)
               ->get();

           //$output = '<ul class="dropdown-menu" style="display:block; position:relative">';
           $reponse=array();
           foreach($data as $row)
           {
               $reponse[]=array('value'=>$row->postcode_no,'id'=>$row->id, 'state_id'=>$row->state_id);

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
            'suburb_id' => 'required',
            'state_id' => 'required',
            'tatto_type' => 'required',
            'tatto_length' => 'required',
            'tatto_width' => 'required',
            'tattoo_age' => 'required',
        ]);
        $color = json_encode($request->color);

        $customer = new Customer([
          'email' => $request->get('email'),
          'name' => $request->get('name'),
          'postcode_id' => $request->get('postcode_id'),
          'suburb_id' => $request->get('suburb_id'),
          'state_id' => $request->get('state_id'),
          'tattoo_type' => $request->get('tatto_type'),
          'tattoo_length' => $request->get('tatto_length'),
          'tattoo_width' => $request->get('tatto_width'),
          'tattoo_color' => json_encode($request->get('color')),
          'skin_type' => json_encode($request->get('skin_type')),
          'tattoo_age' => $request->get('tattoo_age')
        ]);
        $id = $customer->save();
        if($id){
            if($request->hasFile('filename'))
            {

                foreach($request->file('filename') as $image)
                {
                    $name=$image->getClientOriginalName();
                    $image->move(public_path().'/customer_image/'. $id .'/', $name);
                    $data[] = '/customer_image/'. $id .'/' . $name;
                }
                $customer_photo= new Customer_photo();
                $customer_photo->customer_id= $id;
                $customer_photo->filename=json_encode($data);
                $customer_photo->save();
            }
            return redirect('/')->with('success', 'Data Saved Successfully!');
        }

    }
}
