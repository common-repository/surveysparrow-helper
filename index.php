<?php
/*
Plugin Name: SurveySparrow | Feedback Widget | Contact Form | Lead Generation Pop Up
Plugin URI: http://surveysparrow.com
Tags: surveysparrow, survey, feedback, survey tool
Author URI: http://surveysparrow.com
Author: SurveySparrow
Version: 1.04
Tested up to: 5.2.2
*/  

    function sparrow_return_script($atts){
        if(array_key_exists('env',$atts)){
            $script = sprintf('<script>(function(){var t,e,s,n="ss-widget",r="script",a=document,o=window;o.SS_WIDGET_TOKEN="%s",o.SS_ACCOUNT="%s",o.SS_SURVEY_NAME="%s";a.getElementById(n)||(t=a.getElementsByTagName(r),s=t[t.length-1],e=a.createElement(r),e.type="text/javascript",e.async=!0,e.id=n,e.src=["https://","assets.surveysparrow.com/%s/%s","/widget.js?token=",o.SS_WIDGET_TOKEN].join(""),s.parentNode.insertBefore(e,s))})();</script>',$atts['token'],$atts['account'],$atts['survey'],$atts['env'],$atts['version']);
        }
        else{
            $script = sprintf('<script>(function(){var t,e,s,n="ss-widget",r="script",a=document,o=window;o.SS_WIDGET_TOKEN="%s",o.SS_ACCOUNT="%s",o.SS_SURVEY_NAME="%s";a.getElementById(n)||(t=a.getElementsByTagName(r),s=t[t.length-1],e=a.createElement(r),e.type="text/javascript",e.async=!0,e.id=n,e.src=["https://","assets.surveysparrow.com/production/%s","/widget.js?token=",o.SS_WIDGET_TOKEN].join(""),s.parentNode.insertBefore(e,s))})();</script>',$atts['token'],$atts['account'],$atts['survey'],$atts['version']);
        }
        return $script;
    }
    add_shortcode('surveysparrow','sparrow_return_script');
?>