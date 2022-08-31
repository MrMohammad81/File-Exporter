<?php
namespace Exporter;

class TextExporter extends Exporter{
    protected $format = ".txt";

    public function export()
    {
        $file_name = "text-file-" . rand(100,500).$this->format;
        $file_patch = __DIR__ ."/files/Export To Text/$file_name";
        file_put_contents($file_patch , "{$this->data['title']} , {$this->data['content']}");
        echo "$file_name successfully created!!\n";
    }

    public function is_valid(){}
}

