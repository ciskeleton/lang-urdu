<?php

/**
 * ------------------------------------------------------------------------
 * CiSkeleton Admin Language File
 * ------------------------------------------------------------------------
 * This file contains all language lines used in the CSK admin dashboard.
 * Each section is separated by comments for easier navigation and maintenance.
 */

/**
 * ------------------------------------------------------------------------
 * Core Dashboard Section
 * ------------------------------------------------------------------------
 * General terms and messages used across the admin dashboard.
 */
$lang['admin_components'] = 'اجزاء';
$lang['admin_content'] = 'مواد';
$lang['admin_database_backup'] = 'ڈیٹا بیس بیک اپ';
$lang['admin_extensions'] = 'ایکسٹینشنز';
$lang['admin_firewall'] = 'فائر وال';
$lang['admin_help'] = 'مدد';
$lang['admin_languages'] = 'زبانیں';
$lang['admin_logs'] = 'سسٹم لاگز';
$lang['admin_media'] = 'میڈیا لائبریری';
$lang['admin_modules'] = 'ماڈیولز';
$lang['admin_plugins'] = 'پلگ انز';
$lang['admin_reports'] = 'سرگرمی لاگ';
$lang['admin_settings'] = 'سسٹم کی ترتیبات';
$lang['admin_sysinfo'] = 'سسٹم کی معلومات';
$lang['admin_system'] = 'سسٹم';
$lang['admin_system_firewall'] = 'سسٹم فائر وال';
$lang['admin_themes'] = 'تھیمز';
$lang['admin_updates'] = 'سسٹم اپڈیٹس';
$lang['admin_users'] = 'صارفین';
$lang['admin_view_site'] = 'سائٹ دیکھیں';
$lang['per_page'] = 'فی صفحہ';

// Generic Messages
$lang['admin_footer_thankyou'] = '<a href="%s">%s</a> کے ساتھ تخلیق کرنے کا شکریہ۔';
$lang['admin_items_active_count'] = '=0{کوئی فعال آئٹمز نہیں ہیں۔} other{کل <b>%s</b> میں سے <b>#</b> آئٹمز فعال ہیں۔}';

/**
 * ---------------------------------------------------------------
 * Extension Install Section
 * ---------------------------------------------------------------
 * Language lines for the extension installation section.
 */
$lang['admin_install_error_com'] = 'انسٹالیشن ناکام ہوئی: %s';
$lang['admin_install_location_app'] = 'صرف یہ درخواست';
$lang['admin_install_location_core'] = 'تمام ایپلی کیشنز';
$lang['admin_install_location_select'] = '&#151; مقام منتخب کریں &#151;';
$lang['admin_install_update_confirm'] = 'کیا آپ واقعی اس پیکج کو اپ ڈیٹ کرنا چاہتے ہیں؟';
$lang['admin_install_update_error'] = 'پیکج اپ ڈیٹ کرنے میں ناکامی۔';
$lang['admin_install_update_skip_confirm'] = 'کیا آپ واقعی طور پر اس اپ ڈیٹ کو چھوڑنا چاہتے ہیں؟';
$lang['admin_install_update_skip_error'] = 'اس اپ ڈیٹ کو چھوڑنے میں ناکامی ہوئی۔';
$lang['admin_install_update_skip_success'] = 'اپ ڈیٹ کامیابی سے چھوڑ دی گئی۔';
$lang['admin_install_update_success'] = 'پیکج کامیابی سے اپ ڈیٹ ہو گیا۔';
$lang['admin_install_upload_tip'] = 'یہاں اس کی <b>.zip</b> فائل اپ لوڈ کرکے پیکیج انسٹال کریں۔';

/**
 * ---------------------------------------------------------------
 * Database & Backup Section
 * ---------------------------------------------------------------
 * Language lines for the database management section.
 */
$lang['admin_database_backup_clean_error'] = 'پرانی بیک اپ فائلوں کو صاف کرنے میں ناکام۔';
$lang['admin_database_backup_clean_success'] = '%d بیک اپ فائلیں حذف کر دی گئیں۔ %d ڈسک کی جگہ خالی کر دی گئی۔';
$lang['admin_database_backup_create'] = 'بیک اپ بنائیں';
$lang['admin_database_backup_create_confirm'] = 'کیا آپ واقعی ابھی بیک اپ بنانا چاہتے ہیں؟';
$lang['admin_database_backup_create_error'] = 'بیک اپ فائل بنانے میں ناکام۔ یقینی بنائیں کہ فولڈر <b>%s</b> قابل تحریر ہے۔';
$lang['admin_database_backup_create_success'] = 'ڈیٹا بیس کی بیک اپ فائل <b>%s</b> کامیابی کے ساتھ بن گئی۔';
$lang['admin_database_backup_delete_confirm'] = 'کیا آپ واقعی ان بیک اپ فائلوں کو حذف کرنا چاہتے ہیں؟';
$lang['admin_database_backup_delete_error'] = 'منتخب کردہ بیک اپ فائلوں کو حذف کرنے میں ناکام۔';
$lang['admin_database_backup_delete_success'] = 'بیک اپ فائلوں کو کامیابی کے ساتھ حذف کر دیا گیا۔';
$lang['admin_database_backup_download_error'] = 'منتخب کردہ بیک اپ فائل ڈاؤن لوڈ کرنے میں ناکام۔';
$lang['admin_database_backup_download_success'] = 'بیک اپ فائل کامیابی کے ساتھ ڈاؤن لوڈ ہو گئی۔';
$lang['admin_database_backup_lock_confirm'] = 'کیا آپ واقعی ان بیک اپ فائلوں کو مقفل کرنا چاہتے ہیں؟';
$lang['admin_database_backup_lock_error'] = 'منتخب کردہ بیک اپ فائلوں کو لاک کرنے میں ناکام۔';
$lang['admin_database_backup_lock_success'] = 'بیک اپ فائلوں کو کامیابی کے ساتھ لاک کر دیا گیا۔';
$lang['admin_database_backup_locked_error'] = 'مقفل بیک اپ فائلوں کو حذف کرنے میں ناکام۔';
$lang['admin_database_backup_missing_error'] = 'بیک اپ فائل نہیں مل سکی۔';
$lang['admin_database_backup_unlock_confirm'] = 'کیا آپ واقعی ان بیک اپ فائلوں کو غیر مقفل کرنا چاہتے ہیں؟';
$lang['admin_database_backup_unlock_error'] = 'منتخب کردہ بیک اپ فائلوں کو غیر مقفل کرنے میں ناکام۔';
$lang['admin_database_backup_unlock_success'] = 'بیک اپ فائلوں کو کامیابی کے ساتھ غیر مقفل کر دیا گیا۔';
$lang['admin_database_prune'] = 'خشک آلوچہ';
$lang['admin_database_prune_confirm'] = 'کیا آپ واقعی ڈیٹابیس کاٹنا چاہتے ہیں؟ ایک بیک اپ عملدرآمد بنایا جائے گا.';
$lang['admin_database_prune_error'] = 'ڈیٹا بیس کی کٹائی میں ناکام۔';
$lang['admin_database_prune_next'] = 'اگلی کٹائی: <b>%s</b>';
$lang['admin_database_prune_success'] = 'ڈیٹا بیس کو کامیابی سے کاٹا گیا۔';

/**
 * ---------------------------------------------------------------
 * System Logs Section
 * ---------------------------------------------------------------
 * Language lines for the system logs section.
 */
$lang['admin_logs_delete'] = 'لاگز کو حذف کریں۔';
$lang['admin_logs_delete_confirm'] = 'کیا آپ واقعی منتخب لاگ فائلوں کو حذف کرنا چاہتے ہیں؟';
$lang['admin_logs_delete_error'] = 'لاگ فائلوں کو حذف کرنے میں ناکام۔';
$lang['admin_logs_delete_success'] = 'لاگ فائلوں کو کامیابی سے حذف کر دیا گیا۔';
$lang['admin_logs_error_disabled'] = 'لاگنگ فی الحال فعال نہیں ہے۔';
$lang['admin_logs_error_empty'] = 'کوئی نوشتہ نہیں ملا۔';
$lang['admin_logs_error_missing'] = 'یا تو لاگ فائل کا پتہ نہیں چل سکا، یا یہ خالی تھی۔';
$lang['admin_logs_tip'] = 'لاگنگ تیزی سے بہت بڑی فائلیں بنا سکتی ہے۔ لائیو سائٹس کے لیے، پرانی سائٹوں کو حذف کرنے کے بارے میں سوچیں۔';

/**
 * ---------------------------------------------------------------
 * Emails Section
 * ---------------------------------------------------------------
 * Language lines for the mail queue section.
 */
$lang['admin_emails_delete_confirm'] = 'کیا آپ واقعی منتخب ای میلز کو حذف کرنا چاہتے ہیں؟';
$lang['admin_emails_delete_error'] = 'منتخب ای میلز کو حذف کرنے میں ناکام۔';
$lang['admin_emails_delete_success'] = 'منتخب ای میلز کامیابی کے ساتھ حذف کر دی گئیں۔';
$lang['admin_emails_email_from'] = 'سے بھیجا گیا۔';
$lang['admin_emails_mail_queue'] = 'میل کی قطار';
$lang['admin_emails_mailer'] = 'ماس میل';
$lang['admin_emails_search'] = 'موضوع یا مواد کے لحاظ سے ای میلز تلاش کریں...';
$lang['admin_emails_send_error'] = 'ای میل کی قطار لگانے میں ناکام۔ براہ کرم دوبارہ کوشش کریں۔';
$lang['admin_emails_send_none'] = 'کوئی صارف آپ کے منتخب کردہ معیار سے میل نہیں کھاتا۔';
$lang['admin_emails_send_success'] = 'ای میل قطار میں ہے اور جلد ہی بھیج دیا جائے گا۔';
$lang['admin_emails_send_to_banned'] = 'ممنوعہ صارفین کو بھیجیں۔';
$lang['admin_emails_send_to_deleted'] = 'حذف شدہ صارفین کو بھیجیں۔';
$lang['admin_emails_send_to_disabled'] = 'غیر فعال صارفین کو بھیجیں۔';

/**
 * ---------------------------------------------------------------
 * Users Section
 * ---------------------------------------------------------------
 * Language lines for the users management section.
 */
$lang['admin_users_add'] = 'صارف شامل کریں۔';
$lang['admin_users_all_users'] = 'تمام صارفین';
$lang['admin_users_ban_confirm'] = 'کیا آپ واقعی منتخب صارفین پر پابندی لگانا چاہتے ہیں؟';
$lang['admin_users_ban_error'] = 'منتخب صارفین پر پابندی لگانے میں ناکام۔';
$lang['admin_users_ban_success'] = 'منتخب صارفین کو کامیابی کے ساتھ پابندی لگا دی گئی۔';
$lang['admin_users_delete_confirm'] = 'کیا آپ واقعی منتخب صارفین کو حذف کرنا چاہتے ہیں؟';
$lang['admin_users_delete_error'] = 'منتخب صارفین کو حذف کرنے میں ناکام۔';
$lang['admin_users_delete_success'] = 'منتخب صارفین کو کامیابی کے ساتھ حذف کر دیا گیا۔';
$lang['admin_users_disable_confirm'] = 'کیا آپ واقعی منتخب صارفین کو غیر فعال کرنا چاہتے ہیں؟';
$lang['admin_users_disable_error'] = 'منتخب صارفین کو غیر فعال کرنے میں ناکام۔';
$lang['admin_users_disable_success'] = 'منتخب صارفین کو کامیابی سے غیر فعال کر دیا گیا۔';
$lang['admin_users_edit'] = 'صارف میں ترمیم کریں۔';
$lang['admin_users_edit_error'] = 'صارف کو اپ ڈیٹ کرنے میں ناکام۔';
$lang['admin_users_edit_success'] = 'صارف کامیابی کے ساتھ اپ ڈیٹ ہو گیا۔';
$lang['admin_users_enable_confirm'] = 'کیا آپ واقعی منتخب صارفین کو فعال کرنا چاہتے ہیں؟';
$lang['admin_users_enable_error'] = 'منتخب صارفین کو فعال کرنے میں ناکام۔';
$lang['admin_users_enable_success'] = 'منتخب صارفین کو کامیابی کے ساتھ فعال کر دیا گیا۔';
$lang['admin_users_groups'] = 'گروپس';
$lang['admin_users_lock_confirm'] = 'کیا آپ واقعی منتخب صارفین کو مقفل کرنا چاہتے ہیں؟';
$lang['admin_users_lock_error'] = 'منتخب صارفین کو مقفل کرنے میں ناکام۔';
$lang['admin_users_lock_success'] = 'منتخب صارفین کامیابی کے ساتھ مقفل ہو گئے۔';
$lang['admin_users_logged'] = 'لاگ ان صارفین';
$lang['admin_users_manage'] = 'صارفین کا نظم کریں۔';
$lang['admin_users_remove_confirm'] = 'کیا آپ واقعی منتخب صارفین اور ان کے تمام ڈیٹا کو مستقل طور پر حذف کرنا چاہتے ہیں؟';
$lang['admin_users_remove_error'] = 'منتخب صارفین اور ان کے تمام ڈیٹا کو مستقل طور پر حذف کرنے میں ناکام۔';
$lang['admin_users_remove_success'] = 'منتخب صارفین کا تمام ڈیٹا کامیابی کے ساتھ حذف ہو گیا۔';
$lang['admin_users_restore_confirm'] = 'کیا آپ واقعی منتخب صارفین کو بحال کرنا چاہتے ہیں؟';
$lang['admin_users_restore_error'] = 'منتخب صارفین کو بحال کرنے میں ناکام۔';
$lang['admin_users_restore_success'] = 'منتخب صارفین کو کامیابی کے ساتھ بحال کیا گیا۔';
$lang['admin_users_search'] = 'نام، صارف نام، یا ای میل کے ذریعے تلاش کریں...';
$lang['admin_users_unban_confirm'] = 'کیا آپ واقعی منتخب صارفین پر پابندی ختم کرنا چاہتے ہیں؟';
$lang['admin_users_unban_error'] = 'منتخب صارفین پر پابندی ختم کرنے میں ناکام۔';
$lang['admin_users_unban_success'] = 'منتخب صارفین کو کامیابی کے ساتھ پابندی ختم کر دی گئی۔';
$lang['admin_users_unlock_confirm'] = 'کیا آپ واقعی منتخب صارفین کو غیر مقفل کرنا چاہتے ہیں؟';
$lang['admin_users_unlock_error'] = 'منتخب صارفین کو غیر مقفل کرنے میں ناکام۔';
$lang['admin_users_unlock_success'] = 'منتخب صارفین کو کامیابی کے ساتھ غیر مقفل کر دیا گیا۔';

/**
 * ---------------------------------------------------------------
 * Reports Section
 * ---------------------------------------------------------------
 * Language lines for the activity log section.
 */
$lang['admin_reports_clear'] = 'لاگز صاف کریں۔';
$lang['admin_reports_clear_confirm'] = 'کیا آپ واقعی ایکشن لاگ کو صاف کرنا چاہتے ہیں؟';
$lang['admin_reports_clear_error'] = 'ایکشن لاگ کو صاف کرنے میں ناکام۔';
$lang['admin_reports_clear_success'] = 'ایکشن لاگ کامیابی کے ساتھ صاف ہو گیا۔';
$lang['admin_reports_latest_actions'] = 'تازہ ترین ایکشن';

/**
 * ---------------------------------------------------------------
 * Media Library Section
 * ---------------------------------------------------------------
 * Language lines for the media library section.
 */
$lang['admin_media_delete_confirm'] = 'کیا آپ واقعی منتخب فائلوں کو حذف کرنا چاہتے ہیں؟';
$lang['admin_media_delete_error'] = 'فائلوں کو حذف کرنے میں ناکام۔';
$lang['admin_media_delete_success'] = 'فائلیں کامیابی کے ساتھ حذف ہو گئیں۔';
$lang['admin_media_file_delete_error'] = 'فائل کو حذف کرنے میں ناکام۔';
$lang['admin_media_file_delete_success'] = 'فائل کامیابی سے حذف ہو گئی۔';
$lang['admin_media_file_update_error'] = 'فائل کو اپ ڈیٹ کرنے میں ناکام۔';
$lang['admin_media_file_update_success'] = 'فائل کامیابی کے ساتھ اپ ڈیٹ ہو گئی۔';
$lang['admin_media_search'] = 'نام، تفصیل، یا فائل نام سے تلاش کریں...';

/**
 * ---------------------------------------------------------------
 * Modules Section
 * ---------------------------------------------------------------
 * Language lines for the modules management section.
 */
$lang['admin_modules_active_count'] = '=0{کوئی فعال ماڈیول نہیں ہیں۔} other{کل <b>%s</b> میں سے <b>#</b> ماڈیول فعال ہیں۔}';
$lang['admin_modules_add'] = 'ماڈیول شامل کریں۔';
$lang['admin_modules_delete_confirm'] = 'کیا آپ واقعی اس ماڈیول کو حذف کرنا چاہتے ہیں: <b>%s</b>؟';
$lang['admin_modules_delete_error'] = 'ماڈیول کو حذف کرنے میں ناکام۔';
$lang['admin_modules_delete_error_active'] = 'فعال ماڈیولز کو حذف نہیں کیا جا سکتا۔';
$lang['admin_modules_delete_success'] = 'ماڈیول کامیابی سے حذف ہو گیا۔';
$lang['admin_modules_disable_all_confirm'] = 'کیا آپ واقعی تمام ماڈیولز کو غیر فعال کرنا چاہتے ہیں؟';
$lang['admin_modules_disable_all_error'] = 'تمام ماڈیولز کو غیر فعال کرنے میں ناکام۔';
$lang['admin_modules_disable_all_success'] = 'تمام ماڈیولز کو کامیابی سے غیر فعال کر دیا گیا تھا۔';
$lang['admin_modules_disable_confirm'] = 'کیا آپ واقعی اس ماڈیول کو غیر فعال کرنا چاہتے ہیں: <b>%s</b>؟';
$lang['admin_modules_disable_error'] = 'ماڈیول کو غیر فعال کرنے میں ناکام۔';
$lang['admin_modules_disable_success'] = 'ماڈیول کامیابی سے غیر فعال ہو گیا۔';
$lang['admin_modules_enable_all_confirm'] = 'کیا آپ واقعی تمام ماڈیولز کو فعال کرنا چاہتے ہیں؟';
$lang['admin_modules_enable_all_error'] = 'تمام ماڈیولز کو فعال کرنے میں ناکام۔';
$lang['admin_modules_enable_all_success'] = 'تمام ماڈیولز کامیابی کے ساتھ فعال ہو گئے تھے۔';
$lang['admin_modules_enable_confirm'] = 'کیا آپ واقعی ماڈیول کو فعال کرنا چاہتے ہیں: <b>%s</b>؟';
$lang['admin_modules_enable_error'] = 'ماڈیول کو چالو کرنے میں ناکام۔';
$lang['admin_modules_enable_success'] = 'ماڈیول کامیابی سے چالو ہو گیا۔';
$lang['admin_modules_global'] = 'گلوبل ماڈیول (مشترکہ)';
$lang['admin_modules_install_confirm'] = 'کیا آپ واقعی ماڈیول کو انسٹال کرنا چاہتے ہیں: <b>%s</b>؟';
$lang['admin_modules_install_error'] = 'ماڈیول انسٹال کرنے میں ناکامی۔';
$lang['admin_modules_install_success'] = 'ماڈیول کامیابی سے انسٹال ہو گیا۔';
$lang['admin_modules_install_tip'] = 'ماڈیولز آپ کی سائٹ میں نئی ​​خصوصیات اور فعالیت شامل کرتے ہیں۔ <a href="%s" target="_blank" rel="noopener">module ڈائریکٹری</a> میں دستیاب ماڈیولز کو براؤز کریں یا ایک کو <b>.zip</b> پیکیج کے طور پر اپ لوڈ کریں۔';
$lang['admin_modules_update_confirm'] = 'کیا آپ واقعی اس ماڈیول کو اپ ڈیٹ کرنا چاہتے ہیں؟';
$lang['admin_modules_update_error'] = 'ماڈیول اپ ڈیٹ کرنے میں ناکامی۔';
$lang['admin_modules_update_success'] = 'ماڈیول کامیابی سے اپ ڈیٹ ہو گیا۔';

/**
 * ---------------------------------------------------------------
 * Plugins Section
 * ---------------------------------------------------------------
 * Language lines for the plugins management section.
 */
$lang['admin_plugins_active_count'] = '=0{کوئی فعال پلگ ان نہیں ہیں۔} other{کل <b>%s</b> میں سے <b>#</b> پلگ ان فعال ہیں۔}';
$lang['admin_plugins_add'] = 'پلگ ان شامل کریں۔';
$lang['admin_plugins_delete_confirm'] = 'کیا آپ واقعی پلگ ان کو حذف کرنا چاہتے ہیں: <b>%s</b>؟';
$lang['admin_plugins_delete_error'] = 'پلگ ان کو حذف کرنے میں ناکام۔';
$lang['admin_plugins_delete_error_active'] = 'فعال پلگ انز کو حذف نہیں کیا جا سکتا۔';
$lang['admin_plugins_delete_success'] = 'پلگ ان کامیابی کے ساتھ حذف ہو گیا۔';
$lang['admin_plugins_disable_all_confirm'] = 'کیا آپ واقعی تمام پلگ ان کو غیر فعال کرنا چاہتے ہیں؟';
$lang['admin_plugins_disable_all_error'] = 'تمام پلگ ان کو غیر فعال کرنے میں ناکام۔';
$lang['admin_plugins_disable_all_success'] = 'تمام پلگ ان کامیابی کے ساتھ غیر فعال کر دیے گئے۔';
$lang['admin_plugins_disable_confirm'] = 'کیا آپ واقعی پلگ ان کو غیر فعال کرنا چاہتے ہیں: <b>%s</b>؟';
$lang['admin_plugins_disable_error'] = 'پلگ ان کو غیر فعال کرنے میں ناکام۔';
$lang['admin_plugins_disable_success'] = 'پلگ ان کامیابی کے ساتھ غیر فعال ہو گیا۔';
$lang['admin_plugins_enable_all_confirm'] = 'کیا آپ واقعی تمام پلگ انز کو فعال کرنا چاہتے ہیں؟';
$lang['admin_plugins_enable_all_error'] = 'تمام پلگ انز کو فعال کرنے میں ناکام۔';
$lang['admin_plugins_enable_all_success'] = 'تمام پلگ ان کامیابی کے ساتھ فعال ہو گئے تھے۔';
$lang['admin_plugins_enable_confirm'] = 'کیا آپ واقعی پلگ ان کو فعال کرنا چاہتے ہیں: <b>%s</b>؟';
$lang['admin_plugins_enable_error'] = 'پلگ ان کو چالو کرنے میں ناکام۔';
$lang['admin_plugins_enable_success'] = 'پلگ ان کامیابی سے چالو ہو گیا۔';
$lang['admin_plugins_global'] = 'گلوبل پلگ ان (مشترکہ)';
$lang['admin_plugins_install_confirm'] = 'کیا آپ واقعی پلگ ان کو انسٹال کرنا چاہتے ہیں: <b>%s</b>؟';
$lang['admin_plugins_install_error'] = 'پلگ ان انسٹال کرنے میں ناکامی۔';
$lang['admin_plugins_install_success'] = 'پلگ ان کامیابی سے انسٹال ہو گیا۔';
$lang['admin_plugins_install_tip'] = 'پلگ انز موجودہ خصوصیات کو اضافی اختیارات یا انضمام کے ساتھ بڑھاتے ہیں۔ <a href="%s" target="_blank" rel="noopener">plugin ڈائریکٹری</a> سے انسٹال کریں یا <b>.zip</b> فائل اپ لوڈ کریں۔';
$lang['admin_plugins_update_confirm'] = 'کیا آپ واقعی اس پلگ ان کو اپ ڈیٹ کرنا چاہتے ہیں؟';
$lang['admin_plugins_update_error'] = 'پلگ ان اپ ڈیٹ کرنے میں ناکامی۔';
$lang['admin_plugins_update_success'] = 'پلگ ان کامیابی سے اپ ڈیٹ ہو گیا۔';

/**
 * ---------------------------------------------------------------
 * Themes Section
 * ---------------------------------------------------------------
 * Language lines for the themes management section.
 */
$lang['admin_themes_add'] = 'تھیم شامل کریں۔';
$lang['admin_themes_delete_confirm'] = 'کیا آپ واقعی تھیم کو حذف کرنا چاہتے ہیں: <b>%s</b>؟';
$lang['admin_themes_delete_error'] = 'تھیم کو حذف کرنے میں ناکام۔';
$lang['admin_themes_delete_error_active'] = 'آپ فی الحال فعال تھیم کو حذف نہیں کر سکتے۔';
$lang['admin_themes_delete_success'] = 'تھیم کامیابی کے ساتھ حذف ہو گئی۔';
$lang['admin_themes_disable_confirm'] = 'کیا آپ واقعی تھیم کو غیر فعال کرنا چاہتے ہیں: <b>%s</b>؟';
$lang['admin_themes_disable_error'] = 'تھیم کو غیر فعال کرنے میں ناکام۔';
$lang['admin_themes_disable_error_active'] = 'فعال تھیم کو غیر فعال نہیں کیا جا سکتا۔';
$lang['admin_themes_disable_success'] = 'تھیم کامیابی کے ساتھ غیر فعال ہو گئی۔';
$lang['admin_themes_enable_confirm'] = 'کیا آپ واقعی تھیم کو چالو کرنا چاہتے ہیں: <b>%s</b>؟';
$lang['admin_themes_enable_error'] = 'تھیم کو چالو کرنے میں ناکام۔';
$lang['admin_themes_enable_success'] = 'تھیم کامیابی کے ساتھ فعال ہو گئی۔';
$lang['admin_themes_install_confirm'] = 'کیا آپ واقعی تھیم کو انسٹال کرنا چاہتے ہیں: <b>%s</b>؟';
$lang['admin_themes_install_error'] = 'تھیم انسٹال کرنے میں ناکامی۔';
$lang['admin_themes_install_success'] = 'تھیم کامیابی سے انسٹال ہو گئی۔';
$lang['admin_themes_install_tip'] = 'تھیمز آپ کی سائٹ کی ظاہری شکل اور ترتیب کو تبدیل کرتے ہیں۔ <a href="%s" target="_blank" rel="noopener">theme لائبریری</a> میں سے انتخاب کریں یا اپنی خود کی انسٹال کرنے کے لیے <b>.zip</b> فائل اپ لوڈ کریں۔';
$lang['admin_themes_none_tip'] = 'یہ ایپلیکیشن کسی تھیم کے بغیر چل رہی ہے۔ عوامی انٹرفیس کو حسبِ ضرورت بنانے کے لیے ایک تھیم انسٹال کریں۔';
$lang['admin_themes_update_confirm'] = 'کیا آپ واقعی اس تھیم کو اپ ڈیٹ کرنا چاہتے ہیں؟';
$lang['admin_themes_update_error'] = 'تھیم اپ ڈیٹ کرنے میں ناکامی۔';
$lang['admin_themes_update_success'] = 'تھیم کامیابی سے اپ ڈیٹ ہو گئی۔';

/**
 * ---------------------------------------------------------------
 * Menus Section
 * ---------------------------------------------------------------
 * Language lines for the menu locations section.
 */
$lang['admin_menus'] = 'مینو';
$lang['admin_menus_assign_error'] = 'مینو کے مقامات کو اپ ڈیٹ کرنے میں ناکام۔';
$lang['admin_menus_assign_success'] = 'مینو کے مقامات کامیابی کے ساتھ اپ ڈیٹ ہو گئے۔';
$lang['admin_menus_header'] = '<b>%s</b> مینو مقامات دستیاب ہیں۔';
$lang['admin_menus_location'] = 'مقام';
$lang['admin_menus_locations'] = 'مینو کے مقامات';
$lang['admin_menus_manage'] = 'مینیو کا نظم کریں۔';
$lang['admin_menus_menu'] = 'تفویض کردہ مینو';
$lang['admin_menus_none'] = '&#151; کوئی نہیں &#151;';

/**
 * ---------------------------------------------------------------
 * Languages Section
 * ---------------------------------------------------------------
 * Language lines for the languages management section.
 */
$lang['admin_languages_add'] = 'زبان شامل کریں';
$lang['admin_languages_default_confirm'] = 'کیا آپ واقعی اس زبان کو سائٹ کی ڈیفالٹ زبان بنانا چاہتے ہیں؟';
$lang['admin_languages_default_error'] = 'ڈیفالٹ زبان تبدیل کرنے میں ناکام۔';
$lang['admin_languages_default_error_nochange'] = 'یہ زبان پہلے سے طے شدہ ہے۔';
$lang['admin_languages_default_success'] = 'ڈیفالٹ زبان کامیابی کے ساتھ تبدیل ہوگئی۔';
$lang['admin_languages_delete_confirm'] = 'کیا آپ واقعی زبان کو حذف کرنا چاہتے ہیں: <b>%s</b>؟';
$lang['admin_languages_delete_error'] = 'زبان حذف کرنے میں ناکامی۔';
$lang['admin_languages_delete_error_active'] = 'فعال زبانوں کو حذف نہیں کیا جا سکتا۔';
$lang['admin_languages_delete_error_default'] = 'ڈیفالٹ زبان کو حذف نہیں کیا جا سکتا۔';
$lang['admin_languages_delete_success'] = 'زبان کامیابی سے حذف ہو گئی۔';
$lang['admin_languages_disable_all_confirm'] = 'کیا آپ واقعی تمام زبانوں کو غیر فعال کرنا چاہتے ہیں؟';
$lang['admin_languages_disable_all_error'] = 'تمام زبانوں کو غیر فعال کرنے میں ناکام۔';
$lang['admin_languages_disable_all_success'] = 'تمام زبانیں کامیابی کے ساتھ غیر فعال کر دی گئیں۔';
$lang['admin_languages_disable_confirm'] = 'کیا آپ واقعی اس زبان کو غیر فعال کرنا چاہتے ہیں: <b>%s</b>؟';
$lang['admin_languages_disable_error'] = 'زبان کو غیر فعال کرنے میں ناکام۔';
$lang['admin_languages_disable_error_default'] = 'پہلے سے طے شدہ زبان کو غیر فعال نہیں کیا جا سکتا۔';
$lang['admin_languages_disable_error_nochange'] = 'یہ زبان پہلے سے ہی غیر فعال ہے۔';
$lang['admin_languages_disable_success'] = 'زبان کامیابی کے ساتھ غیر فعال ہو گئی۔';
$lang['admin_languages_enable_all_confirm'] = 'کیا آپ واقعی تمام زبانوں کو فعال کرنا چاہتے ہیں؟';
$lang['admin_languages_enable_all_error'] = 'تمام زبانوں کو فعال کرنے میں ناکام۔';
$lang['admin_languages_enable_all_success'] = 'تمام زبانیں کامیابی کے ساتھ فعال ہو گئیں۔';
$lang['admin_languages_enable_confirm'] = 'کیا آپ واقعی اس زبان کو فعال کرنا چاہتے ہیں: <b>%s</b>؟';
$lang['admin_languages_enable_error'] = 'زبان کو فعال کرنے میں ناکام۔';
$lang['admin_languages_enable_error_nochange'] = 'یہ زبان پہلے ہی فعال ہے۔';
$lang['admin_languages_enable_success'] = 'زبان کامیابی کے ساتھ فعال ہو گئی۔';
$lang['admin_languages_install_confirm'] = 'کیا آپ واقعی زبان کو انسٹال کرنا چاہتے ہیں: <b>%s</b>؟';
$lang['admin_languages_install_error'] = 'زبان انسٹال کرنے میں ناکامی۔';
$lang['admin_languages_install_success'] = 'زبان کامیابی سے انسٹال ہو گئی۔';
$lang['admin_languages_install_tip'] = 'زبانیں آپ کی سائٹ کے انٹرفیس اور مواد کے لیے تراجم شامل کرتی ہیں۔ دستیاب زبانیں <a href="%s" target="_blank" rel="noopener">زبانوں کی ڈائریکٹری</a> میں دیکھیں یا اپنی زبان انسٹال کرنے کے لیے <b>.zip</b> پیکیج اپ لوڈ کریں۔';
$lang['admin_languages_tip'] = 'سائٹ کی ڈیفالٹ زبان کو فعال، غیر فعال اور سیٹ کریں۔ فعال زبانیں سائٹ دیکھنے والوں کے لیے دستیاب ہیں۔';
$lang['admin_languages_update_confirm'] = 'کیا آپ واقعی اس زبان کو اپ ڈیٹ کرنا چاہتے ہیں؟';
$lang['admin_languages_update_error'] = 'زبان اپ ڈیٹ کرنے میں ناکامی۔';
$lang['admin_languages_update_success'] = 'زبان کامیابی سے اپ ڈیٹ ہو گئی۔';

/**
 * ---------------------------------------------------------------
 * Package Driver & Installation Messages
 * ---------------------------------------------------------------
 * Language lines for package installation, download, backup, and validation.
 */
$lang['package_already_exists'] = 'پیکیج پہلے سے موجود ہے۔';
$lang['package_archive_download_failed'] = 'پیکیج آرکائیو ڈاؤن لوڈ کرنے میں ناکام۔';
$lang['package_backup_create_error'] = 'پیکیج کا بیک اپ بنانے میں ناکامی۔';
$lang['package_backup_dir_failed'] = 'بیک اپ ڈائرکٹری بنانے میں ناکام: %s';
$lang['package_backup_missing'] = 'بیک اپ فائل موجود نہیں ہے۔';
$lang['package_backup_path_error'] = 'بیک اپ فائل کا پاتھ متعین نہیں کیا جا سکا۔';
$lang['package_backup_request_invalid'] = 'غلط بیک اپ کی درخواست۔';
$lang['package_backup_restore_error'] = 'پیکیج کا بیک اپ ریستور کرنے میں ناکامی۔';
$lang['package_catalog_type_unknown'] = 'نامعلوم کیٹلاگ کی قسم۔';
$lang['package_checksum_error'] = 'پیکیج چیک سم (checksum) کی تصدیق ناکام ہو گئی۔';
$lang['package_copy_files_error'] = 'پیکیج کی فائلوں کو منزل مقصود پر کاپی کرنے میں ناکامی۔';
$lang['package_copy_updates_error'] = 'اپ ڈیٹ کی فائلوں کو منزل مقصود پر کاپی کرنے میں ناکامی۔';
$lang['package_dest_dir_failed'] = 'منزل کی ڈائرکٹری بنانے میں ناکام: %s';
$lang['package_destination_error'] = 'پیکیج کی منزل کا تعین نہیں کیا جا سکا۔';
$lang['package_download_dir_failed'] = 'ڈاؤن لوڈ ڈائرکٹری بنانے میں ناکام: %s';
$lang['package_download_empty'] = 'پیکیج ڈاؤن لوڈ نے خالی ردعمل واپس کیا۔';
$lang['package_download_request_invalid'] = 'پیکیج ڈاؤن لوڈ کرنے کی غلط درخواست۔';
$lang['package_extract_failed'] = 'ZIP کو نکالنے (extract) میں ناکام: %s';
$lang['package_invalid_lang_files'] = 'غلط زبان — مطلوبہ ایپلیکیشن زبان کی فائلیں غائب ہیں۔';
$lang['package_invalid_lang_structure'] = 'غلط زبان — admin اور/یا ci3 ڈائریکٹریز غائب ہیں۔';
$lang['package_invalid_missing_info'] = 'غلط %s: "info.php" غائب ہے۔';
$lang['package_invalid_module_structure'] = 'غلط ماڈیول — مطلوبہ config اور/یا controllers ڈائریکٹریز غائب ہیں۔';
$lang['package_invalid_plugin_boot'] = 'غلط پلگ ان — "boot.php" غائب ہے۔';
$lang['package_invalid_plugin_contents'] = 'غلط پلگ ان — پلگ انز میں کنٹرولرز یا ویوز (views) نہیں ہو سکتے۔';
$lang['package_invalid_theme_boot'] = 'غلط تھیم — "boot.php" غائب ہے۔';
$lang['package_invalid_theme_views'] = 'غلط تھیم — views ڈائریکٹری غائب ہے۔';
$lang['package_no_root_dir'] = 'پیکیج میں کوئی روٹ ڈائریکٹری نہیں ہے۔';
$lang['package_not_downloadable'] = 'پیکیج عوامی طور پر ڈاؤن لوڈ کے قابل نہیں ہے۔';
$lang['package_not_in_registry'] = 'پیکیج عوامی رجسٹری میں دستیاب نہیں ہے۔';
$lang['package_request_invalid'] = 'غلط پیکیج کی درخواست۔';
$lang['package_rollback_request_invalid'] = 'غلط رول بیک (rollback) کی درخواست۔';
$lang['package_root_mismatch'] = 'پیکیج آرکائیو روٹ %s سے مطابقت نہیں رکھتا';
$lang['package_single_root_required'] = 'پیکیج میں بالکل ایک روٹ ڈائریکٹری ہونی چاہیے۔';
$lang['package_source_error'] = 'پیکیج کے ماخذ کا تعین نہیں کیا جا سکا۔';
$lang['package_system_core_restricted'] = 'سسٹم کے اجزاء کو پیکیج کے طور پر انسٹال نہیں کیا جا سکتا۔';
$lang['package_temp_dir_failed'] = 'عارضی ڈائرکٹری بنانے میں ناکام: %s';
$lang['package_type_unknown'] = 'نامعلوم پیکیج کی قسم۔';
$lang['package_update_request_invalid'] = 'پیکیج اپ ڈیٹ کرنے کی غلط درخواست۔';
$lang['package_update_root_mismatch'] = 'اپ ڈیٹ آرکائیو روٹ %s سے مطابقت نہیں رکھتا۔';
$lang['package_upload_dir_failed'] = 'اپ لوڈ ڈائرکٹری بنانے میں ناکام: %s';
$lang['package_url_invalid'] = 'پیکیج کی تقسیم کا غلط URL۔';
$lang['package_write_failed'] = 'پیکیج %s میں لکھنے میں ناکام';
$lang['package_zip_not_found'] = 'پیکیج ZIP موجود نہیں ہے: %s';

/**
 * ---------------------------------------------------------------
 * Updates Section
 * ---------------------------------------------------------------
 * Language lines for updates section.
 */
$lang['update_available'] = 'نئی اپ ڈیٹس دستیاب ہیں!';
$lang['update_backup_error'] = 'موجودہ پیکیج کا بیک اپ بنانے میں ناکام۔ اپ ڈیٹ کو روک دیا گیا تھا۔';
$lang['update_check_disabled'] = 'خودکار اپ ڈیٹ چیک غیر فعال ہیں۔ اپ ڈیٹس دیکھنے کے لیے انہیں فعال کریں۔';
$lang['update_check_error'] = 'اس وقت اپ ڈیٹ چیک چلانے میں ناکام۔';
$lang['update_check_success'] = 'اپ ڈیٹ چیک کامیابی کے ساتھ مکمل ہو گیا۔';
$lang['update_install_error'] = 'پیکیج انسٹال نہیں ہو سکا۔ موجودہ ورژن رکھا گیا تھا۔';
$lang['update_install_success'] = 'پیکیج کو کامیابی کے ساتھ تازہ ترین ورژن میں اپ ڈیٹ کر دیا گیا۔';
$lang['update_interval_3days'] = 'ہر 3 دن بعد';
$lang['update_interval_biweekly'] = 'ہر 2 ہفتے';
$lang['update_interval_daily'] = 'ہر روز';
$lang['update_interval_monthly'] = 'مہینے میں ایک بار';
$lang['update_interval_weekly'] = 'ہفتے میں ایک بار';
$lang['update_not_available'] = 'آپ کی ویب سائٹ اپ ٹو ڈیٹ ہے۔';
$lang['update_rollback_confirm'] = 'کیا آپ واقعی پچھلا ورژن بحال کرنا چاہتے ہیں؟';
$lang['update_rollback_error'] = 'پچھلے ورژن کو بحال کرنے میں ناکام۔ دستی مداخلت کی ضرورت ہو سکتی ہے۔';
$lang['update_rollback_success'] = 'پچھلا ورژن کامیابی کے ساتھ بحال ہو گیا۔';
$lang['updates_available'] = 'دستیاب اپڈیٹس';
$lang['updates_check_now'] = 'ابھی چیک کریں۔';
$lang['updates_check_now_confirm'] = 'کیا آپ واقعی ابھی اپ ڈیٹس کی جانچ کرنا چاہتے ہیں؟';
$lang['updates_current_version'] = 'موجودہ ورژن';
$lang['updates_enable'] = 'اپ ڈیٹس کو فعال کریں۔';
$lang['updates_last_check'] = 'آخری چیک: %s';
$lang['updates_latest_version'] = 'تازہ ترین ورژن';
$lang['updates_next_check'] = 'اگلا شیڈول چیک: %s';
$lang['updates_previous_version'] = 'پچھلا ورژن';
$lang['updates_recent'] = 'حال ہی میں اپ ڈیٹ کیا گیا۔';

/**
 * ---------------------------------------------------------------
 * Firewall Section
 * ---------------------------------------------------------------
 * Language lines for the system firewall section.
 */
$lang['admin_firewall_ban_error'] = 'مخصوص IP ایڈریس کو بلاک کرنے میں ناکام۔';
$lang['admin_firewall_ban_success'] = 'آئی پی ایڈریس کو کامیابی سے بلاک کر دیا گیا ہے۔';
$lang['admin_firewall_block_ip'] = 'IP ایڈریس کو مسدود کریں۔';
$lang['admin_firewall_delete_confirm'] = 'کیا آپ واقعی منتخب IP پتوں کو غیر مسدود کرنا چاہتے ہیں؟';
$lang['admin_firewall_delete_error'] = 'منتخب IP پتوں کو غیر مسدود کرنے میں ناکام۔';
$lang['admin_firewall_delete_success'] = 'منتخب کردہ آئی پی ایڈریسز کو کامیابی سے بلاک کر دیا گیا ہے۔';
$lang['admin_firewall_duration'] = 'پابندی کی مدت';
$lang['admin_firewall_permanent'] = 'مستقل';
$lang['admin_firewall_reason'] = 'پابندی کی وجہ';
$lang['admin_firewall_tip'] = 'بار بار خلاف ورزیوں یا مشتبہ سرگرمی کی وجہ سے فائر وال کے ذریعے مسدود کردہ IP پتے دیکھیں اور ان کا نظم کریں۔';

// Settings
$lang['404_ban_duration'] = '404 پابندی کا دورانیہ';
$lang['404_threshold'] = '404 ہڑتال کی حد';
$lang['uri_ban_duration'] = 'URI پابندی کا دورانیہ';
$lang['uri_strike_threshold'] = 'URI ہڑتال کی حد';
