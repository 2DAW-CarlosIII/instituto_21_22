<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NotaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "user_id" => new UserResource($this->user_id),
            "materia_id" => new MateriaResource($this->materia_id),
            "evaluacion" => $this->evaluacion,
            "nota" => $this->nota,
        ];
    }
}
