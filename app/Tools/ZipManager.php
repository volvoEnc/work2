<?php
namespace App\Tools;

use App\Models\APIParsing;
use App\Models\ZipArchive as ZipArchiveModel;

class ZipManager {
    public static function giveMeFile($archive_id, $filename) {
        $zip = new \ZipArchive;
        $archive = ZipArchiveModel::where('id', $archive_id)->first();
        
        if ($zip->open(storage_path('app/apis/archives/' . $archive->zip_path)) === TRUE) {
            return $zip->getFromName($filename);
        }
    }

    public static function zip_api_parsing (APIParsing $to_parse) {
        if ($to_parse->zip_archive_id) {
            return;
        }
        $archive = ZipArchiveModel::where('items', '<', 1000)->first();
        if (!$archive) {
            $archive = new ZipArchiveModel();
        }

        $filename = 'dump_' . uniqid() . '.zip';

        $zip = new \ZipArchive;
        if ($archive->zip_path) {
            if ($zip->open(storage_path('app/apis/archives/' . $archive->zip_path)) === TRUE) {
                $just_name = explode('\\', $to_parse->filename);
                $just_name = $just_name[count($just_name) - 1];
                $zip->addFile(storage_path('app/apis/' . $to_parse->filename), $just_name); 

                $zip->close();
                $archive->items++;
                $archive->save(); 
                $to_parse->zip_archive_id = $archive->id;
            } else {
                $to_parse->finished = 0;
                $to_parse->on_item = 0;
                $to_parse->in_proccess = 0;
                $to_parse->errors++;
                $to_parse->last_error = 'Unable to add files to archive';
            }
            $to_parse->save();
        } else {
            if ($zip->open(storage_path('app/apis/archives/' . $filename), \ZipArchive::CREATE) === TRUE)
            {
                // Add files to the zip file inside demo_folder
                $just_name = explode('\\', $to_parse->filename);
                $just_name = $just_name[count($just_name) - 1];
                $zip->addFile(storage_path('app/apis/' . $to_parse->filename), $just_name); 
                // All files are added, so close the zip file.
                $zip->close();
                $archive->zip_path = $filename;
                $archive->items = 1;
                $archive->save();
                $to_parse->zip_archive_id = $archive->id;
            } else {
                $to_parse->finished = 0;
                $to_parse->on_item = 0;
                $to_parse->in_proccess = 0;
                $to_parse->errors++;
                $to_parse->last_error = 'Unable to archive file';
            }
            $to_parse->save();
        }
        $archive->save();
    }
}