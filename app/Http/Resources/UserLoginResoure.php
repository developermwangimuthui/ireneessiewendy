<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserLoginResoure extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'firstname'=>$this->firstname,
            'lastname'=>$this->lastname,
            'username' => $this->username,
            'email'=>$this->email,
            'phone'=>$this->phone,
            'gender'=>$this->gender,
            'birth_date'=>$this->DOB,
            'about'=>$this->about,
            'profile_pic_path'=> url('UserProfilePics', $this->profile_pic_path),            
            'is_active'=>$this->is_active,
            'is_verified'=>$this->is_verified,
            'created_at'=>$this->created_at->format('d M, yy'),
            'token' =>  $this->createToken('token')->accessToken,
        ];
    }
}
