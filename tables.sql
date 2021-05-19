/*CREDO IL DB*/
create database hw1;
/*USO IL DB*/
use hw1;


/*TABELLA USERS*/
create table users (nome varchar(255), cognome varchar(255), eta integer, username varchar(255), password varchar(255));


/*TABELLA SERVIZI*/
create table servizi (id integer primary key, nome varchar(255), immagine varchar(511), descrizione varchar(255));

/*CARICAMENTO DINAMICO DEI SERVIZI*/
insert into servizi values (0, "Endoscopia", "https://www.innovamedica.com/images/contenuti/box-hp/box_hp_endoscopia_digestiva_innovamedica.jpg", "L'endoscopia è una tecnica diagnostica e terapeutica che permette di avere una visione diretta, dall'interno, di alcuni organi.");
insert into servizi values(1, "TAC","https://www.affidea.it/media/527605/tc-tomografia-assiale-computerizzata-tac.jpg","Tomografia assiale computerizzata");
insert into servizi values(2, "Gastroscopia","https://www.ospedaleniguarda.it/uploads/default/attachments/news/news_m/993/images/gallery/1226/preparazione_gastroscopia.jpg","La gastroscopia è un accertamento diagnostico eseguito mediante una sonda flessibile che consente di esplorare sotto visione la mucosa dell'esofago, dello stomaco e del duodeno.");
insert into servizi values(3, "Radiografia","https://media.paginemediche.it/medicina-e-prevenzione/esami/radiografia-che-cos-e-e-in-che-cosa-consiste/radiografia-preview-default.jpg","Per radiografia (RX) si può intendere l'immagine radiografica, o radiogramma, oppure la tecnica radiografica utilizzata per ottenere il radiogramma stesso.");
insert into servizi values(4, "Risonanza magnetica","https://lirp.cdn-website.com/7ee4cd98/dms3rep/multi/opt/nuova-diagnostica-catania-013-480w.jpg","La risonanza magnetica è una tecnica di indagine sulla materia basata sulla misura della precessione dello spin di protoni o di altri nuclei dotati di momento magnetico quando sono sottoposti a un campo magnetico.");
insert into servizi values(5, "Spirometria","https://www.farmaciecomunalilivorno.it/templates/yootheme/cache/spirometria-b08f474c.jpeg","La spirometria è il più comune e diffuso esame della funzione respiratoria. Il test si esegue con l'ausilio di uno strumento chiamato spirometro.");
insert into servizi values(6, "Mammografia","https://www.giornalesanita.it/wp-content/uploads/2019/07/mammografia.jpg","La mammografia è un esame radiografico che permette di esaminare il tessuto mammario al suo interno e di diagnosticare precocemente il cancro al seno.");
insert into servizi values(7, "Elettrocardiogramma","https://www.cardiocenternapoli.it/wp-content/uploads/2020/09/elettrocardiogramma-ecg-napoli-cardiocenter.jpg","L'elettrocardiogramma, o ECG, è un esame diagnostico, che prevede l'utilizzo di uno strumento capace di registrare e riportare graficamente il ritmo e l'attività elettrica del cuore.");
insert into servizi values(8, "Ecografia","https://csslife.it/wp-content/uploads/2018/08/ecografia-4d-catania-01.jpg","L'ecografia o ecotomografia è un sistema di indagine diagnostica medica che non utilizza radiazioni ionizzanti, ma ultrasuoni e si basa sul principio dell'emissione di eco e della trasmissione delle onde ultrasonore.");


/*TABELLA PRENOTAZIONI*/
create table prenotazioni (id_servizio integer primary key, nome varchar(255), immagine varchar(511), descrizione varchar(255), user varchar(255), cognome varchar(255), eta integer, username varchar(255), password varchar (255));


/*TABELA MEDICO*/
create table medico(id_medico integer primary key, cognome varchar(255), num_pazienti_seguiti integer);

/*INSERIMENTO NELLA TABELLA MEDICO*/
insert into medico VALUES
(1, 'Dott. Reggiani', 0),
(2, 'Dott. Albertazzi', 0),
(3, 'Dott. Rossi', 0),
(4, 'Dott.sa Andreani', 0),
(5, 'Dott.sa Bruni', 0),
(6, 'Dott.sa Casellanti', 0),
(7, 'Dott. Lombardi', 0), 
(8, 'Dott. Giacomazzi', 0), 
(9, 'Dott.sa Alberti', 0), 
(10, 'Dott.sa Ferrari', 0);


/*TABELLA VISITA*/
create table visita(id_visita integer primary key auto_increment, paziente varchar(255), medico varchar(255), data_visita date); 


/*TRIGGER PER INCREMENTARE num_pazienti_seguiti*/
delimiter //
drop trigger if exists pazienti_seguiti;
create trigger pazienti_seguiti
after insert on visita
for each row
if exists (select * from medico m, visita v where v.medico = m.cognome)
then
update medico 
set num_pazienti_seguiti=num_pazienti_seguiti+1 where cognome = (select cognome from medico m, visita v where m.cognome = new.medico limit 1);
end if; 
end //
delimiter ; 
