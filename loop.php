<?php

//=========Menggunakan for panjang
for($x=1;$x<=7;$x++){
    if($x==4){
        echo "A  ";
        continue;
    }if($x==5){
        echo "A  ";
        continue;
    }if($x==6){
        echo "A  ";
        continue;
    }
    echo $x."  ";
}



//=========Menggunakan for pendek
for($x=1;$x<=7;$x++){
    if($x==4 || $x==5 || $x==6){
        echo "A  ";
        continue;
    }
    echo $x."  ";
}
for($x=1;$x<=8;$x++){
if($x==5 ||$x==6 ||$x==7){
    echo "a ";
    continue;
}
echo $x." ";
}



//=========Menggunakan while pendek
$number=0;
while($number<=6){
    $number++;
    if($number==4 || $number==5 || $number==6)
    {
        echo "A  ";
        continue;
    }
    echo $number."  ";
}



//==========Menggunakan While Panjang
$number=0;
while($number<=6){
    $number++;
    if($number==4){
      echo "A  ";
      continue;
    }
    if($number==5){
        echo "A  ";
        continue;
    }
    if($number==6){
        echo "A  ";
        continue;
    }
    echo $number."  ";
}


//Menggunakan Do While panjang
$number=0;
do{
    $number++;
    if($number==4){
       echo "A  ";
       continue;
    }
    if($number==5){
        echo "A  ";
        continue;
    }
    if($number==6){
        echo "A  ";
        continue;
    }
    echo $number."  ";
}while($number<=6);


//========Menggunakan do while pendek
function hilepanjang(){
$number=0;
do{
    $number++;
    if($number==4 || $number==5 || $number==6)
    {
        echo "A  ";
        continue;
    }
    echo $number."  ";
}while($number<=6);
}
whilepanjang();




//=========Menggunakan for panjang else if
function whilependek(){
for($x=1;$x<=7;$x++){
    if($x==4){
        echo "A  ";
        continue;
    }elseif($x==5){
        echo "A  ";
        continue;
    }elseif($x==6){
        echo "A  ";
        continue;
    }else
    {
        echo $x."  ";
    }
}
}
whilependek();





//========NOMOR 2=======
//=========Menggunakan for pendek
function dua(){
for($x=5;$x>=1;$x--){
    if($x==2 || $x==1){
        echo "*  ";
        continue;
    }
    echo $x."  ";
}
}
dua();

//=======NOMOR 5==-===
//=========Menggunakan for pendek
function lima(){
for($x=4;$x>=0;$x--){
    if($x==2 || $x==0){
        echo "A  ";
        // continue;
    }
    echo $x." ";
}
}
lima();

//=====NOMOR 6=====
//=========Menggunakan for pendek
function enam(){
for($x=0;$x<=4;$x++){
    if($x==0 || $x==1){
        echo "A  ";
        continue;
    }
    echo $x."  ";
}
}
enam();

//=======NOMOR 1=======
//=========Menggunakan for pendek
function satu(){
for($x=1;$x<=10;$x++){
    if($x==4 || $x==5 || $x==6 || $x==7){
        echo "";
        continue;
    }
    echo $x."  ";
}
}
satu();

//=====NOMOR 3=====
//Menggunakan for pendek
function tiga(){
for($x=1;$x<=4;$x++){
    if($x==1 || $x==3){
        echo $x."A  ";
    }else{
        echo $x."B  ";
    }
}
for($x=1;$x<=8;$x++){
    if($x==1 || $x==7){
        echo $x."A  ";
    }else{
        echo $x."B  ";
    }
}
}
tiga();





