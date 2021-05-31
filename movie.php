<?php
/**
 *  MOVIE CLASS     (Modello degli oggetti)
 *  OBJECT -> Istanza di una classe
 */

class Movie{

    /**
     *  Attributi/Proprietà/Variabili
     */

    public $title;
    public $genre;
    public $date_of_release;
    public $director;
    public $language;
    // public $review = 'nd';
    public $summary;

    // Constructor

    function __construct($title,$genre,$review = 'nd',$date_of_release,$director,$language,$summary){
        $this->title = $title;
        $this->genre = $genre;
        $this->review = $review;
        $this->date_of_release = $date_of_release;
        $this->director = $director;
        $this->language = $language;
        $this->summary = $summary;
        
    }


    // Methods

    /**
     * Set Date of Release
     */
    
    public function setDateOfRelease($date_of_release){
        $this->date_of_release = $date_of_release;
    }

    /**
     * GET EXCEPERT
     */

    public function getExcepert(){
        $sub = substr($this->summary, 0, 200,);
        return $sub;
    }
}

// Istanza Primo Film
// $film_1 = new Movie('Crudelia','Fantasy');
// // $film_1->title = 'Crudelia';
// // $film_1->genre = 'Fantasy';
// $film_1->setDateOfRelease(2021);
// $film_1->director = 'Craig Gillepsie';
// $film_1->language = 'EN';
// $film_1->summary = "Crudelia, il film diretto da Craig Gillespie, vede protagonista Emma Stone nei panni di una giovane Crudelia De Mon. L'origin story, in live action, racconta la nascita e la trasformazione dell'iconico e malvagio personaggio de La carica dei 101.
// Estella De Vil (nome di origine di Cruella) è una giovane truffatrice dai capelli rosso scuro, una ragazza brillante e ambiziosa, decisa a sfondare nel mondo della moda come fashion designer, in una Londra influenzata dalla rivoluzione punk-rock dei primi anni '70. La ragazza si avventura per le strade della città in compagnia di due ladri dilettanti che adorano il suo lato malvagio.
// Molto presto Estella viene notata dalla baronessa von Hellman (Emma Thompson), direttrice di una prestigiosa casa di moda, una donna straordinariamente elegante e raffinata. L'incontro tra le due tuttavia darà luogo a una serie di eventi in cui il lato oscuro, cattivo e vendicativo di Estella prenderà il sopravvento trasformandola nella Cruella che tutti conosciamo.";

// echo '<p>' .$film_1->getExcepert() . '</p>';
// var_dump($film_1);

// Istanza Secondo Film
// $film_2 = new Movie('Aladdin','Fantasy');
// $film_2->title = 'Aladdin';
// $film_2->genre = 'Fantasy';
// $film_2->setDateOfRelease(2019);
// $film_2->director = 'Guy Ritchie';
// $film_2->language = 'EN';
// $film_2->summary = "Aladdin è un ragazzo poverissimo che campa di espedienti nella città di Agrabah. Durante un furtarello incontra la principessa Jasmine, cui è stato proibito di uscire dal palazzo reale: ma Jasmine vuole conoscere la sua città, e va in giro spacciandosi per la sua ancella Dalia. Quando Aladdin scopre la vera identità della principessa è troppo tardi: ne è già innamorato, ma sa di essere troppo 'straccione' per aspirare alla sua mano. Il perfido visir Jafar, stanco del ruolo di eterno secondo e desideroso di impossessarsi del trono del sultano, spedisce Aladdin a rubare una lampada magica che rende chi la possiede potentissimo. Ma dentro la lampada c'è un genio e Jafar ha progetti pericolosi: dunque Aladdin si terrà stretti lampada e genio, con l'aiuto della scimmietta Abu e di un velocissimo tappeto magico." ;

// echo '<p>' .$film_2->getExcepert() . '</p>';


// var_dump($film_2);

// Istanza Terzo Film
// $film_3 = new Movie('Thor', 'Fantasy-Action',5);
// $film_3->title = 'Thor';
// $film_3->genre = 'Fantasy-Action';
// $film_3->setDateOfRelease(2011);

// $film_3->date_of_release = '2011';
// $film_3->director = 'Kenneth Branagh';
// $film_3->language = 'EN';
// $film_3->summary = "Dopo che le sue azioni sconsiderate hanno riacceso un'antica guerra, il dio nordico Thor viene spogliato dei propri poteri, scacciato dal regno di Asgard, e costretto a vivere tra gli umani." ;

// echo '<p>' .$film_3->getExcepert() . '</p>';

// var_dump($film_3);




// CLASS UTILITIES


// var_dump($film_1 instanceof Movie);      // True o False

// var_dump(get_class($film_1)); // Ritorna stringa della classe
