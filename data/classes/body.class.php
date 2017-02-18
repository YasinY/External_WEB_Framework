<?php

class Body extends Part
{

    protected $js_files_identifiers;

    protected $html_files_identifiers;

    protected $css_files_identifiers;

    protected $html_content;

    /**
     * Body constructor. Creates a new {@link Body} instance.
     */
    function __construct()
    {
        $this->js_files_identifiers = array();
        $this->html_files_identifiers = array('body.html');
        $this->css_files_identifiers = array();
    }

    /**
     * Gets the javascript files as
     * @return mixed
     */
    function get_js_files_identifiers()
    {
        return $this->js_files_identifiers;
    }

    /**
     * @return mixed
     */
    function get_html_files_identifiers()
    {
        return $this->html_files_identifiers;
    }

    /**
     * @return mixed
     */
    function get_css_files_identifiers()
    {
        return $this->css_files_identifiers;
    }
    
}