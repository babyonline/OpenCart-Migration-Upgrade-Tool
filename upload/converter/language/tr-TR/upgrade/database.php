<?php
// Heading
$_['heading_title']             = 'Veritabanı Yükseltmesi';
// Text
$_['text_home']                     = 'Ana sayfa';
$_['text_exa_store_path']       = '<br><span class="script-filename">Yardım: Sunucunuzdaki dosya yolu: <em>%s</em>.</span>';
$_['text_intro_1']		= 'Bu uygulama OpenCart 1.4.7-2.0.0.0 sürümlerinden sürüm 2.x e güncelleştirme için tasarlanmıştır';
$_['text_intro_2']		= 'Aşağıdaki güncelleştirme işlemi 3 adımda yapılır: <ol><li>Veritabanı tabloları denetleme ve eksik tabloları ekleme, gerekli alanları dönüştürme</li> <li>Varolan yapılandırma dosyalarını dönüştürme (front &amp;  backend)</li><li>Resim yollarını dönüştürme</li></ol>';
$_['text_intro_3']		= 'Bu Güncelleyici <b>simülasyon</b> modunda da işletilebilir. Bu seçeneği <br/> etkinleştirirseniz gerçek hiçbir işlem yapılmaz.';
$_['text_toggle_help']     	= 'Yardımı Göster/Sakla';
$_['text_upgrade_info']         = 'Yükseltme Bilgisi';
$_['text_update_theme']         = 'Temayı şimdi güncelleştir';
$_['text_skip_theme']            = 'Temayı Atla';
$_['text_module_info']      = 'Move modules to the new tables';
$_['text_setting_info']     = 'Add new settings to database';
$_['text_collate_info']     = 'Update to the next database collation';
$_['text_data_info']        = 'Add the data to the new database columns';
$_['text_column_info']      = 'Add new columns';
$_['text_table_info']       = 'Start to add new tables';
$_['text_update_config']        = 'Şimdi de <b>config. php</b> dosyaları güncelleyebilirsiniz eğer bitmemişse';
$_['text_version']          = 'Your store database structure have been identified %s.';
// header
$_['header_step_1']          = 'The to database has been added to the new tables successfully';
$_['header_step_column']     = 'The to database has been added to new columns successfully';
$_['header_step_collate']    = 'Database collation is updated succesfully';
$_['header_step_module']     = 'Modules is moved to new tables succesfully';
// Entry
$_['entry_up_1564']		     = 'Upgrade database to version 1.5.6.4';
$_['entry_up_201_202']		= 'Veritabanını 2.0.1 - 2.0.2.0 sürümüne yükselt';
$_['entry_up_2030']		= 'Veritabanını 2.0.3.1 sürümüne yükselt';
$_['entry_migration_module'] = 'Move modules again (truncate first tables `layout_module` ja `module`)';
$_['entry_up_2100']		     = 'Upgrade database to version 2.1.0.0';
// help
$_['help_ops']			= 'İşlemleri Göster <small>(tüm veritabanı işlemleri görüntüleme)</small>';
$_['help_simulate']		= 'Simülasyon Dönüştürme <small>(yalnızca simülasyon işlemler)</small>';
$_['help_usage']		= '<b>How to use this tool?</b><ol type="1"><li>If not already done, download the OpenCart v.2 package from <a href="http://www.opencart.com" target="_blank">OpenCart</a></li><li>Unzip that package locally</li><li>This script has to be placed in the subfolder <b>converter</b> folder of your shopinstallation (../converter))</li><li>Now you have two (2) options:<ol type="I"><li>Transfer all folders and files from the OpenCart v.2 package <b>into the installed shop</b></li><li><b>Create a new directory</b> and copy all folders and files from the OpenCart v.2 package into</li></ol></li><li>If you have chosen method II copy the folder <b>image</b> and the <b>2 config.php</b> from the old shop</li><li><b>Never use the installer from the OpenCart 2.x package!</b></li><li>Set your options above and click on <b>Continue</b></li><li>If you are finished with this upgrade, do not to forget to delete this script</li></ol>';
// Msg
$_['msg_cat_path']		= '<b>%s</b> giriş/ler eklendi';
$_['msg_change_column']		= 'Sütun <b>%s</b> <b>%s</b> için başarıyla değiştirildi';
$_['msg_change_counter']	= 'Toplam <b>%s</b> SÜTUN YAPISI BAŞARIYLA DEĞİŞTİRİLDİ';
$_['msg_col_counter']	        = 'Toplam <b>%s</b> YENİ SUTÜN BAŞARIYLA EKLENDİ';
$_['msg_column']		= 'Sutün <b>%s</b> başarıyla <b>%s</b> tablosuna eklendi';
$_['msg_config']		= 'Config setting <b>%s</b> successfully added to table <b>%s</b>';
$_['msg_config_delete']  	= 'Config setting <b>%s</b> successfully deleted from table <b>%s</b>';
$_['msg_converter_setting']     = '<b>Subsequently converted old OpenCart versions of <em>setting</em> to be compatible with a flat:</b>';
$_['msg_del_column']	        = 'Delete total <b>%d</b> column(s) successfully';
$_['msg_delete']		= 'Table <b>%s</b> successfully deleted';
$_['msg_delete_column']		= 'Column <b>%s</b> is successfully deleted to table <b>%s</b>';
$_['msg_delete_setting']        = 'DELETED total <b>%s</b> setting(s) from <b>%s%s</b> table';
$_['msg_delete_table']	        = 'DELETED total <b>%d</b> TABLE(S) SUCCESSFULLY';
$_['msg_end_converter_setting'] = '<b>Old OpenCart version of the <em>setting</em> table conversion completed successfully !</b>';
$_['msg_new_data']		= 'yeni veri eklendi';
$_['msg_new_setting']	        = 'Toplam <b>%d</b> yeni ayar <b>%s</b> tablosuna EKLENDİ';
$_['msg_table']			= 'Tablo <b>%s</b> başarıyla veritabanına eklendi';
$_['msg_table_count']	        = 'Toplam <b>%s</b> TABLOLAR BAŞARIYLA EKLENDİ';
$_['msg_collate_count']	        = 'Updated total <b>%s</b> tables collate succesfully';
$_['msg_column_collate_count']  = 'Updated tota <b>%s</b> columns collate succesfully';
$_['msg_table_engine']		= 'In Table <b>%s</b> is table engine changed <em>MyISAM</em>';
$_['msg_table_engine_checked']	= 'Table Engine in table <b>%s</b> is checked';
$_['msg_text']			= 'Table <b>%s</b> - %s';
$_['msg_upgrade_to_version']	= 'Database Tables is added to version <b>%s</b> - %s level.';
?>
