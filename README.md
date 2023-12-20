# SPA performed

## Descrizione
"spa-performed" è un progetto di Single Page Application (SPA) che utilizza PHP per recuperare dinamicamente le pagine da una sottodirectory e visualizzarle sul front-end. L'applicazione consente agli utenti di navigare tra le diverse pagine senza dover ricaricare l'intera pagina.

## Funzionalità
- Navigazione senza ricaricamento della pagina: le pagine vengono caricate dinamicamente all'interno del contenitore principale.
- Struttura del percorso delle pagine: le pagine sono organizzate all'interno di una sottodirectory e seguono il formato "1_NOME-VOCE.php".
- Visualizzazione delle pagine corrispondenti: se una pagina corrispondente alla ricerca viene trovata, viene visualizzata. In caso contrario, viene mostrato un messaggio di errore o una pagina predefinita.
- Pagina predefinita e gestione degli errori: se una pagina richiesta non viene trovata o la ricerca non produce risultati, viene visualizzata una pagina predefinita o un messaggio di errore.

## Tecnologie utilizzate
- HTML, CSS e JavaScript per la struttura, lo stile e l'interattività del frontend.
- PHP per il recupero e l'inclusione dinamica delle pagine.
- Framework Bootstrap per un design responsive e accattivante.

## Installazione
1. Clonare il repository GitHub nel proprio ambiente di sviluppo locale.
2. Assicurarsi di avere un server web locale (come Apache) con PHP configurato correttamente.
3. Copiare la directory "pages" e i suoi contenuti nel percorso desiderato all'interno del server web.
4. Assicurarsi che il server web abbia i permessi corretti per accedere ai file all'interno della directory "pages".
5. Avviare il server web locale e accedere all'applicazione tramite il browser.

## Contributi
Sono benvenuti i contributi a questo progetto. Se si desidera collaborare, è possibile aprire una nuova issue o inviare una pull request.

## Licenza
Questo progetto è distribuito con la licenza MIT. 

