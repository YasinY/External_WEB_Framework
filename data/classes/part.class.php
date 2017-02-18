<?php

abstract class Part implements Identifiers
{


    /**
     * @return mixed
     */
    abstract function get_js_files_identifiers();


    /**
     * @return mixed
     */
    abstract function get_html_files_identifiers();


    /**
     * @return mixed
     */
    abstract function get_css_files_identifiers();

    /**
     *
     * @return array
     */
    function read_html_content()
    {
        $files = glob('./data/html/*.html');
        $content = array();
        foreach ($this->get_html_files_identifiers() as $html_file_identifier) {
            foreach ($files as $file) {
                $file_name = basename($file);
                if ($file_name == $html_file_identifier) {
                    array_push($content, array($file_name, readfile($file)));
                }
            }
        }
        return $content;
    }

}