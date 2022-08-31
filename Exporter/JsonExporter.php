<?php
namespace Exporter;

class JsonExporter extends Exporter{
    protected $format = ".json";

    public  function export()
    {
        $file_name = "json-file-" . rand(100,500).$this->format;
        $file_patch = __DIR__ ."/files/Export To Json/$file_name";
        file_put_contents($file_patch,json_encode( "{$this->data['title']} , {$this->data['content']}"));
        echo "$file_name successfully created!!\n";
    }

    public function is_valid(){}
}
