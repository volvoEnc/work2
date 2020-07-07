<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;

use App\Tools\ZipManager;

class APIParsing extends Model
{
    protected $table = 'api_parsings';

    protected $fields = [
        'filename',
        'zip_archive_id'
    ];

    public function giveMeContent () {
        if ($this->zip_archive_id == null) {
            return Storage::get('apis\\' . $this->filename);
        } else {
            $just_name = explode('\\', $this->filename);
            $just_name = $just_name[count($just_name) - 1];
            return ZipManager::giveMeFile($this->zip_archive_id, $just_name);
        }
    }
}