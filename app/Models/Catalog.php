<?php

namespace App\Models;

use App\Models\Resources\Accommodation;
use App\Models\Resources\Included_service;
use Illuminate\Support\Arr;


class Catalog {
   
    //Ritorna tutti gli alloggi paginati in pagine da 6
    public function getAll($limit = 6){
        $accommodations = Accommodation::paginate($limit);
        return $accommodations;
    }
    
    //Ritorna tutti gli alloggi di un locatore paginati in pagine da 6
    public function getAlloggiLocatore($id, $limit = 6){
        $accommodations = Accommodation::where('proprietario',$id)->paginate($limit);
        return $accommodations;
    }
    
    //Ritorna l'alloggio di cui viene passato l'id
    public function getAccById($id){
        return Accommodation::find($id); 
    }

    //Ritorna un'array con i nomi dei servizi inclusi nell'alloggio di cui viene passato l'id
    public function getServById($id){
        
        //recupera i servizi inclusi nell'alloggio
        $services = Included_service::where('alloggio',$id)->get();
        
        //recupera i nomi dei servizi estratti
        $servNames = []; 
        foreach ($services as $service) {    
            array_push($servNames,$service->servizio()->select('descrizione')->get());
        }
        
        //restituisce i nomi dei servizi estratti
        return $servNames;
        
    }
    
    public function getAccServ(){
        
        return Accommodation::with('included_services')->get();   
    }
    
    //ritorna gli alloggi all'interno dell'array che gli viene oassato paginati
    public function getAccPaginated($accommodations) {
        
        $accIds = [];
        foreach ($accommodations as $accommodation) {
            $accIds = Arr::add($accIds, $accommodation->id, $accommodation->id);
        }
        
        return Accommodation::whereIn('id', $accIds)->paginate(6);
    }
     
}