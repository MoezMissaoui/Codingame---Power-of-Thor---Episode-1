<?php

	function roadToFinalPosition($initPositionCoord,$finalPositionCoord)
	{
		$otherX = $finalPositionCoord[0] ;
		$otherY = $finalPositionCoord[1]  ;
		$initialX = $initPositionCoord[0] ;
		$initialY = $initPositionCoord[1] ;
		$road = '';
		while (($initialX != $otherX) || ($initialY != $otherY))
		{
		    if(($initialX < $otherX) && ($initialY == $otherY)){
		        $road .= '[Est] ';
		        $initialX ++;
		    }
		    elseif(($initialX > $otherX) && ($initialY == $otherY)){
		        $road .= '[Ouest] ';
		        $initialX --;
		    }

		    elseif(($initialX == $otherX) && ($initialY < $otherY)){
		        $road .= '[North] ';
		        $initialY ++;
		    }elseif(($initialX == $otherX) && ($initialY > $otherY)){
		        $road .= '[Sud] ';
		        $initialY --;
		    }
		    
		    elseif(($initialX < $otherX) && ($initialY < $otherY)){
		    	$road .= '[North-Est] ';
		        $initialX ++;
		        $initialY ++;
		    }elseif(($initialX < $otherX) && ($initialY > $otherY)){
		    	$road .= '[Sud-Est] ';
		        $initialX ++;
		        $initialY --;
		    }

		    elseif(($initialX > $otherX) && ($initialY > $otherY)){
		        $road .= '[Sud-Ouest] ';
		        $initialX --;
		        $initialY --;
		    }elseif(($initialX > $otherX) && ($initialY < $otherY)){
		        $road .= '[North-Ouest] ';
		        $initialX --;
		        $initialY ++;
		    }
		}
		return $road ;
	}
