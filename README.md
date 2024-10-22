# Passi da fare per poter utilizzare il template di Laravel


1) Creo la repository a partire dal template e mi clono la repository appena creata

2) Copio il file .env.example e lo rinomino in .env

3) Apro il terminale ed eseguo il comando composer install

4) Sempre nel terminale, al termine del comando composer install, eseguo  il comando php artisan key:generate

5) Sempre nel terminale, al termine dell'esecuzione di php artisan key:generate, eseguiamo il comando npm install (oppure, npm i)

6) Sempre nel terminale, al termine di npm install, eseguire il comando npm run build

7) Al posto di npm run build, potreste eseguire npm run dev e lasciarlo attivo
Aprire un altro terminale ed eseguire il comando php artisan serve