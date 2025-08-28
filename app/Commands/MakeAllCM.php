<?php

namespace App\Commands;

use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;

class MakeAllCM extends BaseCommand
{
    protected $group       = 'Generators';
    protected $name        = 'make:allcm';
    protected $description = 'Generate Controller, Model cùng lúc.';

    public function run(array $params)
    {
        $name = array_shift($params);

        if (!$name) {
            $name = CLI::prompt('Nhập tên resource (vd: User)');
        }

        // 1. Tạo Controller
        CLI::write("👉 Đang tạo Controller...", 'yellow');
        command('make:controller ' . $name);

        // 2. Tạo Model
        CLI::write("👉 Đang tạo Model...", 'yellow');
        command('make:model ' . $name);

        //3. Tạo layout
        $path = APPPATH . "Views/layouts/{$name}/index.php";

        if (file_exists($path)) {
            CLI::error("Layout [$name] đã tồn tại!");
            return;
        }

        $this->createfile($name, 'index', $this->templteIndex());

        CLI::write("✅ Layout [$name] đã được tạo tại: app/Views/layouts/{$name}.php", 'green');
        CLI::write("✅ Hoàn tất! Đã tạo Controller, Model cho [$name]", 'green');
    }

    function createfile($nameFolder, $nameFile, $template)
    {
        // $path_view = 'Views/layouts/pages';
        $path = APPPATH . "Views/pages/{$nameFolder}/{$nameFile}.php";
        $this->checkAndCreateDir($path);

        if (file_exists($path)) {
            CLI::error("Layout [$nameFile] đã tồn tại!");
            return;
        }
        if (!is_dir(APPPATH . $path)) {
            mkdir(APPPATH . $path, 0777, true);
        }

        file_put_contents($path, $template);   
    }
    function templteIndex()
    {
        return <<<EOD
        <!DOCTYPE html>
        <html lang="en">
        <head>
        <meta charset="UTF-8">
        <title><?= esc(\$title ?? 'My App') ?></title>
        </head>
        <body>
        <?= \$this->renderSection('content') ?>
        </body>
        </html>
        EOD;
    }

    function checkAndCreateDir($path)
    {
        // Lấy thư mục cha
        $dir = dirname($path);

        // Nếu thư mục chưa có thì tạo
        if (!is_dir($dir)) {
            if (!mkdir($dir, 0777, true) && !is_dir($dir)) {
                throw new \RuntimeException("Không thể tạo thư mục: $dir");
            }
        }
    }

}
