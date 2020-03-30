<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GoalsResource extends JsonResource
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
            'created_at'=>\Carbon\Carbon::parse($this->created_at)->format('M d Y'),
            'updated_at'=>\Carbon\Carbon::parse($this->updated_at)->format('M d Y'),
            'target_date'=>\Carbon\Carbon::parse($this->target_date)->format('M d Y'),
            'current_avg'=>$this->current_avg,
            'target_avg'=>$this->target_avg
        ];
    }
}
