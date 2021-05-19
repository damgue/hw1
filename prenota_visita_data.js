cale=""
 var nomeMese = new Array("GENNAIO", "FEBBRAIO", "MARZO", "APRILE", "MAGGIO", "GIUGNO", "LUGLIO", "AGOSTO", "SETTEMBRE", "OTTOBRE", "NOVEMBRE", "DICEMBRE");
var Oggi= new Date();
var giorni = new Array(" L ", " M ", " M ", " G ", " V "," S "," D ");
var meseAttuale;
var annoAttuale;
var dataAttuale;
function controlloData (a,m,g) {
     if ((a==annoAttuale) && (m==meseAttuale) && (g==dataAttuale)) {
         flag=1
     }
     else {
         flag=0
       }
  return flag
 }
function prossimo() { // mese successivo
 mese=mese+1;
  if (mese==12) {
     mese=0;
     anno=anno+1
     }
 prepara();
 }

function precedente() {   //mese precedente
 mese=mese-1;
  if (mese==-1) {
      mese=11;
            anno=anno-1
   }
 prepara();
}

function vai() { 
     meseAttuale= Oggi.getMonth();
     annoAttuale=Oggi.getFullYear();
     dataAttuale = Oggi.getDate();
     dataOggi =dataAttuale;
     mese= meseAttuale;
     anno=annoAttuale;
     prepara();
 }
function prepara() {
if (((anno % 400)==0) || (((anno % 4)==0) && ((anno % 100 )!=0))) { //controllo anni bisestili
   var f=29
 }
else {
 var f=28
    }
var giorno=new Array("31",f,"31","30","31","30","31","31","30","31","30","31")
Lmese=giorno[mese]   //quanti giorni nel mese
nuovaData= new Date(anno, mese, 1)
inizio = nuovaData.getDay()   //giorno della settimana in cui cade il primo giorno del mese
if (inizio==0) { //altrimenti si creano problemi quando il primo giorno cade di domenica
inizio=7
}
var str=nomeMese[mese]
riempiTabella(str,Lmese)
}
// inserisce i giorni nella tabella del mese
function riempiTabella(str, Lmese)
{ 
   day=1
 cale='<p><TABLE CELLSPACING=1 CELLPADDING=1 border=1 bgcolor="#FFFFFF" style ="border-collapse:collapse" bordercolor=navy><TR><td>'

  // tabella mese
  cale+="<TABLE class='tabella' id='myTable'><TR>"
  cale+="<TD COLSPAN=7 ALIGN=center><tt>"+str+"   "+anno+"</tt><TR>"   //mese e anno
    for (var i=0; i<=6; i++){
      	cale+="<TD ALIGN=center><font color=maroon><tt>"+giorni[i]+"</tt></TD>"  //intestazioni giorni
  }
   // lascia vuote le celle che precedono il primo giorno del mese
 cale+="</TR><TR>"
  for (var i=1;i<inizio;i++){
      	cale+="<TD>&nbsp;"
  }
  // riempie la prima settimana
  for (var i=inizio;i<8;i++){
         controlloData(anno,mese,day);
 	if ((day == dataOggi) && (flag==1)) {
          cale+="<TD ALIGN=center onclick='Cattura(this," + day  +")'><font color=navy><u><tt>"+day+"</u></tt></TD>"
 	 }
         else {
	   cale+="<TD ALIGN=center onclick='Cattura(this," + day   +")'><font color=navy><tt>"+day+"</tt></TD>"
         }
        day++
  }
  somma=1  // 1 riga della tabella
  cale+="<TR>"
  //riempie le rimanenti settimane
  while (day <= 31) {
     for (var i=1;i<=7;i++){
           controlloData(anno,mese,day);
          if  ((day == dataOggi) && (flag==1)) {
          cale+="<TD ALIGN=center onclick='Cattura(this," + day   +")'><font color=navy><u><tt>"+day+"</u></tt></TD>"
 	 }
         else if (day<=Lmese){
               cale+="<TD ALIGN=center onclick='Cattura(this," + day  +")'><font color=navy><tt>"+day+"</tt></TD>"
         }
          else {
                cale+="<TD>&nbsp;&nbsp;</TD>"
             }
 	 day++
     }
    cale+="</TR><TR>" 
somma=somma+1
  }
if (somma<6) {
    cale+="<TD colspan=7>&nbsp;</TD>"
             }
  cale+='</TR><TR><TD colspan=7><pre><center><tt><a href='+'"javascript:precedente()">&lt;</a> <a href='+'"javascript:vai()">Attuale</a> <a href='+'"javascript:prossimo()">&gt;</p><p align=center><tt><a href='+'"javascript:chiudi()">CHIUDI</a></pre></TD></TR></TABLE></tABLE></center>'
 if (document.all){document.all("qui").innerHTML = cale}
 else if(document.getElementById){
document.getElementById("qui").innerHTML = cale;
}
}
// end hiding -->
function chiudi () {
imma = '<a href="javascript:vai()"><img src="immaC.jpg" border=0></a>'
if(document.all)
{
document.all('qui').innerHTML=imma;
}
else if(document.getElementById){
document.getElementById("qui").innerHTML = imma
}
}
function Cattura(el, giorno) {
  col1='darkorange';
  col2="#E0E4E3";
  a_a=anno
  m_a=mese+1
var x =document.getElementById('myTable').rows
for (i = 0; i < x.length; i++)
{
var y = x[i].cells
for (j = 0; j < y.length; j++)
{
y[j].style.backgroundColor=col2
}
}
el.style.backgroundColor=col1
  if (giorno<10){giorno='0'+giorno}
   if (m_a<10){m_a='0'+m_a}
  document.MioForm.dato.value=giorno + '-' + m_a + '-' + a_a
}
