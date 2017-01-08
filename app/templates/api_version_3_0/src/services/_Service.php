<?php
/**
 * <%= pluginName %> plugin for Craft CMS 3.x
 *
 * <%= pluginDescription %>
 *
 * @link      <%= pluginAuthorUrl %>
 * @copyright <%= copyrightNotice %>
 */

namespace <%= pluginVendorName %>\<%= pluginDirName%>\services;

use <%= pluginVendorName %>\<%= pluginDirName%>\<%= pluginHandle %>;

use Craft;
use craft\base\Component;

/**
 * <%= serviceName[index] %> Service
 *
<% if ((typeof codeComments !== 'undefined') && (codeComments)){ -%>
 * All of your plugin’s business logic should go in services, including saving data,
 * retrieving data, etc. They provide APIs that your controllers, template variables,
 * and other plugins can interact with.
 *
 * https://craftcms.com/docs/plugins/services
 *
<% } -%>
 * @author    <%= pluginAuthorName %>
 * @package   <%= pluginHandle %>
 * @since     <%= pluginVersion %>
 */
class <%= serviceName[index] %> extends Component
{
    /**
<% if ((typeof codeComments !== 'undefined') && (codeComments)){ -%>
     * This function can literally be anything you want, and you can have as many service
     * functions as you want
     *
     * From any other plugin file, call it like this:
     *
     *     <%= pluginHandle %>::$plugin-><%= serviceName[index][0].toLowerCase() + serviceName[index].slice(1) %>->exampleService()
     *
<% } -%>
     * @return mixed
     */
    public function exampleService()
    {
    }

}