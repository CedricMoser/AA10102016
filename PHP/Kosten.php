<?php
	if ( isset( $_POST[ "FlaecheStockwerk" ] ) && isset( $_POST[ "Stockwerkshoehe" ] ) && isset( $_POST[ "AnzahlStockwerke" ] ) && isset( $_POST[ "Jahr" ] ) ) {
		$FlaecheStockwerk = $_POST[ "FlaecheStockwerk" ];
		$Stockwerkshoehe  = $_POST[ "Stockwerkshoehe"  ];
		$AnzahlStockwerke = $_POST[ "AnzahlStockwerke" ];
		$Jahr             = $_POST[ "Jahr"             ];
		
		if ( $FlaecheStockwerk != "" && $Stockwerkshoehe != "" && $AnzahlStockwerke != "" && $Jahr != "" ) {
			$File = fopen( "Kosten.csv", "w" );
			
			fwrite( $File, "\"". $FlaecheStockwerk ."\";"  );
			fwrite( $File, "\"". $Stockwerkshoehe  ."\";"  );
			fwrite( $File, "\"". $AnzahlStockwerke ."\";"  );
			fwrite( $File, "\"". $Jahr             ."\"\n" );
			
			fclose( $File );
		}
	}
?>