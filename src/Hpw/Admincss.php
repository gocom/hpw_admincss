<?php

/*
 * hpw_admincss - Admin-side stylesheet
 * https://github.com/gocom/hpw_admincss
 *
 * Copyright (C) 2005 Adrian Duffell
 * Copyright (C) 2015 Jukka Svahn
 *
 * This file is part of hpw_admincss.
 *
 * hpw_admincss is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation, version 2.
 *
 * hpw_admincss is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with hpw_admincss. If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * The plugin class.
 *
 * @internal
 */

class Hpw_Admincss
{
    /**
     * Constructor.
     */

    public function __construct()
    {
        register_callback(array($this, 'render'), 'admin_side', 'head_end');
    }

    /**
     * Outputs link element pointing to a style sheet named 'admin'.
     */

    public function render()
    {
        echo '<link href="'.hu.'css.php?n=admin" rel="stylesheet" type="text/css" />';
    }
}

new Hpw_Admincss();
