<?php
/*
 * Xibo - Digital Signage - http://www.xibo.org.uk
 * Copyright (C) 2006-2014 Daniel Garner
 *
 * This file is part of Xibo.
 *
 * Xibo is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * any later version.
 *
 * Xibo is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with Xibo.  If not, see <http://www.gnu.org/licenses/>.
 */
defined('XIBO') or die("Sorry, you are not allowed to directly access this page.<br /> Please press the back button in your browser.");
?><!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo Theme::GetConfig('theme_title'); ?></title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="<?php echo Theme::ImageUrl('favicon.ico'); ?>" />

        <link href="theme/default/libraries/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="theme/default/libraries/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
        <link href="theme/default/libraries/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="theme/default/libraries/bootstrap-select/css/bootstrap-select.css" rel="stylesheet">
        <link href="theme/default/libraries/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
        <link href="theme/default/libraries/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
        <link href="theme/default/libraries/bootstrap-ekko-lightbox/ekko-lightbox.min.css" rel="stylesheet">
        <link href="theme/default/libraries/calendar/css/calendar.css" rel="stylesheet">
        <link href="theme/default/libraries/morrisjs/morris.css" rel="stylesheet">
        <link href="theme/default/libraries/jquery-tablesorter/css/theme.bootstrap.css" rel="stylesheet">
        <link href="theme/default/libraries/jquery/jquery-ui/css/ui-lightness/jquery-ui-1.10.2.custom.min.css" rel="stylesheet">
        <link href="theme/default/libraries/jquery-file-upload/css/jquery.fileupload-ui.css" rel="stylesheet">
        <link href="modules/preview/fonts.css" rel="stylesheet">
        <link href="<?php echo Theme::ItemPath('css/xibo.css'); ?>" rel="stylesheet" media="screen">
        <link href="<?php echo Theme::ItemPath('css/dashboard.css'); ?>" rel="stylesheet" media="screen">
        <link href="<?php echo Theme::ItemPath('css/timeline.css'); ?>" rel="stylesheet" media="screen">
        <link href="<?php echo Theme::ItemPath('css/calendar.css'); ?>" rel="stylesheet" media="screen">
        <link href="<?php echo Theme::ItemPath('css/override.css'); ?>" rel="stylesheet" media="screen">
    </head>
    <body>
        <div id="page-wrapper" class="active">

            <div id="sidebar-wrapper">
                <?php
                if (Theme::Get('sidebar_html' != NULL)) {
                    echo Theme::Get('sidebar_html');
                }
                ?>
            </div>
            <div id="content-wrapper">
                <div class="page-content">
                    <div class="row header">
                        <div class="col-sm-12">
                            <div class="meta pull-left">
                                <div class="page"></div>
                            </div>
                            <div class="user pull-right">
                                <div class="item dropdown">

                                </div>
                            </div>
                            <?php if (count(Theme::Get('notifications')) > 0) { ?>
                            <div class="user pull-right">
                                <div class="item dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-exclamation-circle"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-header"><?php echo Theme::Translate('Notifications'); ?><br/>

                                        </li>
                                        <li class="divider"></li>
                                        <?php foreach(Theme::Get('notifications') as $notification) { ?>
                                        <li><div><?php echo $notification; ?></div></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                        <?php if (is_array(Theme::Get('action_menu'))) { ?>
                            <ul class="nav nav-pills pull-right">

                            <?php foreach (Theme::Get('action_menu') as $item) {
                                echo '<li class="' . (($item['selected']) ? ' active' : '') . '"><a title="' . $item['help'] . '" href="' . $item['link'] . '" class="' . $item['class'] . (($item['selected']) ? ' active' : '') . '" onclick="' . $item['onclick'] . '">' . $item['title'] . '</a></li>';
                            }
                            echo '</ul>';
                        } ?>
