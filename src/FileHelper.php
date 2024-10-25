<?php

namespace housten\Composer;

class FileHelper
{
    /**
     * Recursively delete a directory
     */
    public function removeDirectory(string $rootPath): void
    {
        $dir = opendir($rootPath);

        while (false !== ($file = readdir($dir))) {
            if (($file != '.') && ($file != '..')) {
                $full = $rootPath . "/" . $file;

                if (is_dir($full)) {
                    self::removeDirectory($full);
                } else {
                    unlink($full);
                }
            }
        }

        closedir($dir);
        rmdir($rootPath);
    }

    public function removeFile(string $filePath): void
    {
        unlink($filePath);
    }

    /**
     * Recursively copy a directory
     */
    public function copyDirectory(string $src, string $dst): void
    {
        $dir = opendir($src);
        @mkdir($dst);

        while (false !== ($file = readdir($dir))) {
            if (($file != '.') && ($file != '..')) {
                if (is_dir($src . "/" . $file)) {
                    self::copyDirectory($src . "/" . $file, $dst . "/" . $file);
                } else {
                    copy($src . "/" . $file, $dst . "/" . $file);
                }
            }
        }

        closedir($dir);
    }
}
