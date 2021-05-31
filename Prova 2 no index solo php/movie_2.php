<?php
/**
 * Creo Movie Class
 */

class Movie_2{
    /**
     * Prorietà
     */

    public $title;
    public $director;
    public $genre;
    public $date_of_release;
    public $language;
    public $summary;
    public $url;

    /**
     * Constructor
     */

    function __construct($title, $director, $review = 'nd'){
        $this->title = $title;
        $this->review = $review;
        $this->director = $director;
    }

    /**
     * Methods
    */

    /**
    * Set Date of Release
    */
    
    public function setDateOfRelease($date_of_release){
        $this->date_of_release = $date_of_release;
    }

    /**
    * Set url 
    */

    public function setUrl($url){
        $this->url = $url;
    }





}

// Istanza Primo Film

$film_1 = new Movie_2('Crudelia','Craig Gillepsie');
$film_1->genre = 'Fantasy';
$film_1->setDateOfRelease(2021);
$film_1->language = 'EN';
$film_1->summary = "Crudelia, il film diretto da Craig Gillespie, vede protagonista Emma Stone nei panni di una giovane Crudelia De Mon. L'origin story, in live action, racconta la nascita e la trasformazione dell'iconico e malvagio personaggio de La carica dei 101.
Estella De Vil (nome di origine di Cruella) è una giovane truffatrice dai capelli rosso scuro, una ragazza brillante e ambiziosa, decisa a sfondare nel mondo della moda come fashion designer, in una Londra influenzata dalla rivoluzione punk-rock dei primi anni '70. La ragazza si avventura per le strade della città in compagnia di due ladri dilettanti che adorano il suo lato malvagio.
Molto presto Estella viene notata dalla baronessa von Hellman (Emma Thompson), direttrice di una prestigiosa casa di moda, una donna straordinariamente elegante e raffinata. L'incontro tra le due tuttavia darà luogo a una serie di eventi in cui il lato oscuro, cattivo e vendicativo di Estella prenderà il sopravvento trasformandola nella Cruella che tutti conosciamo." ;
$film_1->setUrl('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS-hmRtQ3fmvdW2pLqfjdVVv1vQxVa9GQSylFpRHOyWjB27cPii');


// var_dump($film_1);

echo '<h2> Titolo: ' . $film_1->title . '</h2>' ;
echo '<img src="'.$film_1->url.'">';
echo '<h4> Diretto da: ' . $film_1->director . '</h4>' ;
echo '<h5> Genre: ' . $film_1->genre . '</h5>' ;
echo '<h6> Data Pubblicazione: ' . $film_1->date_of_release . '</h6>' ;
echo '<p> Trama: ' . $film_1->summary . '</p>' ;
echo '<p> Review: ' . $film_1->review . '</p>' ;







$film_2 = new Movie_2('Aladdin','Guy Ritchie');
$film_2->genre = 'Fantasy';
$film_2->setDateOfRelease(2019);
$film_2->language = 'EN';
$film_2->summary = "Aladdin è un ragazzo poverissimo che campa di espedienti nella città di Agrabah. Durante un furtarello incontra la principessa Jasmine, cui è stato proibito di uscire dal palazzo reale: ma Jasmine vuole conoscere la sua città, e va in giro spacciandosi per la sua ancella Dalia. Quando Aladdin scopre la vera identità della principessa è troppo tardi: ne è già innamorato, ma sa di essere troppo 'straccione' per aspirare alla sua mano. Il perfido visir Jafar, stanco del ruolo di eterno secondo e desideroso di impossessarsi del trono del sultano, spedisce Aladdin a rubare una lampada magica che rende chi la possiede potentissimo. Ma dentro la lampada c'è un genio e Jafar ha progetti pericolosi: dunque Aladdin si terrà stretti lampada e genio, con l'aiuto della scimmietta Abu e di un velocissimo tappeto magico." ;
$film_2->setUrl('https://pad.mymovies.it/filmclub/2017/11/159/locandina.jpg');



// var_dump($film_2);

echo '<h2> Titolo: ' . $film_2->title . '</h2>' ;
echo '<img src="'.$film_2->url.'">';

echo '<img src:'. $film_2->url.'>';
echo '<h4> Diretto da: ' . $film_2->director . '</h4>' ;
echo '<h5> Genre: ' . $film_2->genre . '</h5>' ;
echo '<h6> Data Pubblicazione: ' . $film_2->date_of_release . '</h6>' ;
echo '<p> Trama: ' . $film_2->summary . '</p>' ;
echo '<p> Review: ' . $film_2->review . '</p>' ;



$film_3 = new Movie_2('Thor','Kenneth Branagh');
$film_3->genre = 'Fantasy-Action';
$film_3->setDateOfRelease(2011);
$film_3->language = 'EN';
$film_3->summary = "Dopo che le sue azioni sconsiderate hanno riacceso un'antica guerra, il dio nordico Thor viene spogliato dei propri poteri, scacciato dal regno di Asgard, e costretto a vivere tra gli umani." ;
$film_3->setUrl('https://pad.mymovies.it/filmclub/2009/01/003/locandina.jpg');
$film_3->review = 4;


// var_dump($film_3);

echo '<h2> Titolo: ' . $film_3->title . '</h2>' ;
echo '<img src="'.$film_3->url.'">';

echo '<img src:'. $film_3->url.'>';
echo '<h4> Diretto da: ' . $film_3->director . '</h4>' ;
echo '<h5> Genre: ' . $film_3->genre . '</h5>' ;
echo '<h6> Data Pubblicazione: ' . $film_3->date_of_release . '</h6>' ;
echo '<p> Trama: ' . $film_3->summary . '</p>' ;
echo '<p> Review: ' . $film_3->review . '</p>' ;





// CLASS UTILITIES


// var_dump($film_1 instanceof Movie);      // True o False

// var_dump(get_class($film_1)); // Ritorna stringa della classe
