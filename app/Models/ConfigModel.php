<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\CLI\CLI;

class ConfigModel extends Model
{
    protected $table      = 'user_configs';       // Tên bảng
    protected $primaryKey = 'id';          // Khóa chính
    protected $allowedFields = ['key', 'value', 'status']; // Các cột cho phép insert/update
    protected $useTimestamps = true;       // Tự động dùng created_at, updated_at

    public function getConfigs()
    {
        return $this->where('status', 0)->findAll();
        // return $this->findAll();         
    }
}
