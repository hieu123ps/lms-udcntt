/**
 * This file is part of Moodle - http://moodle.org/
 *
 * Moodle is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Moodle is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Moodle.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package
 * @copyright Copyright (c) 2020 Open LMS (https://www.openlms.net)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Login option rendering validation function.
 */
define(['jquery'],
    function($) {

        'use strict';

        var self = {};
        self.enabledLoginOptions = [];
        self.enabledLoginOptions['ENABLED_LOGIN_BOTH']        = '0';
        self.enabledLoginOptions['ENABLED_LOGIN_MOODLE']      = '1';
        self.enabledLoginOptions['ENABLED_LOGIN_ALTERNATIVE'] = '2';

        /**
         * AMD return object.
         */
        return {
            /**
             * Snap login option render
             * @param {int} loginrender
             * @param {int} loginorder
             */
            loginRender : function (loginrender, loginorder) {
                var show = function (render, order, cb) {
                    switch (render) {
                        case self.enabledLoginOptions['ENABLED_LOGIN_MOODLE']:
                            $('.snap-login-option').show();
                            $('#snap-alt-login').hide();
                            cb();
                            break;

                        case self.enabledLoginOptions['ENABLED_LOGIN_ALTERNATIVE']:
                            $('.snap-login-option').show();
                            $('#login').hide();
                            cb();
                            break;

                        default:
                            $('.snap-login-option').show();
                            cb();
                    }
                };
                show(loginrender, loginorder, function () {
                    $('.snap-log-in-more').hide();
                    $('.snap-log-in-more').css('visibility','hidden');
                });
            }
        };
    }
);
