<?php
class Oven{

  $heatSource;
  $door;
  $shelf;


  function currenttemp ()
    { //$currenttemp = $currenttemp + $;
      ;
    }
  function opendoor ()
    {
      ;
  }
  function turnon ()
  {
    ;
    //on
  }
  function turnoff ()
  {
    ;
    //off
  }
  function increasetemp ()
  {
    ;
    //+
  }

  function decreasetemp ()
  {
    ;
    //-
  }
}
////////
class GasRange extends Oven{
  $stoveBurner;
  $ovenBurner;
  $door;
  $pilotLight;
  $ovenLight;
  $ovenBroiler;
  $ovenTempknob;
  $stoveTempknob;
  $ovenFan;
  $shelf;


  function adjustshelf ()
  {
    ;
  }

  function ignitestove ()
  {
      ;
      //designate burner
      //front-left
      //front-right
      //back-left
      //back-right
    }
  function adjustheat ()
  {
      ;
      //applies to ovenTempknob and stoveTempknob
    }

  function broiler ()
  {
    ;
    //Sets oventemp to max
  }
}

/////////
class ToasterOven extends Oven{

function lightToast()
{
  ;
  //toast an item lightly.
}

function medToast()
{
  ;
  //toast an item to a wonderful golden brown
}
function toastDark()
{
  ;
  //almost burn an item
}
function emptycrumbTray ()
{
  ;
  //get rid of those crumbs. they are a fire hazard.
}
function toasterBroil ()
{
  ;
  //set heat coil to highest setting
}
function defrost ()
{
  ;
  //gently defrost item at low temp.
}
function setTimer ()
{
  ;
  //dictates time that heat coil will be on at given temp.
}
}
 ?>
