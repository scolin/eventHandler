<?php
# -- BEGIN LICENSE BLOCK ----------------------------------
# This file is part of eventHandler, a plugin for Dotclear 2.
# 
# Copyright (c) 2009-2010 JC Denis and contributors
# jcdenis@gdwd.com
# 
# Licensed under the GPL version 2.0 license.
# A copy of this license is available in LICENSE file or at
# http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
# -- END LICENSE BLOCK ------------------------------------

if (version_compare(str_replace("-r","-p",DC_VERSION),'2.2-alpha','<')){return;}

# set ns
$core->blog->settings->addNamespace('eventHandler');
		html::escapeJS($core->blog->url.$core->url->getBase('eventhandler_pubrest').'/')."'; \n".
		html::escapeJS('eventHandlerCalendar')."'; \n".
		html::escapeJS($core->blog->uid)."'; \n".
		html::escapeJS(__('Please wait'))."'; \n".
			array('eventHandlerPublicRest','calendar'));
		$core->blog->settings->system->lang.'" lang="'.$core->blog->settings->system->lang.'">'."\n".
		'pf=eventHandler/default-templates/event-hcalendar.css);'."\n".
		' - '.__('Events').'</a></h1>'."\n";
			$core->blog->url.$core->url->getBase('eventhandler_list').$x_dc_folder.'">'.
			$x_dc_folder.'</a></p>'."\n";
		$core->blog->settings->system->lang.'" lang="'.$core->blog->settings->system->lang.'">'."\n".
		"/".$core->blog->settings->system->theme.'/../default/js/jquery.js"></script>'."\n".
		"/".$core->blog->settings->system->theme.'/../default/js/jquery.cookie.js"></script>'."\n".
		'pf=eventHandler/js/event-public-map.js"></script>'."\n".
		'html { height: 100%; } body { height: 100%; margin: 0px; padding: 0px; } '.
		'.event-gmap, .event-gmap-place { height: 100%; } h2 { margin: 2em;}</style>'."\n".
		
		if ($rs->count()) {
			$total_lat = $total_lng = 0;
			$markers = '';
			while($rs->fetch())
			{
				$total_lat += (float) $rs->event_latitude;
				$total_lng += (float) $rs->event_longitude;
				$markers .= $rs->getGmapVEVENT();
			}
			$lat = round($total_lat / $rs->count(), 7);
			$lng = round($total_lng / $rs->count(), 7);
		}
		else {
			$res .= '<h2>'.__("There's no event at this time.").'</h2>';
		}
		$res .= 
			html::decodeEntities($list) : 
			'<ul>%s</ul>';
			html::decodeEntities($item) : 
			'<li><a href="%s">%s</a>%s</li>';
			html::decodeEntities($active_item) : 
			'<li class="nav-active"><a href="%s">%s</a>%s</li>';
			$_ctx->event_params['event_period'] : 
			'all';