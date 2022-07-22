<?php
		

/*************************************************
 *
 * WhoIs by Christoph Herthel
 * Original by Max
 * Version: 762021
 * Developed by www.hchristo.de
 *
 ****************************************************/

class maxWhois{

    var $serverList;
    var int $tr = 0;
    
function maxWhois(){   
	$this->serverList[0]['top']      = 'de';
	$this->serverList[0]['price']    = '4,50€';
	$this->serverList[0]['server']   = 'whois.denic.de';
	$this->serverList[0]['response'] = 'free';
	$this->serverList[0]['check']    = true;
	
	$this->serverList[1]['top']      = 'net';
	$this->serverList[1]['price']    = '19€';
	$this->serverList[1]['server']   = 'whois.crsnic.net';
	$this->serverList[1]['response'] = 'No match for';
	$this->serverList[1]['check']    = false;
/*
	$this->serverList[2]['top']      = 'org';
	$this->serverList[2]['server']   = 'whois.publicinterestregistry.net';
	$this->serverList[2]['response'] = 'NOT FOUND';
	$this->serverList[2]['check']    = false;
	
	$this->serverList[3]['top']      = 'info';
	$this->serverList[3]['server']   = 'whois.afilias.net';
	$this->serverList[3]['response'] = 'NOT FOUND';
	$this->serverList[3]['check']    = false;
	
	$this->serverList[4]['top']      = 'name';
	$this->serverList[4]['server']   = 'whois.nic.name';
	$this->serverList[4]['response'] = 'No match';
	$this->serverList[4]['check']    = false;
	
	$this->serverList[6]['top']      = 'biz';
	$this->serverList[6]['server']   = 'whois.nic.biz';
	$this->serverList[6]['response'] = 'Not found';
	$this->serverList[6]['check']    = false;
	
	$this->serverList[7]['top']      = 'ca';
	$this->serverList[7]['server']   = 'whois.cira.ca';
	$this->serverList[7]['response'] = 'AVAIL';
	$this->serverList[7]['check']    = false;
*/
	$this->serverList[5]['top']      = 'dev';
	$this->serverList[5]['price']    = 'n/a';
	$this->serverList[5]['server']   = 'whois.nic.google';
	$this->serverList[5]['response'] = 'Domain not found';
	$this->serverList[5]['check']    = false;

	$this->serverList[4]['top']      = 'me';
	$this->serverList[4]['price']    = '24€';
	$this->serverList[4]['server']   = 'whois.nic.me';
	$this->serverList[4]['response'] = 'NOT FOUND';
	$this->serverList[4]['check']    = false;
	
	
	$this->serverList[3]['top']      = 'eu';
	$this->serverList[3]['price']    = '12€';
	$this->serverList[3]['server']   = 'whois.eu';
	$this->serverList[3]['response'] = 'AVAILABLE';
	$this->serverList[3]['check']    = false;
	
	$this->serverList[2]['top']      = 'com';
	$this->serverList[2]['price']    = '15€';
	$this->serverList[2]['server']   = 'whois.crsnic.net';
	$this->serverList[2]['response'] = 'No match for';
	$this->serverList[2]['check']    = false;
}

function showHeader(){
?>
<div class="d-flex flex-column  justify-content-center align-items-center">
    <div id="container">
        <div id="header"><div id="header_left"></div>
        <!-- <div id="header_main">Your-Sponsoring.eu Domain Check</div><div id="header_right"></div></div> -->
        <div id="content">
<?php
}

function showWhoisForm(){
?>
            <form class="form-inline" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" >
				<table class="table">
                <tr><th colspan="6">Tippe deine Domain ein:</th></tr>
				<tr><td colspan="6" style="text-align: center;">
						<div class="input-group">
							<input required name="domain" id="www" class="form-control" pattern="^([- \w\d\u00c0-\u024f]+)$" placeholder="Domainname Eingeben ohne www. & .de" type="text" minlength="4" />
						</div>
					</td>
				</tr>
                <tr><th colspan="6">Wähle eine Endung:</th></tr>
				<tr>
            <?php
            	$i = 0;
                foreach ($this->serverList as $value) {
                    if ($value['check'] == true) $checked=" checked ";
            		else $checked = " ";
            		
            		echo '<td><input class="form-check-input" type="checkbox" name="top_'.$value['top'].'"'.$checked.'/>.'.$value['top'].'<br>'.$value['price'].' /Jahr</td>';
                    $i++;            		
            		if ($i > 4) {
            		    $i = 0;
            		}
            	}
            	
            ?>
				</tr>
				</table>
				<div class="d-grid gap-2">
						<button type="submit" class="btn btn-success btn-block" name="submitBtn" ><i class="fas fa-check"></i> Domain Prüfen</button><br>
						</div>
            </form>
			
<?php
}

function showFooter(){
?>
        </div>
        <!-- Modal -->
<div class="modal fade" id="helpers" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Informationen</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Designed mit ♥ und <a href="https://jquery.com/" target="_blank">jQuery</a>, <a href="https://getbootstrap.com" target="_blank">Bootstrap</a> & <a href="https://fontawesome.com/" target="_blank">Font Awesome</a>
      </div>
      <div class="modal-footer">
        Ver.: <a href="#" data-bs-toggle="modal" data-bs-target="#changelog">Changelog</a> | Ver.: <a href="https://downloads.quick-space.de/programme/scripte/domain-check/Domain_Check_22072022_RC17.zip">Download</a> &emsp; <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Schließen</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal AGB START -->
<div class="modal fade" id="changelog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Changelog</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<div class="ratio ratio-16x9">
			<iframe src="changelog.txt" title="Changelog"></iframe>
		</div>
      </div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Schließen</button>
      </div>
    </div>
  </div>
</div>
	<!-- Modal AGB END -->	
        <div id="footer" align="center"><h6><a href="#" data-bs-toggle="modal" data-bs-target="#helpers">Infos</a> | &copy; 2022 by <a href="https://www.hchristo.de" target="_blank">Christoph Herthel</a></h6></div>
    </div>
	</div>
	</div>

<?php
}

function processWhois(){
    $this->showHeader();

    if (!isset($_POST['submitBtn'])){
        $this->showWhoisForm();
    } else {

        $domainName = (isset($_POST['domain'])) ? $_POST['domain'] : '';
        
       	for ($i = 0; $i < sizeof($this->serverList); $i++) {
       		$actTop = "top_".$this->serverList[$i]['top'];
       		$this->serverList[$i]['check'] = isset($_POST[$actTop]);
       	}

        // Check domains only if the base name is big enough
        if (strlen($domainName)>2){
			echo '<div class="table-responsive">';
            echo '<table class="table table-striped">';
            echo '<thead><th>Domain:</th><th>Ergebnis:</th><th>Aktion</th><th></th>
			</thead>';
		
           	for ($i = 0; $i < sizeof($this->serverList); $i++) if ($this->serverList[$i]['check']){
                 $this->showDomainResult($domainName.".".$this->serverList[$i]['top'],
                                         $this->serverList[$i]['server'],
                                        $this->serverList[$i]['response']);
            }
        
		    echo '</table></div>';
        }
        $this->showWhoisForm();
        
    }
    $this->showFooter();

}

function showDomainResult($domain,$server,$findText){
   if ($this->tr == 0){
       $this->tr = 1;
       $class = " class='tr2'";
   } else {
       $this->tr = 0;
       $class = "";
   }
   if ($this->checkDomain($domain,$server,$findText)){
       echo "<tr $class>
				<td>$domain</td>
				<td>
					<span class='badge text-bg-success'>Verfügbar</span>
				</td>
				<td>
					<a class='btn btn-primary btn-sm' href='https://ticket.quick-space.de/index.php?a=add&category=6' target='_top'><i class='fas fa-shopping-cart'></i> Jetzt Bestellen</a>
				<td>
			</tr>";
					
   }
   else echo "<tr $class>
				<td>
					<a href=http://".$domain." target='_blank'>$domain</a>
				</td>
				<td class='tak'>
					<span class='badge text-bg-danger'>Vergeben</span>
				</td>
				<td></td>
				<td></td>
			</tr>";
}

function checkDomain($domain,$server,$findText): bool
{
    $con = fsockopen($server, 43);
    if (!$con) return false;
        
    // Send the requested domain name
    fputs($con, $domain."\r\n");
        
    // Read and store the server response
    $response = ' :';
    while(!feof($con)) {
        $response .= fgets($con,128); 
    }
        
    // Close the connection
    fclose($con);
        
    // Check the response stream whether the domain is available
    if (strpos($response, $findText)){
        return true;
    }
    else {
        return false;   
    }
}

}
?>