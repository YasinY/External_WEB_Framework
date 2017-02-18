<?php

class Entry
{

    private $parts_html_content;

    /**
     * Entry constructor. Creates a new {@link Entry} instance.
     */
    function __construct()
    {
        $this->parts_html_content = array('head' => (new Head())->read_html_content(),
            'body' => (new Body())->read_html_content());
    }

    function get_parts_html_content()
    {
        return $this->parts_html_content;
    }

    function get_head() {
        return (isset($this->parts_html_content['head'])) ? $this->parts_html_content['head'] : 'Error loading header';
    }


    function get_body() {
        return (isset($this->parts_html_content['body'])) ? $this->parts_html_content['head'] : 'Error loading body';
    }

    function get_properties()
    {
        return $this->properties;
    }

}