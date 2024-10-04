<?php 
namespace app\models;
use CodeIgniter\Model;

class LoginModel extends Model{
    protected $table      = 'tblusuarios';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['vchnomuser', 'vchpassword','vchtipo','vchimg','vchcorreo'];

}