<?php

namespace Phalcon\Init\Tanyajawab\Models;

use Phalcon\Mvc\Model;

class Pertanyaan extends Model
{
    public $id;
    public $id_pasien;
    public $topik;
    public $pertanyaan;
    public $status;
}