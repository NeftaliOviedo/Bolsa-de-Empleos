<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Http\Controllers\PostController as post;
use App\create_post_table;
class User extends Controller
{
    public function showJobs(){
    $jobs=create_post_table::all()->where('isActive',1);

    return view('user.ShowJob',['jobs'=>$jobs]);
    }

    public function IndexC($id){
        $jobs=create_post_table::all()->where('id_company',$id);
    
        return view('company.ShowJobC',['id'=>$id]);
        }
        public function viewMore(){
            return view('user.MoreJobs');
            }

        //esto lleva el id del Post
        public function seeJob($id){
        $post=$id;
            return view('user.JobDetails',['id'=>$id]);
            }

            public function AdminIndex(){
         
        
                return view('admin.index');
                }
                
        
}
