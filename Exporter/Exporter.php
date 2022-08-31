<?php
namespace Exporter;
interface Exportable
{
    public function export();
}

abstract class Exporter implements Exportable {

    protected $format;
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
        if ($this->is_valid())
        {
            die("invalid Data!!!");
        }
    }

    public function is_valid()
    {
        foreach ($this->data as $filed)
        {
            if (empty($filed))
            {
                return false;
            }
        }
        return true;
    }
}
