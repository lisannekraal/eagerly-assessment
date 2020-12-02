
## How to run locally for dev

- set up XAMPP and choose the right port
- copy this repo in local XAMPP repository called _htdocs_
- start Apache and MySQL server
- add db _cultuurgebouw_ and table _program_items_ holding the following columns:
    - id: int, primary key
    - title: varchar(100)
    - description: varchar(1000)
    - start_date: varchar(50)
    - url: varchar(500)
    - image: varchar(500)
- open folder eagerly on localhost in browser
- run _xml_extract_ to load input from provided source
- open uitgelicht-overzicht.html with the rendered data from db

## Future improvements:

- Escaping characters before entering data to table
- Solving primary key issue for missing event_id's
- Get the right image dynamically for every program item
- Run PHP dynamically in HTML template instead of the other way around?

## Initial assignment

We willen je graag een opdracht laten doen in PHP. WordPress syntax is gebaseerd op PHP en met die kennis prima te leren. Die stap zal niet zo groot zijn vermoeden we.
In de bijlage vind je een HTML-bestand met een stylesheet en deze is gebaseerd op dit template: https://sliced.eager.ly/cultuurgebouw/uitgelicht-overzicht.php.

We willen graag dat je een PHP script maakt om
- de gegevens uit deze XML-feed https://www.kunstmin.nl/feed/ te halen,
- op te slaan,
- en het weer te geven zoals weergegeven in het sjabloon.

Elk item bestaat uit een afbeelding (we weten dat de grootte niet klopt), titel, korte beschrijving, data, tijden, link ("bekijk meer"). Dit wordt in dit template weergegeven als een lijst. De frontend is niet relevant, dus als er (al) slordigheden in zitten, is dat prima.

Je natuurlijk proberen om dit in een WordPress-module (custom post type) te krijgen en er een WordPress template van te maken, maar dat vinden we voor nu een beetje te veel gevraagd.
Om met PHP lokaal te ontwikkelen kun je gebruik maken van de XAMPP-omgeving of een andere lokale server van je voorkeur.

Uiteindelijk willen we je vragen om de code die je geschreven hebt, toe te lichten. Vooral om een gevoel te krijgen bij de stappen die je genomen hebt, dat zegt soms meer dan de code zelf. Ook als bepaalde stappen niet gelukt zijn of voor je gevoel niet optimaal zijn. 

Ik hoor graag van je of je met bovenstaande aan de slag wil gaan, en uiteraard aarzel niet als je vragen hebt of vastloopt met bijvoorbeeld de XAMPP omgeving. We helpen je graag verder. En zodra je een indicatie hebt wanneer je het resultaat naar ons kan opsturen, dan plannen we een vervolgafspraak om dat vervolgens te bespreken. Ik denk dat het voor ons trouwens ook leuk is om iets van je React applicatie te laten zien tijdens die afspraak