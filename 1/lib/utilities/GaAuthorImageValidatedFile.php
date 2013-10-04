<?php

/**
 * Custom class for sfValidatedFile
 */
class GaAuthorImageValidatedFile extends sfValidatedFile
{
    private $dimensionLimit;

    /**
     * Sets dimension limit
     */
    public function setDimensionLimit($dimension)
    {
        $this->dimensionLimit = $dimension;
    }

    /**
     * handles saving of file
     */
    public function save($file = null, $fileMode = 0666, $create = true, $dirMode = 0777)
    {

        
        $this->orientImage($this->getTempName());
        $uploadedFile = $this->getTempName();
        
        $fileInfo = getimagesize($uploadedFile);
      
        $img = new sfImage($uploadedFile, $fileInfo['mime']);
        $img->thumbnail($this->dimensionLimit['width'], $this->dimensionLimit['height'], 'center');
        $img->save();

        $fileParts = pathinfo($this->getOriginalName());
        $extension = isset($fileParts['extension']) ? $fileParts['extension'] : $this->getOriginalExtension();
        $filename = $fileParts['filename'].'-'.time().'.'.$extension;

        return parent::save($filename, $fileMode, $create, $dirMode);
    }

    /**
     *  rotate image
     */
    protected function orientImage($file_path) {
        $exif = @exif_read_data($file_path);
        if ($exif === false) {
            return false;
        }
        $orientation = intval(@$exif['Orientation']);
        if (!in_array($orientation, array(3, 6, 8))) { 
            return false;
        }
        $image = @imagecreatefromjpeg($file_path);
        switch ($orientation) {
              case 3:
                $image = @imagerotate($image, 180, 0);
                break;
              case 6:
                $image = @imagerotate($image, 270, 0);
                break;
              case 8:
                $image = @imagerotate($image, 90, 0);
                break;
            default:
                return false;
        }
        $success = imagejpeg($image, $file_path);
        // Free up memory (imagedestroy does not delete files):
        @imagedestroy($image);
        return $success;
    }
}