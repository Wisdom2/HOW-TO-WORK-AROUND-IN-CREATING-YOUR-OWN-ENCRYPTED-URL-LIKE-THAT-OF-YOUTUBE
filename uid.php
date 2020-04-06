<?php
 
 /* *
  * HOW TO WORK AROUND IN CREATING YOUR OWN ENCRYPTED URL LIKE THAT OF YOUTUBE
  * 
  */

  // Set up the characters you will like to use
  $chars =   explode(',','a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z,A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z,0,1,2,3,4,5,6,7,8,9,_,-'); 
  
  // declare variable and assign it to empty string
  $random='';

  //fetch your characters randomly using for loop of length 11
  for($i=0; $i<11;$i++)  { 
    // assign the random characters to the variable declared 
    $random.=$chars[rand(0,count($chars)-1)]; 
  } 

  //launch it in the browser and hover on the like to see how it looks
  //Here you go.. Nice & pretty
  echo "<a href='https://www.mypage.com/watch?v=$random'>hover me</a>"; 


  
  