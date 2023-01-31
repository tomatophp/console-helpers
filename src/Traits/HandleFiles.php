<?php

namespace TomatoPHP\ConsoleHelpers\Traits;

use Illuminate\Support\Facades\File;

trait HandleFiles
{
    public string $publish;
    /**
     * @param string $from
     * @param string $to
     * @param string $type
     * @return void
     */
    public function handelFile(string $from, string $to, string $type = 'file'): void
    {
        $checkIfFileEx = $this->checkFile($to);
        if($checkIfFileEx){
            $this->deleteFile($to);
            $this->copyFile($this->publish .$from, $to, $type);
        }
        else {
            $this->copyFile($this->publish .$from, $to, $type);
        }
    }

    /**
     * @param string $path
     * @return bool
     */
    public function checkFile(string $path): bool
    {
        return File::exists($path);
    }

    /**
     * @param string $from
     * @param string $to
     * @param string $type
     * @return bool
     */
    public function copyFile(string $from, string $to, string $type ='file'): bool
    {
        if($type === 'folder'){
            $copy = File::copyDirectory($from , $to);
        }
        else {
            $copy = File::copy($from , $to);
        }

        return $copy;
    }

    /**
     * @param string $path
     * @param string $type
     * @return bool
     */
    public function deleteFile(string $path, string $type ='file'): bool
    {
        if($type === 'folder'){
            $delete = File::deleteDirectory($path);
        }
        else {
            $delete = File::delete($path);
        }

        return $delete;
    }

}
