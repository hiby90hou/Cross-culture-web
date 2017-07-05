<?php 

// Add shortcodes
add_shortcode('custom-facebook-events', 'events_cff');
function events_cff($atts) {
//Style options
    $options = get_option('cff_style_settings');
//Create the types string to set as shortcode default
    $include_string = '';
    if($options[ 'cff_show_author' ]) $include_string .= 'author,';
    if($options[ 'cff_show_text' ]) $include_string .= 'text,';
    if($options[ 'cff_show_desc' ]) $include_string .= 'desc,';
    if($options[ 'cff_show_shared_links' ]) $include_string .= 'sharedlinks,';
    if($options[ 'cff_show_date' ]) $include_string .= 'date,';
    if($options[ 'cff_show_media' ]) $include_string .= 'media,';
    if($options[ 'cff_show_event_title' ]) $include_string .= 'eventtitle,';
    if($options[ 'cff_show_event_details' ]) $include_string .= 'eventdetails,';
    if($options[ 'cff_show_meta' ]) $include_string .= 'social,';
    if($options[ 'cff_show_link' ]) $include_string .= 'link,';
    if($options[ 'cff_show_like_box' ]) $include_string .= 'likebox,';
//Pass in shortcode attrbutes

    $atts = shortcode_atts(
        array(
            'accesstoken' => trim( get_option('cff_access_token') ),
            'id' => get_option('cff_page_id'),
            'pagetype' => get_option('cff_page_type'),
            'num' => get_option('cff_num_show'),
            'limit' => get_option('cff_post_limit'),
            'others' => '',
            'showpostsby' => get_option('cff_show_others'),
            'cachetime' => get_option('cff_cache_time'),
            'cacheunit' => get_option('cff_cache_time_unit'),
            'locale' => get_option('cff_locale'),
            'ajax' => get_option('cff_ajax'),
            'width' => isset($options[ 'cff_feed_width' ]) ? $options[ 'cff_feed_width' ] : '',
            'height' => isset($options[ 'cff_feed_height' ]) ? $options[ 'cff_feed_height' ] : '',
            'padding' => isset($options[ 'cff_feed_padding' ]) ? $options[ 'cff_feed_padding' ] : '',
            'bgcolor' => isset($options[ 'cff_bg_color' ]) ? $options[ 'cff_bg_color' ] : '',
            'showauthor' => '',
            'showauthornew' => isset($options[ 'cff_show_author' ]) ? $options[ 'cff_show_author' ] : '',
            'class' => isset($options[ 'cff_class' ]) ? $options[ 'cff_class' ] : '',
            'layout' => isset($options[ 'cff_preset_layout' ]) ? $options[ 'cff_preset_layout' ] : '',
            'include' => $include_string,
            'exclude' => '',
//Typography
            'textformat' => isset($options[ 'cff_title_format' ]) ? $options[ 'cff_title_format' ] : '',
            'textsize' => isset($options[ 'cff_title_size' ]) ? $options[ 'cff_title_size' ] : '',
            'textweight' => isset($options[ 'cff_title_weight' ]) ? $options[ 'cff_title_weight' ] : '',
            'textcolor' => isset($options[ 'cff_title_color' ]) ? $options[ 'cff_title_color' ] : '',
            'textlinkcolor' => isset($options[ 'cff_posttext_link_color' ]) ? $options[ 'cff_posttext_link_color' ] : '',
            'textlink' => isset($options[ 'cff_title_link' ]) ? $options[ 'cff_title_link' ] : '',
            'posttags' => isset($options[ 'cff_post_tags' ]) ? $options[ 'cff_post_tags' ] : '',
//Description
            'descsize' => isset($options[ 'cff_body_size' ]) ? $options[ 'cff_body_size' ] : '',
            'descweight' => isset($options[ 'cff_body_weight' ]) ? $options[ 'cff_body_weight' ] : '',
            'desccolor' => isset($options[ 'cff_body_color' ]) ? $options[ 'cff_body_color' ] : '',
            'linktitleformat' => isset($options[ 'cff_link_title_format' ]) ? $options[ 'cff_link_title_format' ] : '',
            'linktitlesize' => isset($options[ 'cff_link_title_size' ]) ? $options[ 'cff_link_title_size' ] : '',
            'linktitlecolor' => isset($options[ 'cff_link_title_color' ]) ? $options[ 'cff_link_title_color' ] : '',
            'linkurlcolor' => isset($options[ 'cff_link_url_color' ]) ? $options[ 'cff_link_url_color' ] : '',
            'linkbgcolor' => isset($options[ 'cff_link_bg_color' ]) ? $options[ 'cff_link_bg_color' ] : '',
            'linkbordercolor' => isset($options[ 'cff_link_border_color' ]) ? $options[ 'cff_link_border_color' ] : '',
            'disablelinkbox' => isset($options[ 'cff_disable_link_box' ]) ? $options[ 'cff_disable_link_box' ] : '',

//Author
            'authorsize' => isset($options[ 'cff_author_size' ]) ? $options[ 'cff_author_size' ] : '',
            'authorcolor' => isset($options[ 'cff_author_color' ]) ? $options[ 'cff_author_color' ] : '',

//Event title
            'eventtitleformat' => isset($options[ 'cff_event_title_format' ]) ? $options[ 'cff_event_title_format' ] : '',
            'eventtitlesize' => isset($options[ 'cff_event_title_size' ]) ? $options[ 'cff_event_title_size' ] : '',
            'eventtitleweight' => isset($options[ 'cff_event_title_weight' ]) ? $options[ 'cff_event_title_weight' ] : '',
            'eventtitlecolor' => isset($options[ 'cff_event_title_color' ]) ? $options[ 'cff_event_title_color' ] : '',
            'eventtitlelink' => isset($options[ 'cff_event_title_link' ]) ? $options[ 'cff_event_title_link' ] : '',
//Event date
            'eventdatesize' => isset($options[ 'cff_event_date_size' ]) ? $options[ 'cff_event_date_size' ] : '',
            'eventdateweight' => isset($options[ 'cff_event_date_weight' ]) ? $options[ 'cff_event_date_weight' ] : '',
            'eventdatecolor' => isset($options[ 'cff_event_date_color' ]) ? $options[ 'cff_event_date_color' ] : '',
            'eventdatepos' => isset($options[ 'cff_event_date_position' ]) ? $options[ 'cff_event_date_position' ] : '',
            'eventdateformat' => isset($options[ 'cff_event_date_formatting' ]) ? $options[ 'cff_event_date_formatting' ] : '',
            'eventdatecustom' => isset($options[ 'cff_event_date_custom' ]) ? $options[ 'cff_event_date_custom' ] : '',
//Event details
            'eventdetailssize' => isset($options[ 'cff_event_details_size' ]) ? $options[ 'cff_event_details_size' ] : '',
            'eventdetailsweight' => isset($options[ 'cff_event_details_weight' ]) ? $options[ 'cff_event_details_weight' ] : '',
            'eventdetailscolor' => isset($options[ 'cff_event_details_color' ]) ? $options[ 'cff_event_details_color' ] : '',
            'eventlinkcolor' => isset($options[ 'cff_event_link_color' ]) ? $options[ 'cff_event_link_color' ] : '',
//Date
            'datepos' => isset($options[ 'cff_date_position' ]) ? $options[ 'cff_date_position' ] : '',
            'datesize' => isset($options[ 'cff_date_size' ]) ? $options[ 'cff_date_size' ] : '',
            'dateweight' => isset($options[ 'cff_date_weight' ]) ? $options[ 'cff_date_weight' ] : '',
            'datecolor' => isset($options[ 'cff_date_color' ]) ? $options[ 'cff_date_color' ] : '',
            'dateformat' => isset($options[ 'cff_date_formatting' ]) ? $options[ 'cff_date_formatting' ] : '',
            'datecustom' => isset($options[ 'cff_date_custom' ]) ? $options[ 'cff_date_custom' ] : '',
            'timezone' => isset($options[ 'cff_timezone' ]) ? $options[ 'cff_timezone' ] : 'America/Chicago',

//Link to Facebook
            'linksize' => isset($options[ 'cff_link_size' ]) ? $options[ 'cff_link_size' ] : '',
            'linkweight' => isset($options[ 'cff_link_weight' ]) ? $options[ 'cff_link_weight' ] : '',
            'linkcolor' => isset($options[ 'cff_link_color' ]) ? $options[ 'cff_link_color' ] : '',
            'viewlinktext' => isset($options[ 'cff_view_link_text' ]) ? $options[ 'cff_view_link_text' ] : '',
            'linktotimeline' => isset($options[ 'cff_link_to_timeline' ]) ? $options[ 'cff_link_to_timeline' ] : '',
//Social
            'iconstyle' => isset($options[ 'cff_icon_style' ]) ? $options[ 'cff_icon_style' ] : '',
            'socialtextcolor' => isset($options[ 'cff_meta_text_color' ]) ? $options[ 'cff_meta_text_color' ] : '',
            'socialbgcolor' => isset($options[ 'cff_meta_bg_color' ]) ? $options[ 'cff_meta_bg_color' ] : '',
//Misc
            'textlength' => get_option('cff_title_length'),
            'desclength' => get_option('cff_body_length'),
            'likeboxpos' => isset($options[ 'cff_like_box_position' ]) ? $options[ 'cff_like_box_position' ] : '',
            'likeboxoutside' => isset($options[ 'cff_like_box_outside' ]) ? $options[ 'cff_like_box_outside' ] : '',
            'likeboxcolor' => isset($options[ 'cff_likebox_bg_color' ]) ? $options[ 'cff_likebox_bg_color' ] : '',
            'likeboxtextcolor' => isset($options[ 'cff_like_box_text_color' ]) ? $options[ 'cff_like_box_text_color' ] : '',
            'likeboxwidth' => isset($options[ 'cff_likebox_width' ]) ? $options[ 'cff_likebox_width' ] : '',
            'likeboxheight' => isset($options[ 'cff_likebox_height' ]) ? $options[ 'cff_likebox_height' ] : '',
            'likeboxfaces' => isset($options[ 'cff_like_box_faces' ]) ? $options[ 'cff_like_box_faces' ] : '',
            'likeboxborder' => isset($options[ 'cff_like_box_border' ]) ? $options[ 'cff_like_box_border' ] : '',

//Page Header
            'showheader' => isset($options[ 'cff_show_header' ]) ? $options[ 'cff_show_header' ] : '',
            'headeroutside' => isset($options[ 'cff_header_outside' ]) ? $options[ 'cff_header_outside' ] : '',
            'headertext' => isset($options[ 'cff_header_text' ]) ? $options[ 'cff_header_text' ] : '',
            'headerbg' => isset($options[ 'cff_header_bg_color' ]) ? $options[ 'cff_header_bg_color' ] : '',
            'headerpadding' => isset($options[ 'cff_header_padding' ]) ? $options[ 'cff_header_padding' ] : '',
            'headertextsize' => isset($options[ 'cff_header_text_size' ]) ? $options[ 'cff_header_text_size' ] : '',
            'headertextweight' => isset($options[ 'cff_header_text_weight' ]) ? $options[ 'cff_header_text_weight' ] : '',
            'headertextcolor' => isset($options[ 'cff_header_text_color' ]) ? $options[ 'cff_header_text_color' ] : '',
            'headericon' => isset($options[ 'cff_header_icon' ]) ? $options[ 'cff_header_icon' ] : '',
            'headericoncolor' => isset($options[ 'cff_header_icon_color' ]) ? $options[ 'cff_header_icon_color' ] : '',
            'headericonsize' => isset($options[ 'cff_header_icon_size' ]) ? $options[ 'cff_header_icon_size' ] : '',

            'videoheight' => isset($options[ 'cff_video_height' ]) ? $options[ 'cff_video_height' ] : '',
            'videoaction' => isset($options[ 'cff_video_action' ]) ? $options[ 'cff_video_action' ] : '',
            'sepcolor' => isset($options[ 'cff_sep_color' ]) ? $options[ 'cff_sep_color' ] : '',
            'sepsize' => isset($options[ 'cff_sep_size' ]) ? $options[ 'cff_sep_size' ] : '',

//Translate
            'seemoretext' => isset($options[ 'cff_see_more_text' ]) ? $options[ 'cff_see_more_text' ] : '',
            'seelesstext' => isset($options[ 'cff_see_less_text' ]) ? $options[ 'cff_see_less_text' ] : '',
            'facebooklinktext' => isset($options[ 'cff_facebook_link_text' ]) ? $options[ 'cff_facebook_link_text' ] : '',
            'photostext' => isset($options[ 'cff_translate_photos_text' ]) ? $options[ 'cff_translate_photos_text' ] : ''
            ), $atts);
    /********** GENERAL **********/
    $cff_page_type = $atts[ 'pagetype' ];
    ($cff_page_type == 'group') ? $cff_is_group = true : $cff_is_group = false;

    $cff_feed_width = $atts['width'];
    $cff_feed_height = $atts[ 'height' ];
    $cff_feed_padding = $atts[ 'padding' ];
    $cff_bg_color = $atts[ 'bgcolor' ];
    $cff_show_author = $atts[ 'showauthornew' ];
    $cff_cache_time = $atts[ 'cachetime' ];
    $cff_locale = $atts[ 'locale' ];
    if ( empty($cff_locale) || !isset($cff_locale) || $cff_locale == '' ) $cff_locale = 'en_US';
    if (!isset($cff_cache_time)) $cff_cache_time = 0;
    $cff_cache_time_unit = $atts[ 'cacheunit' ];
    $cff_class = $atts['class'];
    //Compile feed styles
    $cff_feed_styles = 'style="';
    if ( !empty($cff_feed_width) ) $cff_feed_styles .= 'width:' . $cff_feed_width . '; ';
    if ( !empty($cff_feed_height) ) $cff_feed_styles .= 'height:' . $cff_feed_height . '; ';
    if ( !empty($cff_feed_padding) ) $cff_feed_styles .= 'padding:' . $cff_feed_padding . '; ';
    if ( !empty($cff_bg_color) ) $cff_feed_styles .= 'background-color:#' . str_replace('#', '', $cff_bg_color) . '; ';
    $cff_feed_styles .= '"';
    //Like box
    $cff_like_box_position = $atts[ 'likeboxpos' ];
    $cff_like_box_outside = $atts[ 'likeboxoutside' ];
    //Open links in new window?
    $target = 'target="_blank"';
    /********** POST TYPES **********/
    $cff_show_links_type = false;
    $cff_show_event_type = true;
    $cff_show_video_type = false;
    $cff_show_photos_type = false;
    $cff_show_status_type = false;
    $cff_events_only = true;
    //Are we showing ONLY events?
    if ($cff_show_event_type && !$cff_show_links_type && !$cff_show_video_type && !$cff_show_photos_type && !$cff_show_status_type) $cff_events_only = true;
    /********** LAYOUT **********/
    $cff_includes = $atts[ 'include' ];
    //Look for non-plural version of string in the types string in case user specifies singular in shortcode
    $cff_show_author = false;
    $cff_show_text = false;
    $cff_show_desc = false;
    $cff_show_shared_links = false;
    $cff_show_date = false;
    $cff_show_media = false;
    $cff_show_event_title = false;
    $cff_show_event_details = false;
    $cff_show_meta = false;
    $cff_show_link = false;
    $cff_show_like_box = false;
    if ( stripos($cff_includes, 'author') !== false ) $cff_show_author = true;
    if ( stripos($cff_includes, 'text') !== false ) $cff_show_text = true;
    if ( stripos($cff_includes, 'desc') !== false ) $cff_show_desc = true;
    if ( stripos($cff_includes, 'sharedlink') !== false ) $cff_show_shared_links = true;
    if ( stripos($cff_includes, 'date') !== false ) $cff_show_date = true;
    if ( stripos($cff_includes, 'media') !== false ) $cff_show_media = true;
    if ( stripos($cff_includes, 'eventtitle') !== false ) $cff_show_event_title = true;
    if ( stripos($cff_includes, 'eventdetail') !== false ) $cff_show_event_details = true;
    if ( stripos($cff_includes, 'social') !== false ) $cff_show_meta = true;
    if ( stripos($cff_includes, ',link') !== false ) $cff_show_link = true; //comma used to separate it from 'sharedlinks' - which also contains 'link' string
    if ( stripos($cff_includes, 'like') !== false ) $cff_show_like_box = true;


    //Exclude string
    $cff_excludes = $atts[ 'exclude' ];
    //Look for non-plural version of string in the types string in case user specifies singular in shortcode
    if ( stripos($cff_excludes, 'author') !== false ) $cff_show_author = false;
    if ( stripos($cff_excludes, 'text') !== false ) $cff_show_text = false;
    if ( stripos($cff_excludes, 'desc') !== false ) $cff_show_desc = false;
    if ( stripos($cff_excludes, 'sharedlink') !== false ) $cff_show_shared_links = false;
    if ( stripos($cff_excludes, 'date') !== false ) $cff_show_date = false;
    if ( stripos($cff_excludes, 'media') !== false ) $cff_show_media = false;
    if ( stripos($cff_excludes, 'eventtitle') !== false ) $cff_show_event_title = false;
    if ( stripos($cff_excludes, 'eventdetail') !== false ) $cff_show_event_details = false;
    if ( stripos($cff_excludes, 'social') !== false ) $cff_show_meta = false;
    if ( stripos($cff_excludes, ',link') !== false ) $cff_show_link = false; //comma used to separate it from 'sharedlinks' - which also contains 'link' string
    if ( stripos($cff_excludes, 'like') !== false ) $cff_show_like_box = false;


    //Set free version to thumb layout by default as layout option not available on settings page
    $cff_preset_layout = 'thumb';

    //If the old shortcode option 'showauthor' is being used then apply it
    $cff_show_author_old = $atts[ 'showauthor' ];
    if( $cff_show_author_old == 'false' ) $cff_show_author = false;
    if( $cff_show_author_old == 'true' ) $cff_show_author = true;


    /********** META **********/
    $cff_icon_style = $atts[ 'iconstyle' ];
    $cff_meta_text_color = $atts[ 'socialtextcolor' ];
    $cff_meta_bg_color = $atts[ 'socialbgcolor' ];
    $cff_meta_styles = 'style="';
    if ( !empty($cff_meta_text_color) ) $cff_meta_styles .= 'color:#' . str_replace('#', '', $cff_meta_text_color) . ';';
    if ( !empty($cff_meta_bg_color) ) $cff_meta_styles .= 'background-color:#' . str_replace('#', '', $cff_meta_bg_color) . ';';
    $cff_meta_styles .= '"';
    $cff_nocomments_text = isset($options[ 'cff_nocomments_text' ]) ? $options[ 'cff_nocomments_text' ] : '';
    $cff_hide_comments = isset($options[ 'cff_hide_comments' ]) ? $options[ 'cff_hide_comments' ] : '';
    if (!isset($cff_nocomments_text) || empty($cff_nocomments_text)) $cff_hide_comments = true;
    /********** TYPOGRAPHY **********/
    //See More text
    $cff_see_more_text = $atts[ 'seemoretext' ];
    $cff_see_less_text = $atts[ 'seelesstext' ];
    //See Less text
    //Title
    $cff_title_format = $atts[ 'textformat' ];
    if (empty($cff_title_format)) $cff_title_format = 'p';
    $cff_title_size = $atts[ 'textsize' ];
    $cff_title_weight = $atts[ 'textweight' ];
    $cff_title_color = $atts[ 'textcolor' ];
    $cff_title_styles = 'style="';
    if ( !empty($cff_title_size) && $cff_title_size != 'inherit' ) $cff_title_styles .=  'font-size:' . $cff_title_size . 'px; ';
    if ( !empty($cff_title_weight) && $cff_title_weight != 'inherit' ) $cff_title_styles .= 'font-weight:' . $cff_title_weight . '; ';
    if ( !empty($cff_title_color) ) $cff_title_styles .= 'color:#' . str_replace('#', '', $cff_title_color) . ';';
    $cff_title_styles .= '"';
    $cff_title_link = $atts[ 'textlink' ];

    ( $cff_title_link == 'on' || $cff_title_link == 'true' || $cff_title_link == true ) ? $cff_title_link = true : $cff_title_link = false;
    if( $atts[ 'textlink' ] == 'false' ) $cff_title_link = false;

    //Author
    $cff_author_size = $atts[ 'authorsize' ];
    $cff_author_color = $atts[ 'authorcolor' ];
    $cff_author_styles = 'style="';
    if ( !empty($cff_author_size) && $cff_author_size != 'inherit' ) $cff_author_styles .=  'font-size:' . $cff_author_size . 'px; ';
    if ( !empty($cff_author_color) ) $cff_author_styles .= 'color:#' . str_replace('#', '', $cff_author_color) . ';';
    $cff_author_styles .= '"';

    //Description
    $cff_body_size = $atts[ 'descsize' ];
    $cff_body_weight = $atts[ 'descweight' ];
    $cff_body_color = $atts[ 'desccolor' ];
    $cff_body_styles = 'style="';
    if ( !empty($cff_body_size) && $cff_body_size != 'inherit' ) $cff_body_styles .=  'font-size:' . $cff_body_size . 'px; ';
    if ( !empty($cff_body_weight) && $cff_body_weight != 'inherit' ) $cff_body_styles .= 'font-weight:' . $cff_body_weight . '; ';
    if ( !empty($cff_body_color) ) $cff_body_styles .= 'color:#' . str_replace('#', '', $cff_body_color) . ';';
    $cff_body_styles .= '"';

    //Shared link title
    $cff_link_title_format = $atts[ 'linktitleformat' ];
    if (empty($cff_link_title_format)) $cff_link_title_format = 'p';
    $cff_link_title_size = $atts[ 'linktitlesize' ];
    $cff_link_title_color = $atts[ 'linktitlecolor' ];
    $cff_link_url_color = $atts[ 'linkurlcolor' ];

    $cff_link_title_styles = 'style="';
    if ( !empty($cff_link_title_size) && $cff_link_title_size != 'inherit' ) $cff_link_title_styles .=  'font-size:' . $cff_link_title_size . 'px;';
    $cff_link_title_styles .= '"';

    //Shared link box
    $cff_link_bg_color = $atts[ 'linkbgcolor' ];
    $cff_link_border_color = $atts[ 'linkbordercolor' ];
    $cff_disable_link_box = $atts['disablelinkbox'];
    ($cff_disable_link_box == 'true' || $cff_disable_link_box == 'on') ? $cff_disable_link_box = true : $cff_disable_link_box = false;

    $cff_link_box_styles = 'style="';
    if ( !empty($cff_link_border_color) ) $cff_link_box_styles .=  'border: 1px solid #' . str_replace('#', '', $cff_link_border_color) . '; ';
    if ( !empty($cff_link_bg_color) ) $cff_link_box_styles .= 'background-color: #' . str_replace('#', '', $cff_link_bg_color) . ';';
    $cff_link_box_styles .= '"';

    //Event Title
    $cff_event_title_format = $atts[ 'eventtitleformat' ];
    if (empty($cff_event_title_format)) $cff_event_title_format = 'p';
    $cff_event_title_size = $atts[ 'eventtitlesize' ];
    $cff_event_title_weight = $atts[ 'eventtitleweight' ];
    $cff_event_title_color = $atts[ 'eventtitlecolor' ];
    $cff_event_title_styles = 'style="';
    if ( !empty($cff_event_title_size) && $cff_event_title_size != 'inherit' ) $cff_event_title_styles .=  'font-size:' . $cff_event_title_size . 'px; ';
    if ( !empty($cff_event_title_weight) && $cff_event_title_weight != 'inherit' ) $cff_event_title_styles .= 'font-weight:' . $cff_event_title_weight . '; ';
    if ( !empty($cff_event_title_color) ) $cff_event_title_styles .= 'color:#' . str_replace('#', '', $cff_event_title_color) . ';';
    $cff_event_title_styles .= '"';
    $cff_event_title_link = $atts[ 'eventtitlelink' ];
    //Event Date
    $cff_event_date_size = $atts[ 'eventdatesize' ];
    $cff_event_date_weight = $atts[ 'eventdateweight' ];
    $cff_event_date_color = $atts[ 'eventdatecolor' ];
    $cff_event_date_position = $atts[ 'eventdatepos' ];
    $cff_event_date_formatting = $atts[ 'eventdateformat' ];
    $cff_event_date_custom = $atts[ 'eventdatecustom' ];
    $cff_event_date_styles = 'style="';
    if ( !empty($cff_event_date_size) && $cff_event_date_size != 'inherit' ) $cff_event_date_styles .=  'font-size:' . $cff_event_date_size . 'px; ';
    if ( !empty($cff_event_date_weight) && $cff_event_date_weight != 'inherit' ) $cff_event_date_styles .= 'font-weight:' . $cff_event_date_weight . '; ';
    if ( !empty($cff_event_date_color) ) $cff_event_date_styles .= 'color:#' . str_replace('#', '', $cff_event_date_color) . ';';
    $cff_event_date_styles .= '"';
    //Event Details
    $cff_event_details_size = $atts[ 'eventdetailssize' ];
    $cff_event_details_weight = $atts[ 'eventdetailsweight' ];
    $cff_event_details_color = $atts[ 'eventdetailscolor' ];
    $cff_event_link_color = $atts[ 'eventlinkcolor' ];
    $cff_event_details_styles = 'style="';
    if ( !empty($cff_event_details_size) && $cff_event_details_size != 'inherit' ) $cff_event_details_styles .=  'font-size:' . $cff_event_details_size . 'px; ';
    if ( !empty($cff_event_details_weight) && $cff_event_details_weight != 'inherit' ) $cff_event_details_styles .= 'font-weight:' . $cff_event_details_weight . '; ';
    if ( !empty($cff_event_details_color) ) $cff_event_details_styles .= 'color:#' . str_replace('#', '', $cff_event_details_color) . ';';
    $cff_event_details_styles .= '"';
    //Date
    $cff_date_position = $atts[ 'datepos' ];
    if (!isset($cff_date_position)) $cff_date_position = 'below';
    $cff_date_size = $atts[ 'datesize' ];
    $cff_date_weight = $atts[ 'dateweight' ];
    $cff_date_color = $atts[ 'datecolor' ];
    $cff_date_styles = 'style="';
    if ( !empty($cff_date_size) && $cff_date_size != 'inherit' ) $cff_date_styles .=  'font-size:' . $cff_date_size . 'px; ';
    if ( !empty($cff_date_weight) && $cff_date_weight != 'inherit' ) $cff_date_styles .= 'font-weight:' . $cff_date_weight . '; ';
    if ( !empty($cff_date_color) ) $cff_date_styles .= 'color:#' . str_replace('#', '', $cff_date_color) . ';';
    $cff_date_styles .= '"';
    $cff_date_before = isset($options[ 'cff_date_before' ]) ? $options[ 'cff_date_before' ] : '';
    $cff_date_after = isset($options[ 'cff_date_after' ]) ? $options[ 'cff_date_after' ] : '';
    //Set user's timezone based on setting
    $cff_timezone = $atts['timezone'];
    $cff_orig_timezone = date_default_timezone_get();
    date_default_timezone_set($cff_timezone);
    //Link to Facebook
    $cff_link_size = $atts[ 'linksize' ];
    $cff_link_weight = $atts[ 'linkweight' ];
    $cff_link_color = $atts[ 'linkcolor' ];
    $cff_link_styles = 'style="';
    if ( !empty($cff_link_size) && $cff_link_size != 'inherit' ) $cff_link_styles .=  'font-size:' . $cff_link_size . 'px; ';
    if ( !empty($cff_link_weight) && $cff_link_weight != 'inherit' ) $cff_link_styles .= 'font-weight:' . $cff_link_weight . '; ';
    if ( !empty($cff_link_color) ) $cff_link_styles .= 'color:#' . str_replace('#', '', $cff_link_color) . ';';
    $cff_link_styles .= '"';
    $cff_facebook_link_text = $atts[ 'facebooklinktext' ];
    $cff_view_link_text = $atts[ 'viewlinktext' ];
    $cff_link_to_timeline = $atts[ 'linktotimeline' ];
    /********** MISC **********/
    //Like Box styles
    $cff_likebox_bg_color = $atts[ 'likeboxcolor' ];

    $cff_like_box_text_color = $atts[ 'likeboxtextcolor' ];
    $cff_like_box_colorscheme = 'light';
    if ($cff_like_box_text_color == 'white') $cff_like_box_colorscheme = 'dark';

    $cff_likebox_width = $atts[ 'likeboxwidth' ];
    $cff_likebox_height = $atts[ 'likeboxheight' ];
    $cff_likebox_height = preg_replace('/px$/', '', $cff_likebox_height);

    if ( !isset($cff_likebox_width) || empty($cff_likebox_width) || $cff_likebox_width == '' ) $cff_likebox_width = '100%';
    $cff_like_box_faces = $atts[ 'likeboxfaces' ];
    if ( !isset($cff_like_box_faces) || empty($cff_like_box_faces) ) $cff_like_box_faces = 'false';
    $cff_like_box_border = $atts[ 'likeboxborder' ];
    if ($cff_like_box_border) {
        $cff_like_box_border = 'true';
    } else {
        $cff_like_box_border = 'false';
    }

    //Compile Like box styles
    $cff_likebox_styles = 'style="width: ' . $cff_likebox_width . ';';
    if ( !empty($cff_likebox_bg_color) ) $cff_likebox_styles .= ' background-color: #' . str_replace('#', '', $cff_likebox_bg_color) . ';';
    if ( empty($cff_likebox_bg_color) && $cff_like_box_faces == 'false' ) $cff_likebox_styles .= ' margin-left: -10px;';
    $cff_likebox_styles .= '"';

    //Get feed header settings
    $cff_header_bg_color = $atts['headerbg'];
    $cff_header_padding = $atts['headerpadding'];
    $cff_header_text_size = $atts['headertextsize'];
    $cff_header_text_weight = $atts['headertextweight'];
    $cff_header_text_color = $atts['headertextcolor'];

    //Compile feed header styles
    $cff_header_styles = 'style="';
    if ( !empty($cff_header_bg_color) ) $cff_header_styles .= 'background-color: #' . str_replace('#', '', $cff_header_bg_color) . ';';
    if ( !empty($cff_header_padding) ) $cff_header_styles .= ' padding: ' . $cff_header_padding . ';';
    if ( !empty($cff_header_text_size) ) $cff_header_styles .= ' font-size: ' . $cff_header_text_size . 'px;';
    if ( !empty($cff_header_text_weight) ) $cff_header_styles .= ' font-weight: ' . $cff_header_text_weight . ';';
    if ( !empty($cff_header_text_color) ) $cff_header_styles .= ' color: #' . str_replace('#', '', $cff_header_text_color) . ';';
    $cff_header_styles .= '"';

  //Separating Line
    $cff_sep_color = $atts[ 'sepcolor' ];
    if (empty($cff_sep_color)) $cff_sep_color = 'ddd';
    $cff_sep_size = $atts[ 'sepsize' ];
    //If empty then set a 0px border
    if ( empty($cff_sep_size) || $cff_sep_size == '' ) {
        $cff_sep_size = 0;
    //Need to set a color otherwise the CSS is invalid
        $cff_sep_color = 'fff';
    }
    //CFF item styles
    $cff_item_styles = 'style="';
    $cff_item_styles .= 'border-bottom: ' . $cff_sep_size . 'px solid #' . str_replace('#', '', $cff_sep_color) . '; ';
    $cff_item_styles .= '"';

    //Text limits
    $title_limit = $atts['textlength'];
    if (!isset($title_limit)) $title_limit = 9999;
    $body_limit = $atts['desclength'];
    //Assign the Access Token and Page ID variables
    $access_token = $atts['accesstoken'];
    $page_id = trim( $atts['id'] );

    //If user pastes their full URL into the Page ID field then strip it out
    $cff_facebook_string = 'facebook.com';
    $cff_page_id_url_check = stripos($page_id, $cff_facebook_string);

    if ( $cff_page_id_url_check ) {
    //Remove trailing slash if exists
        $page_id = preg_replace('{/$}', '', $page_id);
    //Get last part of url
        $page_id = substr( $page_id, strrpos( $page_id, '/' )+1 );
    }

    //If the Page ID contains a query string at the end then remove it
    if ( stripos( $page_id, '?') !== false ) $page_id = substr($page_id, 0, strrpos($page_id, '?'));

    //Get show posts attribute. If not set then default to 25
    $show_posts = $atts['num'];
    if (empty($show_posts)) $show_posts = 25;
    if ( $show_posts == 0 || $show_posts == 'undefined' ) $show_posts = 25;
    //If there's no Access Token then use the default
    if ($access_token == '') $access_token = '1436737606570258|MGh1BX4_b_D9HzJtKe702cwMRPI';
    //Check whether a Page ID has been defined
    if ($page_id == '') {
        echo "Please enter the Page ID of the Facebook feed you'd like to display. You can do this in either the Custom Facebook Feed plugin settings or in the shortcode itself. For example, [custom-facebook-feed id=YOUR_PAGE_ID_HERE].<br /><br />";
        return false;
    }

    //Is it SSL?
    $cff_ssl = '';
    if (is_ssl()) $cff_ssl = '&return_ssl_resources=true';

    $graph_query = 'events';

    //If the limit isn't set then set it to be 5 more than the number of posts defined
    if ( isset($atts['limit']) && $atts['limit'] !== '' ) {
        $cff_post_limit = $atts['limit'];
    } else {
        $cff_post_limit = intval(intval($show_posts) + 7);
    }

    //Calculate the cache time in seconds
    if($cff_cache_time_unit == 'minutes') $cff_cache_time_unit = 60;
    if($cff_cache_time_unit == 'hours') $cff_cache_time_unit = 60*60;
    if($cff_cache_time_unit == 'days') $cff_cache_time_unit = 60*60*24;
    $cache_seconds = $cff_cache_time * $cff_cache_time_unit;

    //Feed header
    $cff_show_header = $atts['showheader'];
    ($cff_show_header == 'true' || $cff_show_header == 'on') ? $cff_show_header = true : $cff_show_header = false;

    $cff_header_outside = $atts['headeroutside'];
    ($cff_header_outside == 'true' || $cff_header_outside == 'on') ? $cff_header_outside = true : $cff_header_outside = false;

    $cff_header_text = $atts['headertext'];
    $cff_header_icon = $atts['headericon'];
    $cff_header_icon_color = $atts['headericoncolor'];
    $cff_header_icon_size = $atts['headericonsize'];

    $cff_header = '<h3 class="cff-header';
    if ($cff_header_outside) $cff_header .= ' cff-outside';
    $cff_header .= '"' . $cff_header_styles . '>';
    $cff_header .= '<i class="fa fa-' . $cff_header_icon . '"';
    if(!empty($cff_header_icon_color) || !empty($cff_header_icon_size)) $cff_header .= ' style="';
    if(!empty($cff_header_icon_color)) $cff_header .= 'color: #' . str_replace('#', '', $cff_header_icon_color) . ';';
    if(!empty($cff_header_icon_size)) $cff_header .= ' font-size: ' . $cff_header_icon_size . 'px;';
    if(!empty($cff_header_icon_color) || !empty($cff_header_icon_size))$cff_header .= '"';
    $cff_header .= '></i>';
    $cff_header .= '<span class="header-text" style="height: '.$cff_header_icon_size.'px;">' . $cff_header_text . '</span>';
    $cff_header .= '</h3>';


    //***START FEED***
    $cff_content = '';

    //Add the page header to the outside of the top of feed
    if ($cff_show_header && $cff_header_outside) $cff_content .= $cff_header;

    //Create CFF container HTML
    $cff_content .= '<div class="cff-wrapper">';
    $cff_content .= '<div id="cff" rel="'.$title_limit.'" class="';
    if( !empty($cff_class) ) $cff_content .= $cff_class . ' ';
    if ( !empty($cff_feed_height) ) $cff_content .= 'cff-fixed-height ';
    $cff_content .= '" ' . $cff_feed_styles . '>';

    //Add the page header to the inside of the top of feed
    if ($cff_show_header && !$cff_header_outside) $cff_content .= $cff_header;

    //Limit var
    $i = 0;

    //Define array for post items
    $cff_posts_array = array();

    //ALL EVENTS
    $cff_posts_json_url = 'https://graph.facebook.com/' . $page_id . '/' . $graph_query . '?since=today&until=60+days&access_token=' . $access_token . '&limit=' . $cff_post_limit . '&locale=' . $cff_locale . $cff_ssl;

    //Don't use caching if the cache time is set to zero
    if ($cff_cache_time != 0){
    // Get any existing copy of our transient data
        $transient_name = 'cff_'. $graph_query .'_json_' . $page_id;
        if ( false === ( $posts_json = get_transient( $transient_name ) ) || $posts_json === null ) {
    //Get the contents of the Facebook page
            $posts_json = cff_fetchUrl($cff_posts_json_url);
    //Cache the JSON
            set_transient( $transient_name, $posts_json, $cache_seconds );
        } else {
            $posts_json = get_transient( $transient_name );
    //If we can't find the transient then fall back to just getting the json from the api
            if ($posts_json == false) $posts_json = cff_fetchUrl($cff_posts_json_url);
        }
    } else {
        $posts_json = cff_fetchUrl($cff_posts_json_url);
    }


    //Interpret data with JSON
    $FBdata = json_decode($posts_json);
    //***STARTS POSTS LOOP***
    foreach ($FBdata->data as $events_data )
    {
    //Explode News and Page ID's into 2 values
        $PostID = explode("_", $events_data->id);
    //Check the post type
        $cff_post_type = "event";
        $cff_show_post = true;

        if ( $cff_show_post ) 
        {

    //Only create posts for the amount of posts specified
            if ( $i == $show_posts ) break;
            $i++;
    //********************************//
    //***COMPILE SECTION VARIABLES***//
    //********************************//

            $eventID = $events_data->id;
            $link = "https://www.facebook.com/events/" . $eventID ;

    //Get the contents of the event using the WP HTTP API
            $event_json_url = 'https://graph.facebook.com/'.$eventID.'?access_token=' . $access_token . $cff_ssl;

    //Don't use caching if the cache time is set to zero
            if ($cff_cache_time != 0){
    // Get any existing copy of our transient data
                $transient_name = 'cff_timeline_event_json_' . $eventID;
                if ( false === ( $event_json = get_transient( $transient_name ) ) || $event_json === null ) {
    //Get the contents of the Facebook page
                    $event_json = cff_fetchUrl($event_json_url);
    //Cache the JSON
                    set_transient( $transient_name, $event_json, $cache_seconds );
                } else {
                    $event_json = get_transient( $transient_name );
    //If we can't find the transient then fall back to just getting the json from the api
                    if ($event_json == false) $event_json = cff_fetchUrl($event_json_url);
                }
            } else {
                $event_json = cff_fetchUrl($event_json_url);
            }

    //Interpret data with JSON
            $event_object = json_decode($event_json);

    //DATE
            $cff_date_formatting = $atts[ 'dateformat' ];
            $cff_date_custom = $atts[ 'datecustom' ];

            $post_time = $event_object->updated_time;
            $cff_date = '<p class="cff-date" '.$cff_date_styles.'>'. $cff_date_before . ' ' . cff_getdate(strtotime($post_time), $cff_date_formatting, $cff_date_custom) . ' ' . $cff_date_after . '</p>';
    //EVENT
            $cff_event = '';

    //POST AUTHOR
            $cff_author = '<div class="cff-author"><a href="https://facebook.com/' . $event_object->owner->id . '" '.$target.' title="'.$event_object->owner->name.' on Facebook" '.$cff_author_styles.'>';

    //Set the author image as a variable. If it already exists then don't query the api for it again.
            $cff_author_img_var = '$cff_author_img_' . $event_object->owner->id;
            if ( !isset($$cff_author_img_var) ) $$cff_author_img_var = 'https://graph.facebook.com/' . $event_object->owner->id . '/picture?type=square';
            $cff_author .= '<img src="'.$$cff_author_img_var.'" title="'.$news->from->name.'" alt="'.$event_object->owner->name.'" width=50 height=50>';
            $cff_author .= '<span class="cff-page-name">'.$event_object->owner->name.'</span>';
            $cff_author .= '</a></div>';

    //Event date
            $cff_sortTime = $post_time;
            isset( $event_object->start_time ) ? $event_time = $event_object->start_time : $event_time = '';
    //If timezone migration is enabled then remove last 5 characters
            if ( strlen($event_time) == 24 ) $event_time = substr($event_time, 0, -5);
            if (!empty($event_time))
            {
                $cff_sortTime=$event_time;
                $dateTime = strtotime($event_time);

                $cff_event_date = '<p class="cff-date" '.$cff_event_date_styles.'>' . cff_eventdate($dateTime, $cff_event_date_formatting, $cff_event_date_custom) . '</p>';

                $cff_event_date_img = '<div class="cff-date-image"><time datetime="' . date('c', $dateTime). '" class="cff-dateicon"><em>' . date('l', $dateTime) . '</em><strong>'. date('F', $dateTime) . '</strong><span>' . date('j', $dateTime) . '</span></time></div>';

            }
    //EVENT
    //Display the event details
            $cff_event .= '<div class="cff-details-container">';

            $cff_event .= $cff_event_date_img;
            $cff_event .= '<div class="cff-details">';
    //show event date above title
            if ($cff_event_date_position == 'above') $cff_event .= $cff_event_date;
    //Show event title
            if ($cff_show_event_title && !empty($event_object->name)) {
                if ($cff_event_title_link) $cff_event .= '<a href="'.$link.'">';
                $cff_event .= '<' . $cff_event_title_format . ' ' . $cff_event_title_styles . '>' . $event_object->name . '</' . $cff_event_title_format . '>';
                if ($cff_event_title_link) $cff_event .= '</a>';
            }
    //show event date below title
            if ($cff_event_date_position !== 'above') $cff_event .= $cff_event_date;
   
    //Show event details
    //Location
            if (!empty($event_object->location)) 
            {
                $cff_event .= '<p class="cff-where" ' . $cff_event_details_styles . '><a href="https://facebook.com/'. $event_object->venue->id .'">' . $event_object->location . '</a></p>';
            }
    //Description
            if (!empty($event_object->description)){
                $description = $event_object->description;
                if (!empty($body_limit)) {
                    if (strlen($description) > $body_limit) $description = substr($description, 0, $body_limit) . '...';
                }
                $cff_event .= '<p class="cff-info" ' . $cff_event_details_styles . '>' . cff_autolink($description, $link_color=str_replace('#', '', $cff_event_link_color) ) . '</p>';
            }

            $cff_event .= '</div><div class="cff-event-clearfix"></div></div>';

    //Display the link to the Facebook post or external link
            $cff_link = '';
    //Default link
            $cff_viewpost_class = 'cff-viewpost-facebook';
            if ($cff_facebook_link_text == '') $cff_facebook_link_text = 'View on Facebook';
            $link_text = $cff_facebook_link_text;

    //**************************//
    //***CREATE THE POST HTML***//
    //**************************//
    //Start the container
            $cff_post_item = '<div class="cff-item cff-timeline-event">';
    //POST AUTHOR
            if($cff_show_author) $cff_post_item .= $cff_author;
    //DATE ABOVE
            if ($cff_show_date && $cff_date_position == 'above') $cff_post_item .= $cff_date;
    //EVENT
            if($cff_show_event_title || $cff_show_event_details) $cff_post_item .= $cff_event;
    //DATE BELOW
            if ($cff_show_date && $cff_date_position == 'below') $cff_post_item .= $cff_date;
    //VIEW ON FACEBOOK LINK
            if($cff_show_link) $cff_post_item .= $cff_link;

    //End the post item
            $cff_post_item .= '</div>';

    //PUSH TO ARRAY
            $cff_posts_array = cff_array_push_assoc($cff_posts_array, strtotime($cff_sortTime), $cff_post_item);

        }
    // End post type check

    }
    // End the loop

    //Sort the array in normal order (oldest first)
    ksort($cff_posts_array);


    //Output the posts array
    $p = 0;
    foreach ($cff_posts_array as $post ) {
        if ( $p == $show_posts ) break;
        $cff_content .= $post;
        $p++;
    }

    //Reset the timezone
    date_default_timezone_set( $cff_orig_timezone );
    //End the feed
    $cff_content .= '</div><div class="cff-clear"></div>';

    //If the feed is loaded via Ajax then put the scripts into the shortcode itself
    $ajax_theme = $atts['ajax'];
    ( $ajax_theme == 'on' || $ajax_theme == 'true' || $ajax_theme == true ) ? $ajax_theme = true : $ajax_theme = false;
    if( $atts[ 'ajax' ] == 'false' ) $ajax_theme = false;
    if ($ajax_theme) $cff_content .= '<script type="text/javascript" src="' . plugins_url( '/js/cff-scripts.js?8' , __FILE__ ) . '"></script>';

    $cff_content .= '</div>';

    //Return our feed HTML to display
    return $cff_content;
}

error_reporting(0);
?>
