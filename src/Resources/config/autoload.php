<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package Core
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

// Templates
TemplateLoader::addFiles(
[
	'analytics_google'    => 'vendor/contao/module-core/src/Resources/templates/analytics',
	'analytics_piwik'     => 'vendor/contao/module-core/src/Resources/templates/analytics',
	'be_changelog'        => 'vendor/contao/module-core/src/Resources/templates/backend',
	'be_confirm'          => 'vendor/contao/module-core/src/Resources/templates/backend',
	'be_diff'             => 'vendor/contao/module-core/src/Resources/templates/backend',
	'be_error'            => 'vendor/contao/module-core/src/Resources/templates/backend',
	'be_forbidden'        => 'vendor/contao/module-core/src/Resources/templates/backend',
	'be_help'             => 'vendor/contao/module-core/src/Resources/templates/backend',
	'be_incomplete'       => 'vendor/contao/module-core/src/Resources/templates/backend',
	'be_insecure'         => 'vendor/contao/module-core/src/Resources/templates/backend',
	'be_install'          => 'vendor/contao/module-core/src/Resources/templates/backend',
	'be_live_update'      => 'vendor/contao/module-core/src/Resources/templates/backend',
	'be_login'            => 'vendor/contao/module-core/src/Resources/templates/backend',
	'be_main'             => 'vendor/contao/module-core/src/Resources/templates/backend',
	'be_maintenance'      => 'vendor/contao/module-core/src/Resources/templates/backend',
	'be_navigation'       => 'vendor/contao/module-core/src/Resources/templates/backend',
	'be_no_active'        => 'vendor/contao/module-core/src/Resources/templates/backend',
	'be_no_forward'       => 'vendor/contao/module-core/src/Resources/templates/backend',
	'be_no_layout'        => 'vendor/contao/module-core/src/Resources/templates/backend',
	'be_no_page'          => 'vendor/contao/module-core/src/Resources/templates/backend',
	'be_no_root'          => 'vendor/contao/module-core/src/Resources/templates/backend',
	'be_pagination'       => 'vendor/contao/module-core/src/Resources/templates/backend',
	'be_password'         => 'vendor/contao/module-core/src/Resources/templates/backend',
	'be_picker'           => 'vendor/contao/module-core/src/Resources/templates/backend',
	'be_popup'            => 'vendor/contao/module-core/src/Resources/templates/backend',
	'be_preview'          => 'vendor/contao/module-core/src/Resources/templates/backend',
	'be_purge_data'       => 'vendor/contao/module-core/src/Resources/templates/backend',
	'be_rebuild_index'    => 'vendor/contao/module-core/src/Resources/templates/backend',
	'be_referer'          => 'vendor/contao/module-core/src/Resources/templates/backend',
	'be_switch'           => 'vendor/contao/module-core/src/Resources/templates/backend',
	'be_unavailable'      => 'vendor/contao/module-core/src/Resources/templates/backend',
	'be_welcome'          => 'vendor/contao/module-core/src/Resources/templates/backend',
	'be_widget'           => 'vendor/contao/module-core/src/Resources/templates/backend',
	'be_widget_chk'       => 'vendor/contao/module-core/src/Resources/templates/backend',
	'be_widget_pw'        => 'vendor/contao/module-core/src/Resources/templates/backend',
	'be_widget_rdo'       => 'vendor/contao/module-core/src/Resources/templates/backend',
	'be_wildcard'         => 'vendor/contao/module-core/src/Resources/templates/backend',
	'block_searchable'    => 'vendor/contao/module-core/src/Resources/templates/block',
	'block_section'       => 'vendor/contao/module-core/src/Resources/templates/block',
	'block_sections'      => 'vendor/contao/module-core/src/Resources/templates/block',
	'block_unsearchable'  => 'vendor/contao/module-core/src/Resources/templates/block',
	'ce_accordion'        => 'vendor/contao/module-core/src/Resources/templates/elements',
	'ce_accordion_start'  => 'vendor/contao/module-core/src/Resources/templates/elements',
	'ce_accordion_stop'   => 'vendor/contao/module-core/src/Resources/templates/elements',
	'ce_code'             => 'vendor/contao/module-core/src/Resources/templates/elements',
	'ce_download'         => 'vendor/contao/module-core/src/Resources/templates/elements',
	'ce_downloads'        => 'vendor/contao/module-core/src/Resources/templates/elements',
	'ce_gallery'          => 'vendor/contao/module-core/src/Resources/templates/elements',
	'ce_headline'         => 'vendor/contao/module-core/src/Resources/templates/elements',
	'ce_html'             => 'vendor/contao/module-core/src/Resources/templates/elements',
	'ce_hyperlink'        => 'vendor/contao/module-core/src/Resources/templates/elements',
	'ce_hyperlink_image'  => 'vendor/contao/module-core/src/Resources/templates/elements',
	'ce_image'            => 'vendor/contao/module-core/src/Resources/templates/elements',
	'ce_list'             => 'vendor/contao/module-core/src/Resources/templates/elements',
	'ce_markdown'         => 'vendor/contao/module-core/src/Resources/templates/elements',
	'ce_player'           => 'vendor/contao/module-core/src/Resources/templates/elements',
	'ce_slider_start'     => 'vendor/contao/module-core/src/Resources/templates/elements',
	'ce_slider_stop'      => 'vendor/contao/module-core/src/Resources/templates/elements',
	'ce_table'            => 'vendor/contao/module-core/src/Resources/templates/elements',
	'ce_teaser'           => 'vendor/contao/module-core/src/Resources/templates/elements',
	'ce_text'             => 'vendor/contao/module-core/src/Resources/templates/elements',
	'ce_toplink'          => 'vendor/contao/module-core/src/Resources/templates/elements',
	'form'                => 'vendor/contao/module-core/src/Resources/templates/forms',
	'form_captcha'        => 'vendor/contao/module-core/src/Resources/templates/forms',
	'form_checkbox'       => 'vendor/contao/module-core/src/Resources/templates/forms',
	'form_explanation'    => 'vendor/contao/module-core/src/Resources/templates/forms',
	'form_fieldset'       => 'vendor/contao/module-core/src/Resources/templates/forms',
	'form_headline'       => 'vendor/contao/module-core/src/Resources/templates/forms',
	'form_hidden'         => 'vendor/contao/module-core/src/Resources/templates/forms',
	'form_html'           => 'vendor/contao/module-core/src/Resources/templates/forms',
	'form_message'        => 'vendor/contao/module-core/src/Resources/templates/forms',
	'form_password'       => 'vendor/contao/module-core/src/Resources/templates/forms',
	'form_radio'          => 'vendor/contao/module-core/src/Resources/templates/forms',
	'form_row'            => 'vendor/contao/module-core/src/Resources/templates/forms',
	'form_row_double'     => 'vendor/contao/module-core/src/Resources/templates/forms',
	'form_select'         => 'vendor/contao/module-core/src/Resources/templates/forms',
	'form_submit'         => 'vendor/contao/module-core/src/Resources/templates/forms',
	'form_textarea'       => 'vendor/contao/module-core/src/Resources/templates/forms',
	'form_textfield'      => 'vendor/contao/module-core/src/Resources/templates/forms',
	'form_upload'         => 'vendor/contao/module-core/src/Resources/templates/forms',
	'form_widget'         => 'vendor/contao/module-core/src/Resources/templates/forms',
	'form_xml'            => 'vendor/contao/module-core/src/Resources/templates/forms',
	'fe_page'             => 'vendor/contao/module-core/src/Resources/templates/frontend',
	'gallery_default'     => 'vendor/contao/module-core/src/Resources/templates/gallery',
	'j_accordion'         => 'vendor/contao/module-core/src/Resources/templates/jquery',
	'j_colorbox'          => 'vendor/contao/module-core/src/Resources/templates/jquery',
	'j_mediaelement'      => 'vendor/contao/module-core/src/Resources/templates/jquery',
	'j_tablesort'         => 'vendor/contao/module-core/src/Resources/templates/jquery',
	'js_highlight'        => 'vendor/contao/module-core/src/Resources/templates/js',
	'js_slider'           => 'vendor/contao/module-core/src/Resources/templates/js',
	'mail_default'        => 'vendor/contao/module-core/src/Resources/templates/mail',
	'member_default'      => 'vendor/contao/module-core/src/Resources/templates/member',
	'member_grouped'      => 'vendor/contao/module-core/src/Resources/templates/member',
	'mod_article'         => 'vendor/contao/module-core/src/Resources/templates/modules',
	'mod_article_list'    => 'vendor/contao/module-core/src/Resources/templates/modules',
	'mod_article_nav'     => 'vendor/contao/module-core/src/Resources/templates/modules',
	'mod_article_plain'   => 'vendor/contao/module-core/src/Resources/templates/modules',
	'mod_article_teaser'  => 'vendor/contao/module-core/src/Resources/templates/modules',
	'mod_booknav'         => 'vendor/contao/module-core/src/Resources/templates/modules',
	'mod_breadcrumb'      => 'vendor/contao/module-core/src/Resources/templates/modules',
	'mod_flash'           => 'vendor/contao/module-core/src/Resources/templates/modules',
	'mod_html'            => 'vendor/contao/module-core/src/Resources/templates/modules',
	'mod_login_1cl'       => 'vendor/contao/module-core/src/Resources/templates/modules',
	'mod_login_2cl'       => 'vendor/contao/module-core/src/Resources/templates/modules',
	'mod_logout_1cl'      => 'vendor/contao/module-core/src/Resources/templates/modules',
	'mod_logout_2cl'      => 'vendor/contao/module-core/src/Resources/templates/modules',
	'mod_message'         => 'vendor/contao/module-core/src/Resources/templates/modules',
	'mod_navigation'      => 'vendor/contao/module-core/src/Resources/templates/modules',
	'mod_password'        => 'vendor/contao/module-core/src/Resources/templates/modules',
	'mod_quicklink'       => 'vendor/contao/module-core/src/Resources/templates/modules',
	'mod_quicknav'        => 'vendor/contao/module-core/src/Resources/templates/modules',
	'mod_random_image'    => 'vendor/contao/module-core/src/Resources/templates/modules',
	'mod_search'          => 'vendor/contao/module-core/src/Resources/templates/modules',
	'mod_search_advanced' => 'vendor/contao/module-core/src/Resources/templates/modules',
	'mod_search_simple'   => 'vendor/contao/module-core/src/Resources/templates/modules',
	'mod_sitemap'         => 'vendor/contao/module-core/src/Resources/templates/modules',
	'moo_accordion'       => 'vendor/contao/module-core/src/Resources/templates/mootools',
	'moo_chosen'          => 'vendor/contao/module-core/src/Resources/templates/mootools',
	'moo_mediabox'        => 'vendor/contao/module-core/src/Resources/templates/mootools',
	'moo_tablesort'       => 'vendor/contao/module-core/src/Resources/templates/mootools',
	'nav_default'         => 'vendor/contao/module-core/src/Resources/templates/navigation',
	'pagination'          => 'vendor/contao/module-core/src/Resources/templates/pagination',
	'rss_default'         => 'vendor/contao/module-core/src/Resources/templates/rss',
	'rss_items_only'      => 'vendor/contao/module-core/src/Resources/templates/rss',
	'search_default'      => 'vendor/contao/module-core/src/Resources/templates/search',
]);
