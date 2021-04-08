# BarberApp

## Software gestionale per Prenotazioni turni in sale di parrucchieri

### BACKEND:LARAVEL 
### DB:MYSQL

L’obiettivo del progetto è la realizzazione della base di dati di un gestionale per 
la prenotazione turni nei saloni di parrucchieri.
Nella prima fase è necessario produrre un insieme di documenti, che 
costituiscono la documentazione del progetto: 
* Analisi dei requisiti: Dati generali 
* Schema concettuale, tramite modello E-R (strategia Top-Down)
* Dizionario dei dati-Entità e Relazione
* Lo schema ottenuto per ristrutturazione dalla prima fase della 
progettazione logica
* Schema logico finale

## Specifiche dei Dati
Si vuole progettare una base di dati per la prenotazione turni in sale di 
parrucchieri. Il cliente che accede al sistema è identificato dal codice fiscale e da 
alcuni dati anagrafici, quali il nome, l’indirizzo, la città e da email e password 
pervenuti durante la registrazione al sistema. I clienti possono essere di genere 
maschile o femminile e devono poter effettuare la prenotazione di un turno. La 
prenotazione è determinata dal cliente che effettua la richiesta, dalla sala, dal 
giorno e da una fascia oraria che non potrà mai coincidere con un’altra
prenotazione nella stessa sala e nello stesso giorno. Inoltre una prenotazione deve 
specificare le varie tipologie di servizio (barba, capelli, tintura, piega ecc,) offerte 
da ogni sala, le quali oltre al nome bisogna tenere traccia del costo, che varia per 
ciascun servizio, e il prodotto utilizzato specificato dalla marca, dal costo e 
opzionalmente dal colore. Per ogni sala inoltre si devono memorizzare la P.Iva 
(univoca), il nome della sala, il comune di appartenenza, l’indirizzo e soprattutto 
il genere che specifica se tratta tipologie di servizi per uomo o per donna. Ogni 
tipologia di servizio viene effettuato dal/lla parrucchiere/a. Uno o più parrucchieri 
lavorano all’interno di una sala.
Ogni sala rilascia delle fatture ad ogni utente nelle quali viene riportata la data 
e il costo del servizio effettuato.

## Analisi dei Requisiti

![image](https://user-images.githubusercontent.com/48923975/113990153-76edc900-9851-11eb-8c8a-7749d9cbf612.png)


## DATI DI CARATTERE GENERALE
![image](https://user-images.githubusercontent.com/48923975/113990302-984eb500-9851-11eb-8579-1970b55f954d.png)
![image](https://user-images.githubusercontent.com/48923975/113990338-a13f8680-9851-11eb-9011-dc6fe0081ef6.png)

## SCHEMA ER 

![image](https://user-images.githubusercontent.com/48923975/113990417-ba483780-9851-11eb-9996-81a5f6a69b09.png)

## PROGETTAZIONE LOGICA

![image](https://user-images.githubusercontent.com/48923975/113990545-dba92380-9851-11eb-81ab-14534477f0aa.png)

## Immagini del progetto
![image](https://user-images.githubusercontent.com/48923975/113990680-00050000-9852-11eb-8231-4776d78d6945.png)
![image](https://user-images.githubusercontent.com/48923975/113990716-07c4a480-9852-11eb-8327-22d84b621e91.png)
![image](https://user-images.githubusercontent.com/48923975/113990762-1612c080-9852-11eb-95da-51e5060e168b.png)



