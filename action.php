<?php
/**
 * Plugin simplensbanner: Le plugin "Simple NS Banner" pour DokuWiki permet d'afficher automatiquement une bannière statique sur chaque page des namespace "pole_se:lille" "pole_se:commun" "pole_se:gps" "pole_se:nantes" "pole_se:strasbourg_europe" "pole_se:toulouse" "pole_se:vendee"  "pole_se:bretagne" 
 * 
 * @author     Jean-Philippe Moignez
 */

if(!defined('DOKU_INC')) die();

class action_plugin_simplensbanner extends DokuWiki_Action_Plugin {

    public function register(Doku_Event_Handler $controller) {
        $controller->register_hook('TPL_ACT_RENDER', 'BEFORE', $this, 'handle_display_mynsbanner', array());
    }

    public function handle_display_mynsbanner(Doku_Event $event, $param) {
		$namespace = getNS(cleanID(getID()));

		if (substr($namespace, 0, 13) == 'pole_se:lille') {
			echo '<div class="approval approved_yes"><span class="approval_draft">';
			echo 'Cette page n\'est valable que pour le site de LILLE.';
			echo '</span></div>';
        } 
		
		if(substr($namespace, 0, 11) == 'pole_se:gps') {
			echo '<div class="approval approved_no"><span class="approval_draft">';
			echo 'Cette page n\'est valable que pour le site de GRAND PARIS SUD.';
			echo '</span></div>';
        } 
		
		if(substr($namespace, 0, 14) == 'pole_se:nantes') {
			echo '<div class="approval approved_no"><span class="approval_draft">';
			echo 'Cette page n\'est valable que pour le site de NANTES.';
			echo '</span></div>';
        } 

		if(substr($namespace, 0, 25) == 'pole_se:strasbourg_europe') {
			echo '<div class="approval approved_no"><span class="approval_draft">';
			echo 'Cette page n\'est valable que pour le site de GRAND PARIS SUD.';
			echo '</span></div>';
        } 		

		if(substr($namespace, 0, 16) == 'pole_se:toulouse') {
			echo '<div class="approval approved_no"><span class="approval_draft">';
			echo 'Cette page n\'est valable que pour le site de TOULOUSE.';
			echo '</span></div>';
        } 				

		if(substr($namespace, 0, 14) == 'pole_se:vendee') {
			echo '<div class="approval approved_no"><span class="approval_draft">';
			echo 'Cette page n\'est valable que pour le site de VENDEE.';
			echo '</span></div>';
        } 				

		if(substr($namespace, 0, 16) == 'pole_se:bretagne') {
			echo '<div class="approval approved_no"><span class="approval_draft">';
			echo 'Cette page n\'est valable que pour le site de BRETAGNE.';
			echo '</span></div>';
        } 				

		return;
    }


}
