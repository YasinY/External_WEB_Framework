<?php

class Head extends Part
{

    protected $js_files_identifiers;

    protected $html_files_identifiers;

    protected $css_files_identifiers;

    protected $html_content;

    /**
     * Head constructor. Creates a new {@link Head} instance
     */
    function __construct()
    {
        $this->js_files_identifiers = array();
        $this->html_files_identifiers = array('head.html');
        $this->css_files_identifiers = array();

    }

    /**
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