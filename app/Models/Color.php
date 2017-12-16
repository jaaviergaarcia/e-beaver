<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    //REALCION UNO A MUCHOS

    public function Product(){

    	return $this->belongsToMany('App\Product');
    }

    //RELACION UNO A MUCHOS

    public function Stock(){

    	return $this->hasMany('App\Stock');
    }


    public function create($color){

    	$create = Report::create([
                'type'   => $request->input('type'),
                'observation'   => $request->input('observation'),
                'name_sender'   => $request->input('name_sender'),
                'email_sender'   => $request->input('email_sender'),
                'phone_sender'   => $request->input('phone_sender'),
                'announcement_id'   => $request->input('announcement_id')
            ]);
            $create->sendReportAdmin(); 
            return response()->json(['success' => true]);

    }


    public function createReport(Request $request){

        $input = $request->all();
        
        $rules = array(
            'type' => 'required',      
            'observation' => 'required',      
            'name_sender' => 'required',      
            'email_sender' => 'required | email',      
            'phone_sender' => 'min:10 | max:10',      
            'announcement_id' => 'required'      
        );
        
        $validator = Validator::make($input, $rules);

        if ( $validator->fails() ){
            return response()->json(['success' => false, 'errors' => $validator->getMessageBag()->toArray()]);

        }else{
             $create = Report::create([
                'type'   => $request->input('type'),
                'observation'   => $request->input('observation'),
                'name_sender'   => $request->input('name_sender'),
                'email_sender'   => $request->input('email_sender'),
                'phone_sender'   => $request->input('phone_sender'),
                'announcement_id'   => $request->input('announcement_id')
            ]);
            $create->sendReportAdmin(); 
            return response()->json(['success' => true]);
            
        }
        return response()->json(['success' => false]);
    
    }
}
