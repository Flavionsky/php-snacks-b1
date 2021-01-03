<?php
$text = "Quella sensazione di panico di fronte al foglio bianco. O allo schermo del
computer. C’è sempre, e per tutti, quel sottile stato di agitazione. E’ tutta
adrenalina che va in circolo: stimola la creatività e la ricerca intellettiva.
A volte, le parole girano per la testa, le idee si mettono in fila, l’attacco
sembra pronto per uscire e stupire. Invece, non esce nulla. Capita. Non
tutti i titoli dei temi suggeriscono sviluppi immediati. Non sempre gli
argomenti da trattare sono congeniali ai nostri interessi, ma più si legge e
più si mettono in banca parole e modi di scrivere.
Scrivere sotto pressione, a volte, rende molto di più. Minore è il tempo a
disposizione per produrre un testo e maggiori possibilità ci sono per fare 
un buon lavoro. I testi migliori sono quasi sempre quelli scritti sotto
scadenza. Più scrivi, meglio scrivi. La sindrome della pagina bianca la
conosciamo tutti: il foglio vuoto, il traguardo delle quattro facciate del
foglio protocollo, il tempo che passa e il panico che incalza.
La stessa ansia che si ripresenterà ogni volta che sul lavoro dovremo
scrivere una relazione, una lettera, un curriculum, progetto, un articolo.
Chi è abituato a scrivere, nel tempo elabora una serie di accorgimenti che
mette subito in azione. Ma per gli scrittori obbligati (studenti)
occorrono semplici consigli.
Bisogna prima leggere bene la traccia del tema o l’argomento da trattare.
E’ un’operazione che va fatta con la giusta calma e attenzione. Un punto
fondamentale è definire il contenuto del titolo, isolare tutto ciò che è
pertinente al tema da trattare. Per il tema in classe, diciamo che
occorrono quindici minuti per far chiarezza intorno alla traccia.
Non bisogna aspettare l’ispirazione, preparate prima una scaletta delle
cose che volete esprimere, idee, suggestioni, brevi frasi, anche alla
rinfusa. Continuate con il metterli in ordine, dando loro senso e un certo
ordine di importanza.
A margine, sul foglio della brutta copia (o su un foglio accanto alla
tastiera del pc) scrivete con chiarezza i messaggi più importanti, gli
elementi di attenzione, le considerazioni personali.
Evidenziate con colori diversi le parole chiave, quelle più attinenti al
vostro argomento, cui potrete attingere nella fase di stesura vera e
propria.
A questo punto – ed è passata una mezz’ora circa – pensate alla cosa che
più vi ha colpito tra gli appunti tracciati sul foglio o rimasti in testa come
pensieri. Si può incominciare da dove si vuole, anche dalla fine se vi
riesce più facile. Iniziate da un punto qualunque. Scrivete sul foglio la
prima frase, quella che deve catturare subito l’attenzione del lettoreprofessore.
L’attacco è importante: nelle prime dieci, quindici righe si deve
“imprigionare” il lettore. Dopo le prime quindici righe, il testo (il tema)
prosegue con un ritmo sostenuto fino alla parte centrale al cuore
dell’argomento, alle considerazioni importanti e personali.
Non bisogna mai pretendere di partire con un’idea brillantissima. E’
molto meglio avere tante piccole buone idee. Spesso, il miglior attacco
(l’incipit) si scrivono alla fine, quando il testo ha ormai acquisito un suo
senso compiuto e armonico.
Bisogna tener conto del tempo che si ha a disposizione: per la scaletta
(che in classe non si fa mai e andrebbe fatta), per la prima stesura, per la
rilettura e la correzione (che in classe si fa sempre troppo in fretta 
rispetto al tempo che si impiega per riscrivere in bella il testo).
L’importante è lasciare sempre un discreto tempo per il controllo finale.";

$splitted_text = explode(".", $text);

foreach($splitted_text as $text){
    echo "<p>". $text . "</p>";
}
?>