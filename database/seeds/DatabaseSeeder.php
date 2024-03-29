<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    /**
     * Seed the application's database.
     *
     * @return void
     */

    public function run() {


        DB::table('users')->insert([
            ['username' => 'lorelore', 'password' => Hash::make('3YMDqmKi'),'role' => 'locatore', 'name' => 'Giorgio', 'surname' => 'Verdi',
               'genere' => 'M', 'data_nascita' => date("1999-02-21"), 'citta' => 'Roma', 'provincia' => 'RO', 'indirizzo' => 'Via A.Manzoni 2',
               'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
            ['username' => 'lariolario', 'password' => Hash::make('3YMDqmKi'),'role' => 'locatario', 'name' => 'Mario', 'surname' => 'Rossi',
                'genere' => 'M', 'data_nascita' => date("1979-08-30"), 'citta' => 'Milano', 'provincia' => 'MI', 'indirizzo' => 'Via G.Leopardi 50',
               'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
            ['username' => 'adminadmin', 'password' => Hash::make('3YMDqmKi'),'role' => 'admin', 'name' => 'Admin', 'surname' => 'Admin',
                 'genere' => null, 'data_nascita' => null, 'citta' => null, 'provincia' => null, 'indirizzo' => null,
               'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
            ['username' => 'Bianca14', 'password' => Hash::make('password'),'role' => 'locatore', 'name' => 'Bianca', 'surname' => 'Costa',
               'genere' => 'F', 'data_nascita' => date("1968-07-14"), 'citta' => 'Roma', 'provincia' => 'RO', 'indirizzo' => 'Via A.Manzoni 9',
               'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")]    
        ]);
     
        DB::table('accommodations')->insert([
            
            ['proprietario' => '1', 'titolo_annuncio' => 'Bilocale a Roma in via Giordano Bruno','tipologia' => 'appartamento', 'inizio_disponibilita' => date("2022-09-01"), 
               'fine_disponibilita' => date("2023-08-01"), 'data_inserimento' => date("2022-05-23"),
                'descrizione' => 'Proponiamo un tranquillo appartamento composto da soggiorno con '
                . 'cucina allâ€™americana, camera da letto con pratico soppalco praticabile, ingressino e bagno per ca. 52 mq commerciali. Lâ€™immobile riporta tutti i caratteri tipici degli '
                . 'alloggi del centro Storico. Alti soffitti travati di quasi quattro metri, ampie finestre, dotate di doppi vetri, per accogliere la luce, pavimentazione originale di fine '
                . '800 dipinta a mano. La proprietÃ , di recente ristrutturazione, Ã¨ stata completamente climatizzata ed arredata con gusto ricercato. Il soppalco poi, il cui pavimento '
                . 'Ã¨ frutto di unâ€™opera di riuso di antichi portali cinesi dismessi, permette di essere sfruttato sia come zona studio che come cameretta per ospiti di passaggio. Nelle '
                . 'spese condominiali sono incluse anche tutte le utenze.', 
                'canone_affitto' => 800, 'citta' => 'Roma', 'provincia' => 'RO', 'indirizzo' => 'Via Giordano Bruno 26',
                'superficie' => 52, 'posti_tot' => 2, 'n_camere' => 1, 'locale_ricreativo' => false, 'cucina' => true, 'angolo_studio' => null, 'letti_stanza' => null,
                'genere_locatario' => 'M', 'eta_min_locatario' => 20,
                'eta_max_locatario' => 25, 'foto' => 'images/accommodations/Appartamento_1.jpeg'],

            ['proprietario' => '1', 'titolo_annuncio' => 'Posto letto in via Ruggero, Roma','tipologia' => 'posto letto', 'inizio_disponibilita' => date("2022-08-01"), 
                'fine_disponibilita' => date("2022-12-31"), 'data_inserimento' => date("2022-05-14"),
                'descrizione' => 
                'In zona centrale a poca distanza dalla CittÃ  del Vaticano e in prossimitÃ  della stazione "Cipro delle Metro A", '
                . 'proponiamo la locazione di una stanza con contratto transitorio all\'interno di un ampio quadrilocale. La stanza di 15 '
                . 'mq. con soppalco Ã¨ arredato e l\'appartamento Ã¨ condiviso con una signora e saltuariamente con i proprietari. Dispone '
                . 'di due bagni e di zone comuni (cucina e salone con TV). La persona ideale destinataria di questa '
                . 'proposta, Ã¨ di sesso femminile, vista la presenza di analoga affittuaria, referenziata. il contratto proposto Ã¨ di tipo '
                . 'transitorio fino a dicembre 2022 per il momento. La vicinanza alla stazione Metro A di Cipro e la disponibilitÃ  di otiimi '
                . 'collegamenti con mezzi pubblici di superficie, oltre alla accessibilitÃ  diretta alle principali direttrici stradali della '
                . 'Capitale, rendono questa proposta ottima sia per studentesse che per lavoratrici.', 
                'canone_affitto' => 350, 'citta' => 'Roma', 'provincia' => 'RO', 'indirizzo' => 'Via Ruggero Fiore 14',
                'superficie' => 15, 'posti_tot' => 4, 'n_camere' => null, 'locale_ricreativo' => null, 'cucina' => null, 'angolo_studio' => false, 'letti_stanza' => 2,
                'genere_locatario' => 'F', 'eta_min_locatario' => 25,
                'eta_max_locatario' => 50, 'foto' => 'images/accommodations/Posto_letto_2.jpg'],
            
            ['proprietario' => '4', 'titolo_annuncio' => 'Trilocale Via Teatro Biondo 15, Palermo','tipologia' => 'appartamento', 'inizio_disponibilita' => date("2022-08-01"), 
                'fine_disponibilita' => date("2023-06-30"), 'data_inserimento' => date("2022-05-28"),
                'descrizione' => 
                'In Via Teatro Biondo, in stabile con esposizione angolare, proponiamo la locazione di un immobile posto al terzo piano con ascensore. '
                . 'L\'immobile si presenta luminoso e si compone di doppio ingresso, due camere, di cui una con balcone su Via Napoli, '
                . 'soggiorno con annesso ripostiglio, cucina e wc-doccia. Si loca non arredato e non Ã¨ consentita la sublocazione.'
                . 'E\' possibile visionare l\'immobile ogni giorno previo appuntamento telefonico. ',
                'canone_affitto' => 700, 'citta' => 'Palermo', 'provincia' => 'PA', 'indirizzo' => 'Via Teatro Biondo 15',
                'superficie' => 85, 'posti_tot' => 3, 'n_camere' => 2, 'locale_ricreativo' => true, 'cucina' => true, 'angolo_studio' => null, 'letti_stanza' => null,
                'genere_locatario' => null, 'eta_min_locatario' => 20,
                'eta_max_locatario' => null, 'foto' => 'images/accommodations/default.jpg'],
            
            ['proprietario' => '4', 'titolo_annuncio' => 'Economico Bilocale a Palermo','tipologia' => 'appartamento', 'inizio_disponibilita' => date("2022-09-01"), 
                'fine_disponibilita' => date("2023-02-28"), 'data_inserimento' => date("2022-04-20"),
                'descrizione' => 
                'Lo stabile di cinque piani risale agli anni \'80 e si presenta in buono stato di manutenzione. '
                . 'L\'appartamento Ã¨ posto al piano rialzato con ingresso dal portone principale dello stabile. '
                . 'Dall\'ingresso si accede al soggiorno adiacente alla cucina non abitabile; una camera da letto con balcone su atrio '
                . 'interno, un servizio con doccia e un ripostiglio completano l\'immobile. '
                . 'La pavimentazione Ã¨ in ceramica e gli infissi sono in pcv. ',
                'canone_affitto' => 800, 'citta' => 'Palermo', 'provincia' => 'Pa', 'indirizzo' => 'Via Vincenzo di Pavia 4',
                'superficie' => 50, 'posti_tot' => 2, 'n_camere' => 1, 'locale_ricreativo' => false, 'cucina' => true, 'angolo_studio' => null, 'letti_stanza' => null,
                'genere_locatario' => null, 'eta_min_locatario' => null,
                'eta_max_locatario' => 45, 'foto' => 'images/accommodations/Appartamento_2.jpg'],
            
            ['proprietario' => '1', 'titolo_annuncio' => 'Appartamento ad Ancona, via Corinaldo','tipologia' => 'appartamento', 'inizio_disponibilita' => date("2022-08-16"), 
                'fine_disponibilita' => date("2023-06-30"), 'data_inserimento' => date("2022-03-28"),
                'descrizione' => 
                'Zona Grazie, proponiamo in locazione grazioso bilocale di recente realizzazione, disposto su due livelli, completamente '
                . 'arredato e ben rifinito; ingresso indipendente su soggiorno con cucina a vista e bagno; soppalco con camera da letto '
                . 'matrimoniale e secondo bagno. L\'appartamento Ã¨ dotato di termo autonomo e ha un posto auto riservato. APE in '
                . 'elaborazione.',
                'canone_affitto' => 450, 'citta' => 'Ancona', 'provincia' => 'AN', 'indirizzo' => 'Via Corinaldo 15',
                'superficie' => 60, 'posti_tot' => 2, 'n_camere' => 1, 'locale_ricreativo' => false, 'cucina' => true, 'angolo_studio' => null, 'letti_stanza' => null,
                'genere_locatario' => 'F', 'eta_min_locatario' => null,
                'eta_max_locatario' => null, 'foto' => 'images/accommodations/Appartamento_3.jpg'],
            
            ['proprietario' => '4', 'titolo_annuncio' => 'Posto letto a Firenze, zona San Jacopino','tipologia' => 'posto letto', 'inizio_disponibilita' => date("2022-08-10"), 
                'fine_disponibilita' => date("2023-09-01"), 'data_inserimento' => date("2022-05-10"),
                'descrizione' => 
                'Proponiamo un posto letto in spazioso e vivace appartamento ristrutturato nel 2016.'
                . 'La camera Ã¨ attrezzata per offrire non solo uno spazio per dormire, ma anche per leggere e studiare; '
                . 'oltre al letto, allâ€™armadio e alla cassettiera, la camera mette a disposizione una spaziosa libreria, una scrivania e una presa TV. '
                . 'Classe energetica B: i suoi requisiti di efficienza energetica ed acustica garantiscono un eccellente comfort di utilizzo e minori costi di utenze. '
                . 'Particolarmente luminoso grazie ad ampie finestre e portefinestre. '
                . 'L\'immobile si trova in una piccola palazzina posto ad un terzo ed ultimo piano non fornito di ascensore.', 
                'canone_affitto' => 400, 'citta' => 'Firenze', 'provincia' => 'FI', 'indirizzo' => 'Viale Redi 21',
                'superficie' => 18, 'posti_tot' => 2, 'n_camere' => null, 'locale_ricreativo' => null, 'cucina' => null, 'angolo_studio' => true, 'letti_stanza' => 1,
                'genere_locatario' => 'M', 'eta_min_locatario' => null,
                'eta_max_locatario' => 40, 'foto' => 'images/accommodations/Posto_letto_3.jpg'],
            
            ['proprietario' => '1', 'titolo_annuncio' => 'Appartamento in Ancona zona Le Grazie','tipologia' => 'appartamento', 'inizio_disponibilita' => date("2022-09-15"), 
               'fine_disponibilita' => date("2023-02-20"), 'data_inserimento' => date("2022-04-22"),
                'descrizione' => 
                'Proponiamo in affitto appartamento in zona Grazie, piÃ¹ precisamente in Via Torresi. '
                . 'L\'immobile Ã¨ composto da cucina, soggiorno, 2 camere matrimoniali e un balcone panoramico vista mare. '
                . 'La soluzione si trova in posizione ben servita, con servizio di trasporto pubblico adiacente, a pochi minuti dal centro e '
                . 'dall\'UniversitÃ  di Ingegneria. ',
                'canone_affitto' => 500, 'citta' => 'Ancona', 'provincia' => 'AN', 'indirizzo' => 'Via Torresi 13',
                'superficie' => 80, 'posti_tot' => 4, 'n_camere' => 2, 'locale_ricreativo' => true, 'cucina' => true, 'angolo_studio' => null, 'letti_stanza' => null,
                'genere_locatario' => null, 'eta_min_locatario' => 20,
                'eta_max_locatario' => 35, 'foto' => 'images/accommodations/Appartamento_4.jpg'],
           
            
            ['proprietario' => '4', 'titolo_annuncio' => 'Posto letto a Milano via Moschin','tipologia' => 'posto letto', 'inizio_disponibilita' => date("2022-07-01"), 
                'fine_disponibilita' => date("2023-06-30"), 'data_inserimento' => date("2022-05-20"),
                'descrizione' => 
                'Affittasi posto letto in una stanza ampia e luminosa con due letti singoli che possono essere separati, grande scrivania e armadio, in'
                . ' trilocale a pochi passi dall\'UniversitÃ  Bocconi. L\'appartamento Ã¨ molto silenzioso e tranquillo ed Ã¨ affacciato sul giardino condominiale interno.'
                . ' Il condominio Ã¨ dotato di servizio di portineria alla mattina e al pomeriggio.'
                . ' Il canone mensile Ã¨ di 800, spese condominiali incluse (riscaldamento, acqua, servizio di portineria, etc).'
                . ' La zona Ã¨ ideale per studenti (l\'UniversitÃ  Bocconi si trova veramente a pochi metri, UniversitÃ  Statale e Cattolica sono'
                . ' facilmente raggiungibili anche a piedi) ed Ã¨ allo stesso tempo ben servita dai mezzi pubblici.', 
                'canone_affitto' => 800, 'citta' => 'Milano', 'provincia' => 'MI', 'indirizzo' => 'Via Moschin 11',
                'superficie' => 21, 'posti_tot' => 2, 'n_camere' => null, 'locale_ricreativo' => null, 'cucina' => null, 'angolo_studio' => true, 'letti_stanza' => 2,
                'genere_locatario' => null, 'eta_min_locatario' => null,
                'eta_max_locatario' => null, 'foto' => 'images/accommodations/Posto_letto_1.jpg'],
            
            ['proprietario' => '4', 'titolo_annuncio' => 'Posto letto a Milano in via G.Verga','tipologia' => 'posto letto', 'inizio_disponibilita' => date("2022-10-01"), 
                'fine_disponibilita' => date("2023-06-30"), 'data_inserimento' => date("2022-04-30"),
                'descrizione' => 
                'Via Rancati, a pochi metri da MM Turro linea rossa, proponiamo in affitto 1 posto letto in stanza doppia con balcone '
                . 'e BAGNO PRIVATO (l\'altro posto letto Ã¨ affittato a una ragazza di 19 anni studentessa) in appartamento di due'
                . ' locali con cucina abitabile in condivisione.'
                . 'Euro 380,00 al mese compreso di spese condominiali e utenze luce e gas + internet ( a posto letto )', 
                'canone_affitto' => 380, 'citta' => 'Milano', 'provincia' => 'MI', 'indirizzo' => 'Via G.Verga 101',
                'superficie' => 20, 'posti_tot' => 2, 'n_camere' => null, 'locale_ricreativo' => null, 'cucina' => null, 'angolo_studio' => true, 'letti_stanza' => 2,
                'genere_locatario' => 'F', 'eta_min_locatario' => 18,
                'eta_max_locatario' => 30, 'foto' => 'images/accommodations/default.jpg']
                
        ]);
        
        
        DB::table('services')->insert([
            ['descrizione'=>'Fibra ottica'],
            ['descrizione'=>'Posto auto riservato'],
            ['descrizione'=>'Lavatrice'],
            ['descrizione'=>'Aria condizionata'],
            ['descrizione'=>'Impianto di allarme'],
            ['descrizione'=>'Porta blindata'],
        ]);
        
        DB::table('included_services')->insert([
            ['servizio'=>1,'alloggio'=>1],
            ['servizio'=>2,'alloggio'=>1],
            ['servizio'=>3,'alloggio'=>1],
            ['servizio'=>4,'alloggio'=>1],
            ['servizio'=>4,'alloggio'=>2],
            ['servizio'=>6,'alloggio'=>2],
            ['servizio'=>2,'alloggio'=>3],
            ['servizio'=>3,'alloggio'=>3],
            ['servizio'=>4,'alloggio'=>3],
            ['servizio'=>5,'alloggio'=>3],
            ['servizio'=>6,'alloggio'=>3],
            ['servizio'=>1,'alloggio'=>4],
            ['servizio'=>2,'alloggio'=>5],
            ['servizio'=>3,'alloggio'=>5],
            ['servizio'=>6,'alloggio'=>5],
            ['servizio'=>1,'alloggio'=>6],
            ['servizio'=>3,'alloggio'=>6],
            ['servizio'=>2,'alloggio'=>7],
            ['servizio'=>5,'alloggio'=>7],
            ['servizio'=>2,'alloggio'=>9],
            ['servizio'=>4,'alloggio'=>9],
            ['servizio'=>5,'alloggio'=>9]
        ]);
        
        
        DB::table('faqs')->insert([
            ['domanda' => 'Come ci si registra al sito?', 'risposta' => 'La registrazione al sito serve per accedere ai principali servizi che offre TrovAffito.
                Per registrarsi basta premere sul bottone Registrati presente sulla home del sito oppure premere il tasto Accedi della barra di navigazione.'],
            ['domanda' => 'Che dati richiede la registrazione?', 'risposta' => 'La registrazione richiede vari campi da inserire: il nome, il cognome, la data di nascita,
                il sesso,la cittÃ , la provincia e indirizzo. Infine occorre inserire lo username e la password che si intendono utilizzare d\'ora in avanti per accedere
                nel sito (la password deve essere confermata).'],
            ['domanda' => 'Che servizi offre il sito?', 'risposta' => 'Il sito offre servizi sia per gli utenti registrati sia per quelli non registrati. Gli utenti
                senza registrazione possono accedere solo alla sezione pubblica del sito che comprende la sezioni:
                chi siamo, faqs, condizioni di uso e il servizio visualizza catalogo. Gli utenti registrati si dividono in due classi utente: il locatore e  il potenziale locatario.
                Gli utenti registrati oltre a poter usufruire di tutte le sezioni pubbliche, hanno specifici servizi in base al tipo di utente.
                I locatori modificare il loro profilo utente, inserire/cancellare/modificare di alloggi, visualizzare le richieste ricevute per ciascun alloggio, comunicare con i potenziali locatari 
                che hanno opzionato unâ€™offerta, attraverso un sistema di messaggistica interna al sito,assegnare alloggio a un locatario.
                I potenziali locatari possono modificare il loro profilo utente, ricercare un alloggio in base alle proprie esigenze,
                opzionare un alloggio, comunicare con i locatori, attraverso il sistema di messaggistica del sito.'],
            ['domanda' => 'Cosa si intende per locatore?', 'risposta' => 'Per locatore si intende la persona che dÃ  in locazione un bene, cioÃ¨ che affitta un appartamento o un posto letto. '],
            ['domanda' => 'Cosa si intende per potenziale locatario?', 'risposta' => 'Per potenziale locatario si intende la persona che prende in locazione un appartamento o un posto letto.'],
            ['domanda' => 'Che cosa Ã¨ il catalogo?', 'risposta' => 'Il catalogo Ã¨ un elenco ordinato di una o piÃ¹ serie di annunci di locazione, con le indicazioni specifiche per ogni inserzione.'],
            ['domanda' => 'Sono interessato ad un alloggio. Come faccio per contattare il proprietario?', 'risposta' => 'Per contattare un locatore Ã¨ necessario che tu sia registrato come locatario '
                . 'e abbia effettuato l\'accesso. '
                . 'Se lo sei, esistono due modi per comunicare con tale persona: il primo consiste '
                . 'nel cliccare sul pulsante "Contatta locatore" nel catalogo; invece, il secondo consiste nell\'andare nella sezione "Chat". Se non hai ancora scambiato nessun messaggio con il locatore che vuoi '
                . 'conttatare, devi cliccare sull\'opzione "Invia messaggio ad un nuovo contatto". Se invece hai giÃ  comunicato in passato con quel locatore, ritroverai il suo nome nella lista '
                . 'dei contatti nella colonna sinistra della sezione "Chat".'], 
            ['domanda' => 'Come faccio a pubblicare un annuncio? Quanto costa?', 'risposta' => 'Puoi inserire un annuncio solo se sei registrato come locatore e hai effettuato l\'accesso. Per pubblicare '
                . 'l\'inserzione Ã¨ sufficiente cliccare sull\'opzione "Inserisci un nuovo annuncio" nella pagina home oppure nella sezione "I tuoi annunci". Successivamente comparirÃ  una '
                . 'pagina in cui devi inserire le informazioni sull\'alloggio, una sua descrizione e (facoltativamente) un\'immagine dell\'alloggio stesso. La pubblicazione di un annuncio Ã¨ completamente '
                . 'gratuita.'],
            ['domanda' => 'Come faccio a modificare/cancellare un annuncio che ho pubblicato?', 'risposta' => 'Per modificare/cancellare un annuncio che hai pubblicato devi innanziatutto effettuare l\'accesso '
                . 'al tuo profilo utente. Successivamente clicca sull\'opzione "I tuoi Annunci" e comparirÃ  una pagina con la lista degli annunci che hai inserito. Per ogni annuncio Ã¨ presente un pulsante "Elimina": cliccandolo '
                . 'e confermando la scelta potrai elimminare l\'annuncio. Per poter modificare un\'annuncio, invece, devi prima cliccare sul pulsante "Visualizza informazioni" relativo all\'annuncio e poi '
                . 'sul pulsante "Modifica" presente nella nuova pagina. Una volta inserite le nuove informazioni, dovrai confermarle.'],
            ['domanda' => 'Posso pubblicare un annuncio relativo ad un immobile localizzato all\'estero?', 'risposta' => 'Si, Ã¨ possibile inserire annunci di affito per immobile che '
                . 'si trovano su territorio estero.'],
            ['domanda' => 'PerchÃ© non riesco ad accedere al mio profilo utente?', 'risposta' => 'I motivi per cui non riesci ad accedere al tuo profilo utente possono essere due. Innanzitutto, '
                . 'occorre essere registrati a TrovAffitto. Inoltre, potresti non aver inserito correttamente lo username e/o la password al momento del login.'],
        ]);
    }

}

