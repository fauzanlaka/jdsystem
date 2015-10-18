<?php
// biblio/record detail
// output the buffer
ob_start();
echo '<table class="border margined" style="width: 100%;" cellpadding="5" cellspacing="0">'."\n";
echo '<tr>';
echo '<td class="tblHead" style="width: 20%;" valign="top">'.lang_mod_biblio_field_title.'</td>';
echo '<td class="tblContent" style="width: 80%;" valign="top">{title}</td>';
echo '</tr>';
echo '<tr>';
echo '<td class="tblHead" style="width: 20%;" valign="top">'.lang_mod_biblio_field_edition.'</td>';
echo '<td class="tblContent" style="width: 80%;" valign="top">{edition}</td>';
echo '</tr>';
echo '<tr>';
echo '<td class="tblHead" style="width: 20%;" valign="top">'.lang_mod_biblio_field_call_number.'</td>';
echo '<td class="tblContent" style="width: 80%;" valign="top">{call_number}</td>';
echo '</tr>';
echo '<tr>';
echo '<td class="tblHead" style="width: 20%;" valign="top">'.lang_mod_biblio_field_isbn.'</td>';
echo '<td class="tblContent" style="width: 80%;" valign="top">{isbn_issn}</td>';
echo '</tr>';
echo '<tr>';
echo '<tr>';
echo '<td class="tblHead" style="width: 20%;" valign="top">'.lang_mod_biblio_field_authors.'</td>';
echo '<td class="tblContent" style="width: 80%;" valign="top">{authors}</td>';
echo '</tr>';
echo '<tr>';
echo '<td class="tblHead" style="width: 20%;" valign="top">'.lang_mod_biblio_field_topic.'</td>';
echo '<td class="tblContent" style="width: 80%;" valign="top">{subjects}</td>';
echo '</tr>';
echo '<tr>';
echo '<td class="tblHead" style="width: 20%;" valign="top">'.lang_mod_biblio_field_class.'</td>';
echo '<td class="tblContent" style="width: 80%;" valign="top">{classification}</td>';
echo '</tr>';
echo '<tr>';
echo '<td class="tblHead" style="width: 20%;" valign="top">'.lang_mod_biblio_field_series.'</td>';
echo '<td class="tblContent" style="width: 80%;" valign="top">{series_title}</td>';
echo '</tr>';
echo '<td class="tblHead" style="width: 20%;" valign="top">'.lang_mod_biblio_field_gmd.'</td>';
echo '<td class="tblContent" style="width: 80%;" valign="top">{gmd_name}</td>';
echo '</tr>';
echo '<tr>';
echo '<td class="tblHead" style="width: 20%;" valign="top">'.lang_mod_biblio_field_lang.'</td>';
echo '<td class="tblContent" style="width: 80%;" valign="top">{language_name}</td>';
echo '</tr>';
echo '<tr>';
echo '<td class="tblHead" style="width: 20%;" valign="top">'.lang_mod_biblio_field_publisher.'</td>';
echo '<td class="tblContent" style="width: 80%;" valign="top">{publisher_name}</td>';
echo '</tr>';
echo '<tr>';
echo '<td class="tblHead" style="width: 20%;" valign="top">'.lang_mod_biblio_field_publish_year.'</td>';
echo '<td class="tblContent" style="width: 80%;" valign="top">{publish_year}</td>';
echo '</tr>';
echo '<tr>';
echo '<td class="tblHead" style="width: 20%;" valign="top">'.lang_mod_biblio_field_publish_place.'</td>';
echo '<td class="tblContent" style="width: 80%;" valign="top">{publish_place}</td>';
echo '</tr>';
echo '<tr>';
echo '<td class="tblHead" style="width: 20%;" valign="top">'.lang_mod_biblio_field_collation.'</td>';
echo '<td class="tblContent" style="width: 80%;" valign="top">{collation}</td>';
echo '</tr>';
echo '<tr>';
echo '<td class="tblHead" style="width: 20%;" valign="top">'.lang_mod_biblio_field_notes.'</td>';
echo '<td class="tblContent" style="width: 80%;" valign="top">{notes}</td>';
echo '</tr>';
echo '<tr>';
echo '<td class="tblHead" style="width: 20%;" valign="top">'.lang_mod_biblio_item_field_location.'</td>';
echo '<td class="tblContent" style="width: 80%;" valign="top">{location}</td>';
echo '</tr>';
echo '<tr>';
echo '<td class="tblHead" style="width: 20%;" valign="top">'.lang_mod_biblio_field_image.'</td>';
echo '<td class="tblContent" style="width: 80%;" valign="top">{image}</td>';
echo '</tr>';
echo '<tr>';
echo '<td class="tblHead" style="width: 20%;" valign="top">'.lang_mod_biblio_field_attachment.'</td>';
echo '<td class="tblContent" style="width: 80%;" valign="top">{file_att}</td>';
echo '</tr>';
echo '<tr>';
echo '<td class="tblHead" style="width: 20%;" valign="top">'.lang_mod_biblio_field_availability.'</td>';
echo '<td class="tblContent" style="width: 80%;" valign="top">{availability}</td>';
echo '</tr>';
echo '<tr>';
echo '<td class="tblHead" style="width: 20%;" valign="top">&nbsp;</td>';
echo '<td class="tblContent" style="width: 80%;" valign="top"><a href="javascript: history.back();">'.lang_opac_back_prev.'</a></td>';
echo '</tr>';
echo '</table>';
// put the buffer to template var
$detail_template = ob_get_clean();
?>
