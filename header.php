<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="it207.css" type="text/css"/>
    </head>
    <body>
        <div id="outer" class="flex_container" >
            <div id="test" class="left_container">
                <p>
                    <b>IT104, A02, Summer 2021</b> <br /> Rajendra Mallampati <br /> George Mason University
                </p>
            </div>
            <div id="left" class="left_container1">
                <p> 
					<b>Shahzor Khan</b> <br /> <a href="mailto:skhan204@masonlive.gmu.edu">skhan204@masonlive.gmu.edu</a> <br /> 
					<?php
						echo "Last Modified: " . date('H:i F d, Y', getlastmod());
					?>
				</p>
            </div>
        </div>
    </body>
</html>