<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html 
<?php include("Header.php"); ?>

<body>
<div id="container">
       
    <div id="body">
		<div id="content">
            <div class="box">
                <h2>Examples</h2>

				<h1>Heading H1</h1>
				<h2>Heading H2</h2>
				<h3>Heading H3</h3>
				<h4>Heading H4</h4>
				<h5>Heading H5</h5>
				<p>&nbsp;</p>

				
				<h3>Lists</h3>
				<ul>
                                    <li>List item</li>
                                    <li>List item</li>
                                    <li>List item</li>
				</ul>
						
				<ol>
                                    <li>List item</li>
                                    <li>List item</li>
                                    <li>List item</li>
				</ol>
				<p>&nbsp;</p>
				
					
				<h3>Code and blockquote</h3>
				<code>&lt;? echo('Hello world'); ?&gt;</code>

				<blockquote><p>Mauris sit amet tortor in urna 
                                        tincidunt aliquam. Pellentesque habitant
                                        morbi tristique senectus et netus et ma
                                        lesuada fames ac turpis egestas</p></blockquote>
				<p>&nbsp;</p>
				
				
				
				<h3>Table</h3>

				<table>
					<tbody><tr>
						<th>ID</th>
						<th>Name</th>
						<th>Age</th>
					</tr>
					<tr>
						<td>1</td>
						<td>John Smith</td>
						<td>28</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Fred James</td>
						<td>49</td>
					</tr>
					<tr>
						<td>3</td>
						<td>Rachel Johnson</td>
						<td>19</td>
					</tr>
	
				</tbody></table>
				<p>&nbsp;</p>
				
				<h3>Form</h3>
				<fieldset>

					<legend>Form legend</legend>
					<form action="#" method="get">

						<p><label for="name">Name:</label>
						<input name="name" id="name" value="" type="text" /><br /></p>		
						<p><label for="email">Email:</label>
						<input name="email" id="email" value="" type="text" /><br /></p>
						<p><label for="message">Message:</label>	
						<textarea cols="60" rows="11" name="message" id="message"></textarea><br /></p>
						<p><input name="send" class="formbutton" value="Send" type="submit" /></p>
					</form>

	
				</fieldset>
            </div>
        </div>
        
        <div class="sidebar">
            <ul>	
               <li>
                    <h4><span>Navigate</span></h4>
                    <ul class="blocklist">
                        <li><a href="../Plantillas/index.php">Home</a></li>
                        <li><a href="../Plantillas/examples.php">Examples</a></li>
                        <li><a href="#">Products</a></li>
                        <li><a href="#">Solutions</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </li>
                
                <li>
                    <h4><span>About</span></h4>
                    <ul>
                        <li>
                        	<p style="margin: 0;">Aenean nec massa a tortor auctor sodales sed a dolor. Duis vitae lorem sem. Proin at velit vel arcu pretium luctus.</p>
                        </li>
                    </ul>
                </li>
                
                <li>
                    <h4><span>Cool Sites</span></h4>
                    <ul>
                        <li><a href="http://www.themeforest.net/?ref=spykawg" title="premium templates"><strong>ThemeForest</strong></a> - premium HTML templates, WordPress themes and PHP scripts</li>
                        <li><a href="http://www.dreamhost.com/r.cgi?259541" title="web hosting"><strong>Web hosting</strong></a> - 50 dollars off when you use promocode <strong>awesome50</strong></li>
                        <li><a href="http://www.4templates.com/?aff=spykawg" title="4templates"><strong>4templates</strong></a> - brilliant premium templates</li>
                    </ul>
                </li>
                
            </ul> 
        </div>
    	<div class="clear"></div>
    </div>
    <?php include("Footer.php"); ?>
</div>
<div style="text-align: center; font-size: 0.75em;">Design downloaded from <a href="http://www.freewebtemplates.com/">free website templates</a>.</div></body>
</html>
