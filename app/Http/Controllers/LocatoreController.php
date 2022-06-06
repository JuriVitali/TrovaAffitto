<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Chat;

class LocatoreController extends Controller
{
    
    protected $_chatModel;  
    
    public function __construct() {
        $this->_chatModel = new Chat;
    }
    
    public function showContacts($userId){
        
        //recupera gli utenti con cui l'utente di cui viene passato l'id ha scambiato almeno un messaggio
        $contacts = $this->_chatModel->getContacts($userId);
        
        return view('chat')
                        ->with('contacts', $contacts);

    }
    
    public function showMessages($authId, $selectedId){
        
        //recupera i messaggi scambiati tra l'utente autenticato e quello selezionato
        $messages = $this->_chatModel->getMessages($authId, $selectedId);
        
        //recupera gli utenti con cui l'utente autenticato ha scambiato almano un messaggio 
        $contacts = $this->_chatModel->getContacts($authId);
        
        //recupera l'utente corrispondente all'id $selectedId
        $selectedUser = $this->_chatModel->getUserById($selectedId);
        
        return view('chat')
                        ->with('contacts', $contacts)
                        ->with('messages', $messages)
                        ->with('selectedUser', $selectedUser);               
    }
}
